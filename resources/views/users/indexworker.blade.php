@extends('layouts.dashboard')

@section('content')

				<div class="app-content">
					<section class="section">
                    	<ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Ermy</a></li>
                            <li class="breadcrumb-item active" aria-current="page">users</li>
                        </ol>

						<a href="/create/user" class="btn btn-action btn-primary">Add New</a>
						<br>
						<br>
						
						<div class="section-body">

							<div class="row">
								<div class="col-12">
									<div class="card">
										<div class="card-header">
											<div class="float-right">
												<form>
													<div class="input-group">
														<input type="text" class="form-control" placeholder="Search">
														<div class="input-group-btn">
															<button class="btn btn-primary"><i class="ion ion-search"></i></button>
														</div>
													</div>
												</form>
											</div>
											<h4>users</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-striped table-bordered mb-0 text-nowrap">
													<tr>
														<th>#</th>
														<th>User</th>
														<th>mail</th>
														<th>phone</th>
														<th>address</th>
														<th>type</th>
														<th>created</th>
														<th>action</th>
													</tr>

                                                    @foreach($users as $user)
													<tr>
														<td>
															<div class="custom-checkbox custom-control">
																{{$user->id}}
															</div>
														</td> 
														<td>{{$user->name}}</a></td>
														<td>{{$user->email}}</a></td>
														<td>{{$user->phone}}</a></td>
														<td>{{$user->address}}</a></td>
														<td>{{$user->type_id}}</a></td>
														<td>{{$user->created_at}}</td>
														
														<td>
                                                        <a href="/edit/user/{{$user->id}}" class="btn btn-action btn-primary">edit</a>
                                                        
														 <form action="{{action('UsersController@destroy', $user->id)}}" method="post">
														{{csrf_field()}}
														<input name="_method" type="hidden" value="DELETE">
														<button class="btn btn-action btn-danger" type="submit">Delete</button>
														</form>
														</td>
													</tr>

                                                    @endforeach
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</section>
				</div>
			</div>
		</div>

@endsection