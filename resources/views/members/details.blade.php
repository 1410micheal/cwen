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

                  
                    @if($visits_count < 1)

                    @include('partials.general.no_records',['message'=>'No followup visits yet for this member!'])

                    @else
                        <!-- ROW OPEN -->
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-member">
                                            <!-- <h6 class="mb-2">Orders</h6> -->
                                            <h2 class="text-end"><i class="fa fa-bar-chart icon-size float-start text-danger text-danger-shadow bmember-danger brround p-3"></i><span>{{ number_format($failed) }}</span></h2>
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
                                            <h2 class="text-end"><i class="mdi mdi-shield-outline icon-size float-start text-success text-success-shadow bmember-solid bmember-success brround p-3"></i><span>{{$successful}}</span></h2>
                                            <p class="mb-0 pt-5">Successful Executions<span class="float-end">{{number_format(($successful/$schedules_count)*100) }}%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-member">
                                            <!-- <h6 class="mb-2">Orders</h6> -->
                                            <h2 class="text-end"><i class="fa fa-gavel icon-size float-start text-danger text-danger-shadow bmember-danger brround p-3"></i><span>{{ $manual }}</span></h2>
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
                                                @foreach($member->visits as $row)
                                    			<tr>
                                    				<td>{{ $row->created_at }}</td>
                                    				<td>{{ $row->id }}</td>
                                    				<td>
                                                        {{$row->naarative}}
                                                    </td>
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
