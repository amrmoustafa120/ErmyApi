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
    
    <form method="post" action="{{action('UserTypesController@update', $type->id)}}" >
        {{csrf_field()}}
        {{-- <input name="_method" type="hidden" value="PATCH"> --}}
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">type :</label>
            <input type="text" class="form-control" name="type" value={{$type->type}} />
        </div>
        <div class="form-group row mb-0">
                    <label class="col-md-3 col-form-label">USer Type Type</label>
                    <div class="col-md-9">
                        <select class="form-control" name="is_internal">

                            <option value='internal'>internal</option>
                            <option value='external'>external</option>

                        </select>
                    </div>
        <button type="submit" class="btn btn-primary">save</button>
        </form>
   
</div>
   </section>
				</div>	


@endsection