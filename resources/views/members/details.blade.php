@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                         <!-- PAGE-HEADER -->
                         <div class="page-header">
                            <h1 class="page-title">Order Schedule Details</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Order Schedule Details</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                           <!-- Row -->
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
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

                                 <div class="card-body"><div class="row pt-5">
                                 		<div class="col-lg-4 text-start">
                                                <h3 class="text-primary">#{{$order->order_ref}}</h3>
                                                <h5>Approved On: {{$order->date_approved}}</h5>
                                                <h5 class="text-bold text-primary">Executes On: {{ month_day($order->execution_day) }}</h5>
                                                <h5>Created By: {{$order->creator->name}}</h5>
                                        </div>

                                        <div class="col-lg-4">
                                            <p class="h3">Premium Details:</p>
                                            <p class="fs-18 fw-semibold mb-0">Jubilee Life</p>
                                            <address>
                                                    Customer:   {{$order->customer->customer_name}}<br>
                                                    Start Date: {{$order->policy_no}}<br>
                                                    Status: <strong>{{$order->policy_status}}</strong><br>
                                            </address>
                                        </div>
                                        <div class="col-lg-4 text-start">
                                            <p class="h4 fw-semibold">Payment Details:</p>
                                            <p class="fs-18 fw-semibold mb-0">Bank Info:</p>
                                            <p class="mb-1">Account: {{$order->account_no}}</p>
                                            <p class="mb-1">Bank Name: {{$order->institution->inst_name}}</p>
                                            <p class="mb-1">Branch: {{$order->branch->branch_name}}</p>
                                        </div>
                                      </div>

                                 	</div>
                                 </div>
                            </div>
                        </div>
                    </div>

                    @if($schedules_count < 1)

                    @include('partials.general.no_records',['message'=>'No Schedules yet for this order!'])

                    @else
                        <!-- ROW OPEN -->
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-order">
                                            <!-- <h6 class="mb-2">Orders</h6> -->
                                            <h2 class="text-end"><i class="fa fa-bar-chart icon-size float-start text-danger text-danger-shadow border-danger brround p-3"></i><span>{{ number_format($failed) }}</span></h2>
                                            <p class="mb-0 pt-5">Failed Executions<span class="float-end">{{ number_format(($failed/$schedules_count)*100) }}%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widget">
                                            <!-- <h6 class="mb-2">Total Sales</h6> -->
                                            <h2 class="text-end"><i class="mdi mdi-shield-outline icon-size float-start text-success text-success-shadow border-solid border-success brround p-3"></i><span>{{$successful}}</span></h2>
                                            <p class="mb-0 pt-5">Successful Executions<span class="float-end">{{number_format(($successful/$schedules_count)*100) }}%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-order">
                                            <!-- <h6 class="mb-2">Orders</h6> -->
                                            <h2 class="text-end"><i class="fa fa-gavel icon-size float-start text-danger text-danger-shadow border-danger brround p-3"></i><span>{{ $manual }}</span></h2>
                                            <p class="mb-0 pt-5">Manual Triggers<span class="float-end">{{ number_format(($manual/$schedules_count)*100) }}%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- COL END -->
                        </div>
                        <!-- ROW END -->


                        <!-- ROW OPEN -->
                        <div class="row">
                           
                            <div class="col-xl-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Schedule History</h5>
                                    </div>
                                    <div class="card-body">

                                    	<table class="table table-striped">
                                    		<thead>
                                    			<tr>
                                    				<th>Date</th>
                                    				<th>Ref</th>
                                    				<th>Status</th>
                                    				<th>Trials</th>
                                    			</tr>
                                    		</thead>
                                    		<tbody>
                                                @foreach($order->schedules as $row)
                                    			<tr>
                                    				<td>{{ $row->execution_date }}</td>
                                    				<td>{{ $order->order_ref }}</td>
                                    				<td>
                                                        @if($row->status=='SUCCESSFUL')
                                                            <span class="badge bg-success  text-white rounded-pill p-2">{{$row->status}}</span>
                                                        @elseif($row->status=='FAILED')
                                                            <span class="badge bg-danger text-white rounded-pill p-2">{{$row->status}}</span>
                                                            <a href="" class="badge bg-dark text-white rounded-pill p-2">Retry Debit</a>
                                                        @else
                                                            <span class="badge bg-info  text-white rounded-pill p-2">{{$row->status}}</span>
                                                            <a href="" class="badge bg-warning text-white rounded-pill p-2"><i class="fa fa-paper-plane mr-2"></i> Execute Now</a>
                                                        @endif
                                                    </td>
                                    				<td>{{ $row->retry_count }}</td>
                                    			</tr>
                                                @endforeach

                                    			
                                    		</tbody>

                                    		
                                    	</table>
                                  
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->

                        </div>
                        <!-- ROW CLOSED -->
                    @endif

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
