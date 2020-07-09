<!DOCTYPE html>
<html lang="en">
	
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>{{config('app.name', 'IMOS')}}</title>

		<!--Favicon -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="{{asset('frontend/plugins/bootstrap/css/bootstrap.min.css')}}">

		<!--Icons css-->
		<link rel="stylesheet" href="{{asset('frontend/css/icons.css')}}">
		<!--Style css-->
		<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="{{asset('frontend/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="{{asset('frontend/plugins/toggle-menu/sidemenu.css')}}">

		<!--Chartist css-->
		<link rel="stylesheet" href="{{asset('frontend/plugins/chartist/chartist.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/plugins/chartist/chartist-plugin-tooltip.css')}}">

		<!--Full calendar css-->
		<link rel="stylesheet" href="{{asset('frontend/plugins/fullcalendar/stylesheet1.css')}}">
		
		<!--morris css-->
		<link rel="stylesheet" href="{{asset('frontend/plugins/morris/morris.css')}}">


	</head>

	<body class="app ">


			<!--Jquery.min js-->
		<script src="{{asset('frontend/js/jquery.min.js')}}"></script>

		<!--popper js-->
		<script src="{{asset('frontend/js/popper.js')}}"></script>
		<!--Tooltip js-->
		<script src="{{asset('frontend/js/tooltip.js')}}"></script>
		<!--Bootstrap.min js-->
		<script src="{{asset('frontend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
		<!--Jquery.nicescroll.min js-->
		<script src="{{asset('frontend/plugins/nicescroll/jquery.nicescroll.min.js')}}"></script>
		<!--Scroll-up-bar.min js-->
		<script src="{{asset('frontend/plugins/scroll-up-bar/dist/scroll-up-bar.min.js')}}"></script>
		<!--Sidemenu js-->
		<script src="{{asset('frontend/plugins/toggle-menu/sidemenu.js')}}"></script>
		<!--mCustomScrollbar js-->
		<script src="{{asset('frontend/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
		
		<!-- jQuery Sparklines -->
		<script src="{{asset('frontend/plugins/jquery-sparkline/dist/jquery.sparkline.js')}}"></script>
		<!-- ECharts -->
		<script src="{{asset('frontend/plugins/echarts/dist/echarts.js')}}"></script>
		
        <!--Jquery.knob js-->
		<script src="{{asset('frontend/plugins/othercharts/jquery.knob.js')}}"></script>
        <script src="{{asset('frontend/plugins/othercharts/jquery.sparkline.min.js')}}"></script>
		<!--Morris js-->
		<script src="{{asset('frontend/plugins/morris/morris.min.js')}}"></script>
		<script src="{{asset('frontend/plugins/morris/raphael.min.js')}}"></script>	
		<!--Scripts js-->
		<script src="{{asset('frontend/js/scripts.js')}}"></script>
		<!--Dashboard js-->
		<script src="{{asset('frontend/js/dashboard.js')}}"></script>
		<script src="{{asset('frontend/js/sparkline.js')}}"></script>
		<script src="{{asset('frontend/js/apexcharts.js')}}"></script>





		<div id="spinner"></div>

		<div id="app">
			<div class="main-wrapper" >
				<nav class="navbar navbar-expand-lg main-navbar">
					<a class="header-brand" href="{{url('/index')}}">
						<img src="{{asset('frontend/img/brand/logo.png')}}" class="header-brand-img" alt="Kharna-Admin  logo">
					</a>
					<form class="form-inline mr-auto">
						<ul class="navbar-nav mr-3">
							<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
							<li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"><i class="ion ion-search"></i></a></li>
						</ul>
						<div class="search-element">
							<input class="form-control" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-primary" type="submit"><i class="ion ion-search"></i></button>
						</div>
					</form>
					<ul class="navbar-nav navbar-right">
						
						<li class="dropdown dropdown-list-toggle">
							<a href="#" class="nav-link nav-link-lg full-screen-link">
								<i class="ion-arrow-expand"  id="fullscreen-button"></i>
							</a>
						</li>
						<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
							<img src="{{asset('frontend/img/avatar/avatar-1.jpg')}}" alt="profile-user" class="rounded-circle w-32">
							{{-- <div class="d-sm-none d-lg-inline-block">{{auth()->user()->name}}</div></a> --}}
							<div class="dropdown-menu dropdown-menu-right">
								<a href="profile.html" class="dropdown-item has-icon">
									<i class="ion ion-android-person"></i> Profile
								</a>


								<a class="dropdown-item has-icon" href=""  method="post">
										<i class="ion-ios-redo"></i>
										logout
                                    </a>
									{{-- <form method="post" action="{{ route('logout') }}">
									@csrf
									<button type="submit" class="dropdown-item has-icon">
									<i class="ion-ios-redo"></i>
									logout
									</button>
									</form> --}}
							
							</div>
						</li>
					</ul>
				</nav>
				<aside class="app-sidebar">
					<div class="app-sidebar__user">
					    <div class="dropdown">
							<a class="nav-link pl-2 pr-2 leading-none d-flex" data-toggle="dropdown" href="#">
								<img alt="image" src="{{asset('frontend/img/avatar/avatar-1.jpg')}}" class=" avatar-md rounded-circle">
								<span class="ml-2 d-lg-block">
									<span class=" app-sidebar__user-name mt-5">Jessica Lee</span><br>
									<span class="text-muted app-sidebar__user-name text-sm"> Web-Designer</span>
								</span>
							</a>
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
							{{-- <ul class="slide-menu">
								<li><a class="slide-item"  href="{{url('/index')}}"><span>Sales Dashboard</span></a></li>
								<li><a class="slide-item" href="{{url('/index')}}"><span>Finance Dashboard</span></a></li>
								<li><a class="slide-item" href="{{url('/index')}}"><span>Marketing Dashboard</span></a></li>
								<li><a class="slide-item" href="{{url('/index')}}"><span>Social Dashboard</span></a></li>
								<li><a class="slide-item" href="{{url('/index')}}"><span>HR Dashboard</span></a></li>
							</ul> --}}
						</li>
						
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-home"></i><span class="side-menu__label">Users</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{url('/cspaces')}}" class="slide-item">Users</a></li>
								<li><a href="{{url('/create/cspace')}}" class="slide-item">Wokers</a></li>
								<li><a href="{{url('/create/cspace')}}" class="slide-item">Operations</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-tasks"></i><span class="side-menu__label">Users Types</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{url('/market')}}" class="slide-item">External Types</a></li>
								<li><a href="{{url('/create/market')}}" class="slide-item">Inernal Types</a></li>
							</ul>
						</li>
						<li class="slide">
						    <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-paw"></i><span class="side-menu__label">Requests</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{url('/branches')}}" class="slide-item">All Requests</a></li>
								<li><a href="{{url('/create/branch')}}" class="slide-item">Pending Requests</a></li>
								<li><a href="{{url('/create/branch')}}" class="slide-item">Roday Finished Requests</a></li>	
							</ul>
						</li>
						<li class="slide">
						    <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-paw"></i><span class="side-menu__label">Requests States</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{url('/branches')}}" class="slide-item">All States</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Contracts</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{url('/create/room')}}" class="slide-item">New contract</a></li>
								<li><a href="{{url('/create/room')}}" class="slide-item">All conracts</a></li>
							</ul>   
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-file-text"></i><span class="side-menu__label">Complaiens</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{url('/create/shared')}}" class="slide-item">New complain</a></li>
								<li><a href="{{url('/#')}}" class="slide-item">past complain</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-bar-chart"></i><span class="side-menu__label">Reports</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{url('/chartjs')}}" class="slide-item">Chart Js</a></li>
								<li><a href="{{url('/flotcharts')}}" class="slide-item"> Flot Charts</a></li>
								<li><a href="{{url('/barcharts')}}" class="slide-item"> Bar Charts</a></li>
								<li><a href="{{url('/echart')}}" class="slide-item"> ECharts</a></li>
								<li><a href="{{url('/chartist')}}" class="slide-item"> Chartist</a></li>
								<li><a href="{{url('/morris')}}" class="slide-item"> Morris Charts</a></li>
								<li><a href="{{url('/othercharts')}}" class="slide-item"> Other Charts</a></li>
							</ul>
						</li>
						
					</ul>
				</aside>
                @yield('content')
                <footer class="main-footer">
					<div class="text-center">
						Copyright &copy;Cspaces 2020. Design By<a href="#" target="_blank">Radiance</a>
					</div>
				</footer>
			</div>
		</div>



	</body>
</html>