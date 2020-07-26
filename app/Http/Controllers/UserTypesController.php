<?php

namespace App\Http\Controllers;

use App\UserTypes;
use Illuminate\Http\Request;

class UserTypesController extends Controller
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
    public function index(Request $request)
    {

        $types = UserTypes::all();

        if( $request['mobile'] == 1){
            return json_decode($types, true);
        }
        else{
            return view('usertypes.index')->with('types', json_decode($types, true));
        }
        
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


        if( $request['mobile'] == 1){
            return response()->json(['success'=>'saved successfully'], 200); 
        }
        else{
            return redirect('/usertype')->with('success', 'New type has been created! Wait sometime to get resolved');
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserTypes  $userTypes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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

        if( $request['mobile'] == 1){
            return response()->json(['success'=>'updated successfully'], 200); 
        }
        else{
            return redirect('/usertype')->with('success', 'type has been updated!!');
        }    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserTypes  $userTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $type = UserTypes::find($id);
        $type->delete();

        if( $request['mobile'] == 1){
            return response()->json(['success'=>'deleted successfully'], 200); 
        }
        else{
            return redirect('/usertype')->with('success', 'type has been deleted!!');
        }    
    
    }
}
