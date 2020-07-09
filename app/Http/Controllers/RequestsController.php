<?php

namespace App\Http\Controllers;

use App\requests;
use App\User;
use App\UserTypes;
use Illuminate\Http\Request;

class RequestsController extends Controller
{
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
        $reqquest->is_coins_for_user= 1;

        
        $user->reqquest_user()->save($reqquest);


        $workertype = UserTypes::where('type','worker')->first();
        $worker = User::where('type_id', $workertype->id)->orderByRaw('RAND()')->first();

        $worker->reqquest_worker()->save($reqquest);

        $reqquest->saverequest($data);
        return redirect('/request')->with('success', 'New state has been created! Wait sometime to get resolved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function show(requests $requests)
    {
        //
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
        //
    }
}
