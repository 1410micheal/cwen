@extends('layouts.app')

    @section('styles')



    @endsection

        @section('content')

                           <!-- PAGE-HEADER -->
                           <div class="page-header">
                            <h1 class="page-title">Bank Notifications</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Bank Notifications</li>
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
                                        <h3 class="card-title"><i class="fa fa-bell-o text-danger"></i> Notifications List</h3>
                                    </div>
                                    <div class="card-body row pb-5">

                                    <form class="col-sm-12 col-lg-12 pb-5">
                                        <input type="text" placeholder="Search here..." class="form-control">
                                    </form>

                                        <div class="col-sm-12 col-lg-3">
                                            <ul class="list-group">
                                                <li class="list-group-item justify-content-between">
                                                   <a href="">Receipted
                                                    <span class="badgetext badge bg-success rounded-pill text-white">20</span>
                                                   </a>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    <a href="">Queued
                                                    <span class="badgetext badge bg-warning rounded-pill text-white">15</span>
                                                    </a>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                <a href="">
                                                    Not Receipted
                                                    <span class="badgetext badge bg-danger rounded-pill text-white">10</span>
                                                </a>
                                                </li>
                                                
                                            </ul>
                                    </div>
                                    <div class="col-sm-12 col-lg-9">
                                    <div class="list-group">
                                                <a href="javascript:void(0)" class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1 text-bold">#099866676</h5>
                                                        <small class="text-muted">3 days ago</small>
                                                    </div>
                                                    <p class="mb-1 text-bold">Deposit received</p>
                                                    <small class="text-danger">Centenary Bank</small>
                                                </a>
                                                <a href="javascript:void(0)" class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1 text-bold">#0998660076</h5>
                                                        <small class="text-muted">4 days ago</small>
                                                    </div>
                                                    <p class="mb-1 text-bold">Transfer received</p>
                                                    <small class="text-danger">Centenary Bank</small>
                                                </a>
                                                <a href="javascript:void(0)" class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1 text-bold">#099866900</h5>
                                                        <small class="text-muted">5 days ago</small>
                                                    </div>
                                                    <p class="mb-1 text-bold">Deposit received</p>
                                                    <small class="text-danger">Centenary Bank</small>
                                                </a>
                                                <a href="javascript:void(0)" class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1 text-bold">#099866000</h5>
                                                        <small class="text-muted">6 days ago</small>
                                                    </div>
                                                    <p class="mb-1 text-bold">Deposit received</p>
                                                    <small class="text-danger">Centenary Bank</small>
                                                </a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-4 CLOSED -->


                       

        @endsection

    @section('scripts')



    @endsection
