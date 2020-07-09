@extends('layouts.dashboard')

@section('content')

				<div class="app-content">
					<section class="section">
                    	<ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Ermy</a></li>
                            <li class="breadcrumb-item active" aria-current="page">users types</li>
                        </ol>

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
											<h4>users types</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-striped table-bordered mb-0 text-nowrap">
													<tr>
														<th>#</th>
														<th>User Typr</th>
														<th>inernal/external</th>
														<th>created</th>
														<th>action</th>
													</tr>
{{-- 
                                                    @foreach($types as $type)
													<tr>
														<td>
															<div class="custom-checkbox custom-control">
																{{$type->id}}
															</div>
														</td>
														<td><a href="/create/usertype">{{$type->type}}</a></td>
														
														<td>
															{{ $type->is_internal == 1 ? "internal" : "external" }}   
														</td>
														<td>{{$type->created_at}}</td>
														
														<td>
                                                        <a href="/edit/usertype/{{$type->id}}" class="btn btn-action btn-primary">edit</a>
                                                        
														 <form action="{{action('UserTypesController@destroy', $type->id)}}" method="post">
														{{csrf_field()}}
														<input name="_method" type="hidden" value="DELETE">
														<button class="btn btn-action btn-danger" type="submit">Delete</button>
														</form>
														</td>
													</tr>

                                                    @endforeach --}}
													@foreach ( $types as $type )
														<tr>
															<td>
															{{$type['id']}}
															</td>
															<td>
															{{$type['type']}}
															</td>
															<td>
															{{ $type['is_internal'] == 1 ? 'internal' : 'external' }}
															</td>
															<td>
															{{$type['created_at']}}
															</td>
															<td>
																<a href="/edit/usertype/{{$type['id']}}" class="btn btn-action btn-primary">edit</a>
																
																<form action="{{action('UserTypesController@destroy', $type['id'])}}" method="post">
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