@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Dashboard</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xl-4">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Members</h6>
                                                        <h2 class="mb-0 number-font">400</h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="chart-wrapper mt-1">
                                                            <canvas id="saleschart"
                                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12"><span class="text-secondary"><i
                                                            class="fe fe-plus-circle  text-secondary"></i> 100</span>
                                                    Last Year</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xl-4">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Followups</h6>
                                                        <h2 class="mb-0 number-font">250</h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="chart-wrapper mt-1">
                                                            <canvas id="leadschart"
                                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12"><span class="text-pink"><i
                                                            class="fe fe-arrow-down-circle text-pink"></i> 7.5%</span>
                                                    This Month</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xl-4">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Products</h6>
                                                        <h2 class="mb-0 number-font">500</h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="chart-wrapper mt-1">
                                                            <canvas id="costchart"
                                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12"><span class="text-warning"><i
                                                            class="fe fe-arrow-up-circle text-warning"></i> 10.6%</span>
                                                    Trained</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 END -->

                       

                        <!-- ROW-3 -->
                        <div class="row">
                            
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Member Summary</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="browser-stats pb-5">

                                        <div class="row mb-4">
                                                <div class="col-sm-12 col-lg-12 col-xl-12 col-xxl-12 ps-sm-0">
                                                    <div class="d-flex align-items-end justify-content-between mb-1">
                                                        <h6 class="mb-1">All Members</h6>
                                                        <h6 class="fw-semibold mb-1">450 <span
                                                                class="text-success fs-11">(<i
                                                                    class="fe fe-plus-circle"></i>2.75%)</span></h6>
                                                    </div>
                                                    <div class="progress h-2 mb-3">
                                                    <div class="progress-bar bg-dark" style="width: 100%;"
                                                            role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <div class="col-sm-12 col-lg-12 col-xl-12 col-xxl-12 ps-sm-0">
                                                    <div class="d-flex align-items-end justify-content-between mb-1">
                                                        <h6 class="mb-1">Central Region</h6>
                                                        <h6 class="fw-semibold mb-1">350 <span
                                                                class="text-success fs-11">(<i
                                                                    class="fe fe-arrow-up"></i>52.75%)</span></h6>
                                                    </div>
                                                    <div class="progress h-2 mb-3">
                                                        <div class="progress-bar bg-success" style="width: 70%;"
                                                            role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <div class="col-sm-12 col-lg-12 col-xl-12 col-xxl-12 ps-sm-0">
                                                    <div class="d-flex align-items-end justify-content-between mb-1">
                                                        <h6 class="mb-1">Eastern Region</h6>
                                                        <h6 class="fw-semibold mb-1">150 <span
                                                                class="text-danger fs-11">(<i
                                                                    class="fe fe-arrow-up"></i>10.75%)</span></h6>
                                                    </div>
                                                    <div class="progress h-2 mb-3">
                                                        <div class="progress-bar bg-danger" style="width: 70%;"
                                                            role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <div class="col-sm-12 col-lg-12 col-xl-12 col-xxl-12 ps-sm-0">
                                                    <div class="d-flex align-items-end justify-content-between mb-1">
                                                        <h6 class="mb-1">Nothern Region</h6>
                                                        <h6 class="fw-semibold mb-1">10 <span
                                                                class="text-success fs-11">(1.75%)</span></h6>
                                                    </div>
                                                    <div class="progress h-2 mb-3">
                                                        <div class="progress-bar bg-warning" style="width: 70%;"
                                                            role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <div class="col-sm-12 col-lg-12 col-xl-12 col-xxl-12 ps-sm-0">
                                                    <div class="d-flex align-items-end justify-content-between mb-1">
                                                        <h6 class="mb-1">Southern Region</h6>
                                                        <h6 class="fw-semibold mb-1">10 <span
                                                                class="text-success fs-11">(1.75%)</span></h6>
                                                    </div>
                                                    <div class="progress h-2 mb-3">
                                                        <div class="progress-bar bg-warning" style="width: 70%;"
                                                            role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>


                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-3 END -->


        @endsection

    @section('scripts')

    <!-- SPARKLINE JS-->
    <script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{asset('assets/plugins/circle-progress/circle-progress.min.js')}}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/select2.js')}}"></script>

    <!-- PIETY CHART JS-->
    <script src="{{asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
    <script src="{{asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
    <script src="{{asset('assets/plugins/chart/rounded-barchart.js')}}"></script>
    <script src="{{asset('assets/plugins/chart/utils.js')}}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{asset('assets/js/apexcharts.js')}}"></script>
    <script src="{{asset('assets/plugins/apexchart/irregular-data-series.js')}}"></script>

    <!-- C3 CHART JS -->
    <script src="{{asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/charts-c3/c3-chart.js')}}"></script>

    <!-- CHART-DONUT JS -->
    <script src="{{asset('assets/js/charts.js')}}"></script>

    <!-- INTERNAL Flot JS -->
    <script src="{{asset('assets/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/plugins/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{asset('assets/plugins/flot/chart.flot.sampledata.js')}}"></script>
    <script src="{{asset('assets/plugins/flot/dashboard.sampledata.js')}}"></script>

    <!-- INTERNAL Vector js -->
    <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="{{asset('assets/js/index.js')}}"></script>
    <script src="{{asset('assets/js/index1.js')}}"></script>

    @endsection
