@extends('layouts.dashboard')

@section('content')

<div class="app-content">
        <section class="section">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-muted">Home</a></li>
                <li class="breadcrumb-item active text-" aria-current="page">Dashboard 01</li>
            </ol>
<div class="section-body">
<div class="row">
    <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
        <div class="card">
            <div class="card-body text-center">
                <h5>Today Visitors</h5>
                
                <div class="text-center">
                    <div class="mb-3 mt-1">
                        <span class="sparkline_line" ></span>
                    </div>
                    <h3 class="mb-2 text-dark">$837</h3>
                    <span class="text-green"><i class="fa fa-arrow-up text-success"> </i>23% increase</span></i><small> last week</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
        <div class="card">
            <div class="card-body text-center">
                <h5>Today Sales</h5>
                
                <div class="text-center">
                    <div class="mb-3 mt-1">
                        <span class="sparkline_pie" ></span>
                    </div>
                    <h3 class="mb-2 text-dark">$763</h3>
                    <span class="text-green"><i class="fa fa-arrow-down text-danger"> </i>10% increase</span></i><small> last week</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
        <div class="card">
            <div class="card-body text-center">
                <h5>Today Earnings</h5>
                
                <div class="text-center">
                    <div class="mb-3 mt-1">
                        <span class="sparkline_bar" ></span>
                    </div>
                    <h3 class="mb-2 text-dark">$587</h3>
                    <span class="text-green"><i class="fa fa-arrow-up text-success"> </i>23% increase</span></i><small> last week</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
        <div class="card">
            <div class="card-body text-center">
                <h5>Total Expense</h5>
                
                <div class="text-center">
                    <div class="mb-3 mt-1">
                        <span class="sparkline_area" ></span>
                    </div>
                    <h3 class="mb-2 text-dark">$359</h3>
                    <span class=""><i class="fa fa-arrow-down text-danger"> </i>3% decrease</span></i><small> last week</small>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row ">
    <div class="col-lg-12 col-xl-6 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Monthly Sales</h4>
            </div>
            <div class="card-body text-center">
                <div id="bar-chart" class="overflow-hidden" > </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-xl-6 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Yearly Template Sales</h4>
            </div>
            <div class="card-body text-center">
                <div id="sales-chart" class="overflow-hidden"> </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-xl-8 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Project Status</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive projectstatus">
                    <table class="table border ">
                        <thead>
                            <tr>
                                <th class="p-t-10">Assigned</th>
                                <th class="p-t-10">Project</th>
                                <th class="p-t-10">Priority</th>
                                <th class="p-t-10">Budget</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-bottom">
                                <td class="">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/avatar/avatar-1.jpg" class="rounded-circle w-32 mr-2" alt="friend">
                                        <div class="m-l-15">
                                            <p class="m-b-5">Sophia Brown</p>
                                            <p class="mb-0 text-muted text-small">Product Designer</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="mt-2">Web App</td>
                                <td><label class="badge badge-success">Low</label></td>
                                <td> <span class="badge badge-primary badge-pill"> 27k <i class="mdi mdi-chart-line"></i>  </span></td>
                            </tr>
                            <tr class="border-bottom">
                                <td class="p-b-10">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/avatar/avatar-2.jpg" class="rounded-circle w-32 mr-2" alt="friend">
                                        <div class="m-l-15">
                                            <p class="m-b-5">Rachel Newton</p>
                                            <p class="mb-0 text-muted text-small">Mobile Developer</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Mobile App</td>
                                <td><label class="badge badge-warning">Medium</label></td>
                                <td> <span class="badge badge-info badge-pill"> 27k <i class="mdi mdi-chart-line"></i>  </span></td>
                            </tr>
                            <tr  class="border-bottom">
                                <td class="p-b-10">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/avatar/avatar-3.jpg" class="rounded-circle w-32 mr-2" alt="friend">
                                        <div class="m-l-15">
                                            <p class="m-b-5">Marcus Stevens</p>
                                            <p class="mb-0 text-muted text-small">Core Developer</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Plugin</td>
                                <td><label class="badge badge-danger">High</label></td>
                                <td> <span class="badge badge-warning badge-pill"> 27k <i class="mdi mdi-chart-line"></i>  </span></td>
                            </tr>
                            <tr  class="border-bottom">
                                <td class="p-b-10">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/avatar/avatar-4.jpg" class="rounded-circle w-32 mr-2" alt="friend">
                                        <div class="m-l-15">
                                            <p class="m-b-5">Theresa Becker</p>
                                            <p class="mb-0 text-muted text-small">Product Designer</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Web App</td>
                                <td><label class="badge badge-success">Low</label></td>
                                <td> <span class="badge badge-dark badge-pill"> 27k <i class="mdi mdi-chart-line"></i>  </span></td>
                            </tr>
                            <tr >
                                <td class="p-b-10">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/avatar/avatar-1.jpg" class="rounded-circle w-32 mr-2 " alt="friend">
                                        <div class="m-l-15">
                                            <p class="m-b-5">Jessie Ortiz</p>
                                            <p class="mb-0 text-muted text-small">Web Developer</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Android App</td>
                                <td><label class="badge badge-danger">High</label></td>
                                <td> <span class="badge badge-success badge-pill"> 27k <i class="mdi mdi-chart-line"></i>  </span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
           </div>
        </div>
    </div>
    <div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
        <div class="card m-b-20 overflow-hidden">
            <h5 class="card-header">Orders</h5>
            <div class="card-body overflow-hidden">
                <h5 class="card-subtitle">Today Orders</h5>
                <h2 class="font-medium text-primary m-t-20 m-b-20">26785</h2>
                <span class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </span>
                <div class=" text-center mt-3 mb-4 card-body p-1">
                    <span class="sparkline17 overflow-hidden">
                    </span>
                </div>
                <div class="row mt-4">
                    <div class="col-6 text-center">
                        <label class="tx-12 font-weight-bold">This Week</label><div class="clear-fix"></div>
                         <span class="sparkline_bar4 overflow-hidden"></span>
                        <h4 class="font-weight-semibold text-primary mt-2">20,321</h4>
                    </div><!-- col -->
                    <div class="col-6 border-left text-center">
                        <label class="tx-12 font-weight-bold">Last Week</label><div class="clear-fix"></div>
                          <span class="sparkline_bar2 overflow-hidden"></span>
                        <h4 class="font-weight-semibold text-primary mt-2">15,321</h4>
                    </div><!-- col -->
                </div><!-- row -->
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Account Retention</h4>
            </div>
            <div class="card-body text-center">
                <div  id="Area-chart"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-xl-8 col-md-12 col-12 col-sm-12">
        <div class="card">
        <div class="pt-0 pb-0 pl-3 pr-3 card-body">
            <div class="row">
                <div class="col-xs-12 col-lg-5 cover-image weather-radius text-center position-relative transparent" data-image-src="assets/img/weather.jpg">
                    <div class="weather-shade">
                        <i class="wi wi-day-sleet text-white"></i>
                    </div>
                    <div class="card-body mt-5 pt-5">
                        <i class="vl_weather-day-rain text-light  mt-5 pt-5 d-block"></i>
                    </div>
                    <div class="bg-transparent border-0 text-light  pt-4">
                        <h3 class="weight300">Sunny Day</h3>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-7 widgetb p-0">
                    <div class="card-body p-4">
                        <h4 class="mb-0">MONDAY <br/>
                            <span class="text-muted h5"> 22  October</span>
                        </h4>
                        <div class="fs-45 text-primary pt-4 ">
                            32<sup>o</sup>
                            <span class="h3 ">Sunny</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white text-center ">
                        <div class="row">
                            <div class="col-sm-2 col-4 mt-2 pb-2">
                                <h6 class="text-muted mb-3">TUE</h6>
                                <i class="fe fe-cloud-rain"></i>
                                <p class="mb-0 text-muted">18<sup>o</sup>c</p>
                            </div>
                            <div class="col-sm-2 col-4 mt-2 pb-2">
                                <h6 class="text-muted mb-3">WED</h6>
                                <i class="fe fe-cloud"></i>
                                <p class="mb-0 text-muted">22<sup>o</sup>c</p>
                            </div>
                            <div class="col-sm-2 col-4 mt-2 pb-2">
                                <h6 class="text-muted mb-3">THU</h6>
                                <i class="fe fe-cloud-snow"></i>
                                <p class="mb-0 text-muted">15<sup>o</sup>c</p>
                            </div>
                            <div class="col-sm-2 col-4 mt-2 pb-2">
                                <h6 class="text-muted mb-3">FRI</h6>
                                <i class="fe fe-cloud-rain"></i>
                                <p class="mb-0 text-muted">19<sup>o</sup>c</p>
                            </div>
                            <div class="col-sm-2 col-4 mt-2 pb-2">
                                <h6 class="text-muted mb-3">SAT</h6>
                                <i class="fe fe-cloud"></i>
                                <p class="mb-0 text-muted">29<sup>o</sup>c</p>
                            </div>
                            <div class="col-sm-2 col-4 mt-2 pb-2">
                                <h6 class="text-muted mb-3">SUN</h6>
                                <i class="fe fe-cloud-snow"></i>
                                <p class="mb-0 text-muted">17<sup>o</sup>c</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
        <div class="card bg-primary">
            <div class="card-body text-center">
                <div class="content-box b-right">
                    <h5 class="mb-4">Visitors this Year</h5>
                    <span class="sparkline16 mt-2"><canvas width="120" height="120" style="display: inline-block; width: 120px; height: 120px; vertical-align: top;"></canvas></span>
                    <h4 class="mt-3">8,97,654</h4>
                    <a href="#" class="btn btn-success btn-round btn-sm m-t-20">view more 70%</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>
@endsection