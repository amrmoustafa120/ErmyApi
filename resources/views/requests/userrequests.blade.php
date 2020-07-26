@extends('layouts.dashboard')

@section('content')

				<div class="app-content">
					<section class="section">
                    	<ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Ermy</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Requests</li>
                        </ol>

						<a href="/create/request" class="btn btn-action btn-primary">Add New</a>
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
											<h4>Requests</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-striped table-bordered mb-0 text-nowrap">
													<tr>
														<th>#</th>
														<th>user id</th>
														<th>worker id</th>
														<th>coins</th>
														<th>state</th>
														<th>created</th>
														<th>action</th>
													</tr>

                                                    @foreach($requests as $request)
													<tr>
														<td>
															<div class="custom-checkbox custom-control">
																{{$request->id}}
															</div>
														</td> 
														<td>{{$request->user->id}}</a></td>
														<td>{{$request->worker->id}}</a></td>
														<td>{{$request->coins}}</a></td>
														<td>{{$request->states->state}}</a></td>
														<td>{{$request->created_at}}</td>
														<td>
                                                        <a href="/edit/requests-state/{{$state->id}}" class="btn btn-action btn-primary">edit</a>
                                                        
														 <form action="{{action('RequestStatesController@destroy', $state->id)}}" method="post">
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