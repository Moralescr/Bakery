@extends('layouts.app')
@section('content')
<!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card bg-analytics text-white">
                <div class="card-content">
                    <div class="card-body text-center">
                        <img src="app-assets/images/elements/decore-left.png" class="img-left" alt="card-img-left">
                        <img src="app-assets/images/elements/decore-right.png" class="img-right" alt="card-img-right">
                        <div class="avatar avatar-xl bg-primary shadow mt-0">
                            <div class="avatar-content">
                                <i class="feather icon-award white font-large-1"></i>
                            </div>
                        </div>
                        <div class="text-center">
                            <h1 class="mb-2 text-white">Bienvenida {{ Auth::user()->name }}</h1>
                            <p class="m-auto w-75"><b>Este es el panel de administración.</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-primary p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-users text-primary font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1 mb-25">92.6k</h2>
                    <p class="mb-0 danger">En proceso</p>
                </div>
                <div class="card-content"> 
                    <div id="subscribe-gain-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-warning p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-package text-warning font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1 mb-25">97.5K</h2>
                    <p class="mb-0 danger">En proceso</p>
                </div>
                <div class="card-content">
                    <div id="orders-received-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row pb-50">
                            <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                                <div>
                                    <h2 class="text-bold-700 mb-25">2.7K</h2>
                                    <p class="text-bold-500 danger mb-75">En proceso</p>
                                    <h5 class="font-medium-2">
                                        <span class="text-success">+5.2% </span>
                                        <span>vs last 7 days</span>
                                    </h5>
                                </div>
                                <a href="#" class="btn btn-danger shadow">En proceso <i class="feather icon-chevrons-right"></i></a>
                            </div>
                            <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">
                                <div class="dropdown chart-dropdown">
                                    <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button" id="dropdownItem5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Last 7 Days
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem5">
                                        <a class="dropdown-item" href="#">Last 28 Days</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                        <a class="dropdown-item" href="#">Last Year</a>
                                    </div>
                                </div>
                                <div id="avg-session-chart"></div>
                            </div>
                        </div>
                        <hr />
                        <div class="row avg-sessions pt-50">
                            <div class="col-6">
                                <p class="mb-0">Goal: $100000</p>
                                <div class="progress progress-bar-primary mt-25">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100" style="width:50%"></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Users: 100K</p>
                                <div class="progress progress-bar-warning mt-25">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100" style="width:60%"></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Retention: 90%</p>
                                <div class="progress progress-bar-danger mt-25">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="70" aria-valuemax="100" style="width:70%"></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <p class="mb-0">Duration: 1yr</p>
                                <div class="progress progress-bar-success mt-25">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="90" aria-valuemax="100" style="width:90%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between pb-0">
                    <h4 class="card-title danger">En proceso</h4>
                    <div class="dropdown chart-dropdown">
                        <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button" id="dropdownItem4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Last 7 Days
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem4">
                            <a class="dropdown-item" href="#">Last 28 Days</a>
                            <a class="dropdown-item" href="#">Last Month</a>
                            <a class="dropdown-item" href="#">Last Year</a>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
                                <h1 class="font-large-2 text-bold-700 mt-2 mb-0">163</h1>
                                <small>Tickets</small>
                            </div>
                            <div class="col-sm-10 col-12 d-flex justify-content-center">
                                <div id="support-tracker-chart"></div>
                            </div>
                        </div>
                        <div class="chart-info d-flex justify-content-between">
                            <div class="text-center">
                                <p class="mb-50">New Tickets</p>
                                <span class="font-large-1">29</span>
                            </div>
                            <div class="text-center">
                                <p class="mb-50">Open Tickets</p>
                                <span class="font-large-1">63</span>
                            </div>
                            <div class="text-center">
                                <p class="mb-50">Response Time</p>
                                <span class="font-large-1">1d</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Dashboard Analytics end -->
@endsection