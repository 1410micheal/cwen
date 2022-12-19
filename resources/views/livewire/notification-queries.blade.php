@extends('layouts.app')

    @section('styles')



    @endsection

        @section('content')

                           <!-- PAGE-HEADER -->
                           <div class="page-header">
                            <h1 class="page-title">Bank Notifications Queries</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Bank Notifications Queries</li>
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


                        <!-- ROW-4 OPEN -->
                        <div class="row">
                            
                           
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"><i class="fa fa-bell-o text-danger"></i> Notifications Exceptions</h3>
                                    </div>
                                    <div class="card-body row pb-5 justify-content-center">

                                    <div class="col-sm-12 col-lg-12 text-center">
                                   
                                    		<i class="fa fa-info-circle fa-3x text-muted"></i>

                                    		<h6 class="text-muted p-2">Non receipted exceptions will appear here for manual action</h6>


                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-4 CLOSED -->


                       

        @endsection

    @section('scripts')



    @endsection
