@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                         <!-- PAGE-HEADER -->
                         <div class="page-header">
                            <h1 class="page-title">Orders Summary</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Orders Summary</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                         <!-- ROW OPEN -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

                            <div class="card">
                                <div class="card-header ">
                                 <form class="px-5 row">
                    
                                 <div class="from-group col-xl-4 col-md-4 mb-2">
                                    <label>Date from </label>
                                    <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                                </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
                                    </div>
                                 </div>

                                 <div class="from-group col-xl-4 col-md-4 mb-2">
                                 <label>Date To </label>
                                    <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                                </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
                                    </div></div>

                                 <div class="from-group col-xl-4 col-md-4 pt-6">
                                    
                                   <button type="submit" class="btn btn-primary">Apply FIlter</button>
                                 </div>

                                 </form>
                                </div>
                                </div>
                            </div>
                        </div>



                        <!-- ROW OPEN -->
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-order">
                                            <!-- <h6 class="mb-2">Orders</h6> -->
                                            <h2 class="text-end"><i class="fa fa-bar-chart icon-size float-start text-danger text-danger-shadow border-danger brround p-3"></i><span>7,543</span></h2>
                                            <p class="mb-0 pt-5">Failed Executions<span class="float-end">60%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widget">
                                            <!-- <h6 class="mb-2">Total Tax</h6> -->
                                            <h2 class="text-end"><i class="mdi mdi-pause icon-size float-start text-warning text-warning-shadow border-solid border-warning brround p-3"></i><span>5,578</span></h2>
                                            <p class="mb-0 pt-5">Scheduled Executions<span class="float-end">15%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widget">
                                            <!-- <h6 class="mb-2">Total Sales</h6> -->
                                            <h2 class="text-end"><i class="mdi mdi-shield-outline icon-size float-start text-success text-success-shadow border-solid border-success brround p-3"></i><span>9743</span></h2>
                                            <p class="mb-0 pt-5">Successful Executions<span class="float-end">50%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW END -->

                    

                        <!-- ROW OPEN -->
                        <div class="row">
                           
                            <div class="col-xl-8 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Institution Wise</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="media mb-5 mt-0">
                                            <div class="d-flex me-3">
                                                <a href="javascript:void(0)"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/18.jpg')}}"> </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="javascript:void(0)" class="text-dark">Centenary Bank</a>
                                                <div class="text-danger small">Failures</div>
                                            </div>
                                            <button type="button" class="btn btn-primary btn-sm d-block">100</button>
                                        </div>
                                        <div class="media mb-5">
                                            <div class="d-flex me-3">
                                                <a href="javascript:void(0)"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/4.jpg')}}"> </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="javascript:void(0)" class="text-dark">Centenary Bank</a>
                                                <div class="text-success small">Completed</div>
                                            </div>
                                            <button type="button" class="btn btn-blue btn-sm d-block">78</button>
                                        </div>
                                        <div class="media mb-5">
                                            <div class="d-flex me-3">
                                                <a href="javascript:void(0)"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/20.jpg')}}"> </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="javascript:void(0)" class="text-dark">Stanbic</a>
                                                <div class="text-danger small">Failure</div>
                                            </div>
                                            <button type="button" class="btn btn-warning btn-sm d-block">34</button>
                                        </div>
                                        <div class="media mb-5">
                                            <div class="d-flex me-3">
                                                <a href="javascript:void(0)"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/4.jpg')}}"> </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="javascript:void(0)" class="text-dark">Stanbic</a>
                                                <div class="text-success small">120</div>
                                            </div>
                                            <button type="button" class="btn btn-secondary btn-sm d-block">70</button>
                                        </div>
                                       

                                       
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->

                            <div class="col-xl-4 col-sm-12 p-l-0 p-r-0 col-md-12">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <h2 class="card-title">Performance Summary</h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto chart-circle chart-circle-md mt-3 mb-4 text-center" data-value="0.75" data-thickness="8" data-bs-color="green"></div>

                                        <div class="text-center mt-3">
                                            <h3>Current Vs Previous</h3>
                                            <div class="col p-1 mt-2">
                                                <div class="float-start">
                                                    <h3 class="ms-5"><i class="fa fa-caret-up fa-1x text-success me-1"></i>1200</h3>
                                                    <h6 class="ms-5 pb-0 mb-0">This month</h6>
                                                </div>
                                                <div class="float-end">
                                                    <h3 class="me-5"><i class="fa fa-caret-down fa-1x text-primary me-1"></i>230</h3>
                                                    <h6 class="me-5 mt-0 mb-0">Last Month</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW CLOSED -->

        @endsection

    @section('scripts')

    <!-- CHART-CIRCLE JS-->
    <script src="{{asset('assets/plugins/circle-progress/circle-progress.min.js')}}"></script>

    <!-- MORRIS CHART JS-->
    <script src="{{asset('assets/plugins/morris/raphael-min.js')}}"></script>
    <script src="{{asset('assets/plugins/morris/morris.js')}}"></script>

    <!-- C3 CHART JS-->
    <script src="{{asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/charts-c3/c3-chart.js')}}"></script>

    <!-- CHARTJS CHART JS-->
    <script src="{{asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
    <script src="{{asset('assets/plugins/chart/utils.js')}}"></script>

    <!-- PIETY CHART JS-->
    <script src="{{asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
    <script src="{{asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>

    <!-- GALLERY JS -->
    <script src="{{asset('assets/plugins/SmartPhoto-master/smartphoto.js')}}"></script>
    <script src="{{asset('assets/js/gallery.js')}}"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="{{asset('assets/js/widget.js')}}"></script>

    @endsection
