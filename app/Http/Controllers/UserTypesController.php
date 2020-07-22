<?php

namespace App\Http\Controllers;

use App\UserTypes;
use Illuminate\Http\Request;

class UserTypesController extends Controller
{

    //  /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = UserTypes::all();
        // return view('usertypes.index', compact('types'));
        // dd(json_decode($types, true));
        return $types ;
        // return view('usertypes.index')->with('types', json_decode($types, true));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usertypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = new UserTypes();
        $data = $this->validate($request ,[
            'type'=>'required',
            'is_internal'=>'required',
        ]
        );
        $type->savetype($data);
        return redirect('/usertype')->with('success', 'New type has been created! Wait sometime to get resolved');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserTypes  $userTypes
     * @return \Illuminate\Http\Response
     */
    public function show(UserTypes $userTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserTypes  $userTypes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = UserTypes::find($id);
        return view('usertypes.edit', compact('type','id'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserTypes  $userTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $type = UserTypes::find($id);
        $data = $this->validate($request, [
            'type'=>'required',
            'is_internal'=>'required',
        ]);
        $data['id'] = $id;
        $type->updatetype($data);

        return redirect('/usertype')->with('success', 'type has been updated!!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserTypes  $userTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = UserTypes::find($id);
        $type->delete();

        return redirect('/usertype')->with('success', 'type has been deleted!!');
    
    }
}
