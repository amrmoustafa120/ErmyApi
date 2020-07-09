@extends('layouts.dashboard')

@section('content')


<div class="app-content">
					<section class="section">

<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif
    
    <form method="post" action="{{action('RequestStatesController@update', $state->id)}}" >
        {{csrf_field()}}
        {{-- <input name="_method" type="hidden" value="PATCH"> --}}
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">state :</label>
            <input type="text" class="form-control" name="state" value={{$state->state}} />
        </div>
        <div class="form-group row mb-0">
                   
        <button type="submit" class="btn btn-primary">save</button>
        </form>
   
</div>
   </section>
				</div>	


@endsection