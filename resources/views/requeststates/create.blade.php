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
            
            <form method="post" action="{{url('/create/requests-state')}}">
                <div class="form-group">
                    <input type="hidden" value="{{csrf_token()}}" name="_token" />
                    <label for="title">State :</label>
                    <input type="text" class="form-control" name="state"/>
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>

        </section>
				</div>	


@endsection