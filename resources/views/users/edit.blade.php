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
            
            <form method="post" action="{{action('UserTypesController@update', $user->id)}}"">
                <div class="form-group">
                    <input type="hidden" value="{{csrf_token()}}" name="_token" />
                    <label for="title">name :</label>
                    <input type="text" class="form-control" name="name"  value={{$user->name}} />
                </div>

                <div class="form-group">
                    <label for="title">E-mail:</label>
                    <input type="email" class="form-control" name="email"  value={{$user->email}} />
                </div>

                <div class="form-group">
                    <label for="title">Phone:</label>
                    <input type="text" class="form-control" name="phone"  value={{$user->phone}} />
                </div>

                <div class="form-group">
                    <label for="title">Address :</label>
                    <input type="text" class="form-control" name="address" value={{$user->address}} />
                </div>


                  <div class="form-group row mb-0">
                    <label class="col-md-3 col-form-label">User Type</label>
                    <div class="col-md-9">
                        <select class="form-control" name="type_id">

                            @foreach ($types as $type)
                                <option value={{$type->id}}>{{$type->type}}</option>
                            @endforeach

                        </select>
                    </div>
                

                <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>

        </section>
				</div>	


@endsection