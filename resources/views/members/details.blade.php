@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

<!-- PAGE-HEADER -->
<div class="page-header">
<h1 class="page-title">Member Details</h1>
<div>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Member Details</li>
    </ol>
</div>
</div>
<!-- PAGE-HEADER END -->



<!-- ROW-1 OPEN -->
<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3 class="text-primary">Member Info</h3>
            <hr>
            <div class="row">
                <div class="col-lg-4  text-start border-bottom border-lg-0">
                    <h3 class="text-dark">#{{$member->unique_id}}</h3>
                    <h5>Registered: {{ $member->date_registered }}</h5>
                    <h5>Member Category:<strong>{{$member->category->category_name}}</strong></h5>
                    <h5>Marital Status: {{ $member->marital_status }}</h5>
                    
                </div>

                <div class="col-lg-4">
                    <p class="h3">Member Details:</p>
                    <address>
                            First Name:  {{ $member->first_name }}<br>
                            Last Name:   {{ $member->last_name }}<br>
                            Middle Name: {{ $member->middle_name }}<br>
                            Age: <strong class="text-primary">{{ $member->age }} Years</strong></br>
                   
                      </address>
                </div>
                <div class="col-lg-4 text-start">
                    <p class="h4 fw-semibold">Other Details:</p>
                    <p class="mb-1">Phone No: {{$member->telephone}}</p>
                    <p class="mb-1">Email: {{$member->email}}</p>
                    <p class="mb-1">Education: {{ $member->education_level }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- COL-END -->
</div>
<!-- ROW-1 CLOSED -->



@if($member->business)
 @include('partials.members.business_profile')
@endif



<!-- ROW OPEN -->
<div class="row">
<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
    <div class="card">
        <div class="card-body">
            <div class="card-member">
                <!-- <h6 class="mb-2">Orders</h6> -->
                <h2 class="text-end"><i class="fa fa-bar-chart icon-size float-start text-danger text-danger-shadow border-danger brround p-3"></i><span>{{ number_format($visits_count) }}</span></h2>
                <p class="mb-0 pt-5">Number of Visits</p>
            </div>
        </div>
    </div>
</div>


<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
    <div class="card">
        <div class="card-body">
            <div class="card-widget">
                <!-- <h6 class="mb-2">Total Sales</h6> -->
                <h2 class="text-end"><i class="fe fe-box icon-size float-start text-success text-success-shadow border-solid border-success brround p-3"></i><span>{{number_format($products_count) }}</span></h2>
                <p class="mb-0 pt-5">Member Products</p>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
    <div class="card">
        <div class="card-body">
            <div class="card-member">
                <!-- <h6 class="mb-2">Orders</h6> -->
                <h2 class="text-end"><i class="fa fa-gavel icon-size float-start text-orange text-orange-shadow border-danger brround p-3"></i><span>{{ number_format($offences_count) }}</span></h2>
                <p class="mb-0 pt-5">SGBV Offences Reported</p>
            </div>
        </div>
    </div>
</div>

<!-- COL END -->
</div>
<!-- ROW END -->


<!-- ROW-4 -->
<div class="row">
    <div class="col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title mb-0">Member Additional Data</h3>
            </div>
            <div class="card-body pt-4">
                <div class="grid-margin">
                    <div class="">
                        <div class="panel panel-primary">
                            <div class="tab-menu-heading border-0 p-0">
                                <div class="tabs-menu1">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs Order-sale">
                                        <li><a href="#followup" class="active"
                                                data-bs-toggle="tab"><i class="fa fa-bar-chart"></i> Followup History</a></li>
                                        <li><a href="#products" data-bs-toggle="tab"
                                                class="text-dark"><i class="fe fe-box"></i> Member Products</a></li>
                                                <li><a href="#offences" data-bs-toggle="tab"
                                                class="text-dark"><i class="fa fa-legal"></i> SGBV Records</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body border-0 pt-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="followup">
                                        <div class="table-responsive pt-4">
                                        @if($visits_count < 1)
                                            @include('partials.general.no_records',['message'=>'No followup data for this member!'])
                                        @else
                                            @include('partials.members.member_followup')
                                        @endif
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="products">
                                        <div class="table-responsive pt-4">
                                        @if($products_count < 1)
                                             @include('partials.general.no_records',['message'=>'No products for this member!'])
                                        @else
                                             @include('partials.members.member_products')
                                        @endif

                                        </div>
                                    </div>

                                    <div class="tab-pane" id="offences">
                                        <div class="table-responsive pt-4">
                                        @if($offences_count < 1)
                                             @include('partials.general.no_records',['message'=>'No offences reported from this member!'])
                                        @else
                                             @include('partials.members.member_products')
                                        @endif

                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ROW-4 END -->


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
