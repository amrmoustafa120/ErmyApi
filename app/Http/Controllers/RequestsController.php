<?php

namespace App\Http\Controllers;

use App\requests;
use App\User;
use App\UserTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RequestsController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = requests::all();
        return view('requests.index', compact('requests'));
    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userrequestview()
    {
        return view('frontend.usercreaterequest');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userrequests(Request $request)
    {
        $user = Auth::user();
        $requests = requests::where('user_id', $user->id)->get();

        if( $request['mobile'] == 1){
            return response()->json($requests, 200);
        }
        else{
            return view('frontend.myrequests', compact('requests'));
        }    
        

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function workerrequests()
    {
        $user = Auth::user();
        $requests = requests::where('worker_id', $user->id)->get();
        return view('requests.workerrequest', compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usertype = UserTypes::where('type','user')->first();
        $workertype = UserTypes::where('type','worker')->first();
        $users = User::where('type_id', $usertype->id)->get();
        $workers = User::where('type_id', $workertype->id)->get();
        // dd($users);
        return view('requests.create', compact('users','workers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reqquest = new requests();
        $data = $this->validate($request ,[
            'user'=>'required',
        ]
        );
        $user = User::where('id',$data['user'])->first();

        $reqquest->long = 5;
        $reqquest->lat= 5;
        // dd($user->type);
        $reqquest->state_id= 1;
        $reqquest->is_coins_for_user= 1;

        
        $user->reqquest_user()->save($reqquest);


        $workertype = UserTypes::where('type','worker')->first();
        $worker = User::where('type_id', $workertype->id)->orderByRaw('RAND()')->first();

        $worker->reqquest_worker()->save($reqquest);

        $reqquest->saverequest($data);
        return redirect('/request')->with('success', 'New state has been created! Wait sometime to get resolved');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function userstore(Request $request)
    {
        $reqquest = new requests();

        $data = $this->validate($request ,[
            'address'=>'required|in:old,new',
        ]
        );

        $user = Auth::user(); 
        if($data['address'] == 'new'){
            $reqquest->address = $data['address'];
        }else{
            $reqquest->address = Auth::user()->address;
        }

        $reqquest->long = 5;
        $reqquest->lat= 5;
        $reqquest->state_id= 1;

        $reqquest->is_coins_for_user= 1;
        
        $user->reqquest_user()->save($reqquest);

        $workertype = UserTypes::where('type','worker')->first();
        $worker = User::where('type_id', $workertype->id)->orderByRaw('RAND()')->first();

        $worker->reqquest_worker()->save($reqquest);

        $reqquest->saverequest($data);

        if( $request['mobile'] == 1){
            return response()->json(['success'=>'created successfully'], 200); 
        }
        else{
            return redirect('/my-requests')->with('success', 'New request has been created! Wait sometime to get resolved');
        }    

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function show(requests $requests,$id)
    {
        $request = requests::find($id);
        return view('requests.show', compact('request'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function edit(requests $requests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, requests $requests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function destroy(requests $requests)
    {
        
    }

    public function cancelrequest(requests $requests,$id){

        $reqquest = requests::find($id);
        $reqquest->state_id=2;
        $reqquest->save();
        return redirect('/workerrequests')->with('success', 'request has been canceled! Wait sometime to get resolved');
    }

    public function acceptrequest(requests $requests,$id){
        
        $reqquest = requests::find($id);
        $reqquest->state_id=5;
        $reqquest->save();
        return redirect('/workerrequests')->with('success', 'request has been accpted! Wait sometime to get resolved');
    }

    public function savecoins(Request $request){
        
        $reqquest = requests::find($request->id);
        $reqquest->coins=$request['coins'];
        $reqquest->save();
        return redirect('/workerrate')->with('success', 'request has been finished! Wait sometime to get resolved');
    }
}
