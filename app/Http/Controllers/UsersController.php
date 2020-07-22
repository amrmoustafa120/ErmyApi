<?php

namespace App\Http\Controllers;

use App\User;
use App\UserTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexuser()
    {
        $type = UserTypes::where('type','user')->first();
        $users = User::where('type_id', $type->id)->get();

        return view('users.indexoperation', compact('users'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexworker()
    {
        $type = UserTypes::where('type','worker')->first();
        $users = User::where('type_id', $type->id)->get();
        
        return view('users.indexoperation', compact('users'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexoperation()
    {
        $type = UserTypes::where('type','admin')->first();
        $users = User::where('type_id', $type->id)->get();
        
        // dd($users);
        
        return view('users.indexoperation', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = UserTypes::all();
        return view('users.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $data = $this->validate($request ,[
            'name'=>'required',
            'email'=>'required',
            'password'=>'sometimes',
            'phone'=>'required',
            'address'=>'required',
            'type_id'=>'required',
        ]
        );

        $user->saveuser($data);
        $type = UserTypes::find($data['type_id']);

        $user->type()->save($type);
        return redirect('/workers')->with('success', 'New user has been created! Wait sometime to get resolved');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $types = UserTypes::all();
        return view('users.edit', compact('user','id','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $data = $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'type_id'=>'required',
        ]);
        $data['id'] = $id;
        $type->updateuser($data);

        return redirect('/workers')->with('success', 'user has been updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/workers')->with('success', 'user has been deleted!!');
    }

    /////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////

    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function registerapi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            // 'c_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => 'Validation Error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 404);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('MyApp')->accessToken;
        $success['name'] = $user->name;

        $response = [
            'success' => true,
            'data' => $success,
            'message' => 'User register successfully.'
        ];

        return response()->json($response, 200);
    }


    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            return response()->json(['success' => $success]); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 

    }

}
