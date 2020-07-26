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
            {{$request}}
            <br>
            <br>
            <br>
            <form method="post" action="{{url('/savecoins')}}">
                <div class="form-group">
                    <input type="hidden" value="{{csrf_token()}}" name="_token" />
                    <input type="hidden" value="{{$request->id}}" name="id" />
                    <label for="title">coins</label>
                    <input type="number" class="form-control" name="coins"/>
                </div>
{{-- 
                <div class="form-group">
                    <label for="title">E-mail:</label>
                    <input type="email" class="form-control" name="email"/>
                </div>

                <div class="form-group">
                    <label for="title">Phone:</label>
                    <input type="text" class="form-control" name="phone"/>
                </div>

                <div class="form-group">
                    <label for="title">Address :</label>
                    <input type="text" class="form-control" name="address"/>
                </div>

                <div class="form-group">
                    <label for="title">Password :</label>
                    <input type="password" class="form-control" name="password"/>
                </div> --}}
                

                <button type="submit" class="btn btn-success">Finish Request</button>
                </form>
            </div>
        </div>

        </section>
				</div>	


@endsection