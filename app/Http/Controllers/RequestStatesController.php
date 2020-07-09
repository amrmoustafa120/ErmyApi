<?php

namespace App\Http\Controllers;

use App\requestStates;
use Illuminate\Http\Request;

class RequestStatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = requestStates::all();
        return view('requeststates.index', compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('requeststates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $state = new requestStates();
        $data = $this->validate($request ,[
            'state'=>'required',
        ]
        );
        $state->savestate($data);
        return redirect('/requests-state')->with('success', 'New state has been created! Wait sometime to get resolved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\requestStates  $requestStates
     * @return \Illuminate\Http\Response
     */
    public function show(requestStates $requestStates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\requestStates  $requestStates
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $state = requestStates::find($id);
        return view('requeststates.edit', compact('state','id')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\requestStates  $requestStates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $state = requestStates::find($id);
        $data = $this->validate($request, [
            'state'=>'required',
            
        ]);
        $data['id'] = $id;
        $state->updatestate($data);

        return redirect('/requests-state')->with('success', 'state has been updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\requestStates  $requestStates
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $state = requestStates::find($id);
        $state->delete();

        return redirect('/requests-state')->with('success', 'state has been deleted!!');
    
    }
}
