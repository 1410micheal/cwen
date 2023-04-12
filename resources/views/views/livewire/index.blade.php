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
                                                        <h2 class="mb-0 number-font">{{$widget->member_count}}</h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="chart-wrapper mt-1">
                                                            <canvas id="saleschart"
                                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12"><span class="text-secondary">
                                                    All Members</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xl-4">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Followups</h6>
                                                        <h2 class="mb-0 number-font">{{$widget->followup_count}}</h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="chart-wrapper mt-1">
                                                            <canvas id="leadschart"
                                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12"><span class="text-pink">
                                                    All member followups</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xl-4">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Products</h6>
                                                        <h2 class="mb-0 number-font">{{$widget->product_count}}</h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="chart-wrapper mt-1">
                                                            <canvas id="costchart"
                                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12"><span class="text-warning">
                                                    All member products</span>
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
                                    @foreach($widget->membership as $region)
                                        @php 
                                            $colors = ['dark','primary','success','info','warning'];
                                        @endphp
                                        <div class="row mb-4">
                                                <div class="col-sm-12 col-lg-12 col-xl-12 col-xxl-12 ps-sm-0">
                                                    <div class="d-flex align-items-end justify-content-between mb-1">
                                                        <h6 class="mb-1">{{$region->region_name}} </h6>
                                                        <h6 class="fw-semibold mb-1">{{number_format($region->count)}} <span
                                                                class="text-success fs-11">({{($region->count>0)?($region->count/$widget->member_count)*100:0}}%)</span></h6>
                                                    </div>
                                                    <div class="progress h-2 mb-3">
                                                    <div class="progress-bar bg-{{ $colors[mt_rand(0,4)] }}" style="width: {{($region->count>0)?($region->count/$widget->member_count)*100:0}}%;"
                                                            role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach

                                          
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Products Summary</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="browser-stats pb-5">
                                    @foreach($widget->products as $product)
                                     @php
                                       $colors =['dark','success','danger','teal','primary','warning','purple']
                                     @endphp
                                        <div class="row mb-4">
                                                <div class="col-sm-12 col-lg-12 col-xl-12 col-xxl-12 ps-sm-0">
                                                    <div class="d-flex align-items-end justify-content-between mb-1">
                                                        <h6 class="mb-1">{{$product->type_name}}</h6>
                                                        <h6 class="fw-semibold mb-1">{{$product->count}}
                                                            
                                                        <span
                                                                class="text-success fs-11"> ({{ ($product->count/$widget->product_count)*100 }}%)</span></h6>
                                                    </div>
                                                    <div class="progress h-2 mb-3">
                                                    <div class="progress-bar bg-{{ $colors[mt_rand(0,6)]}}" style="width: {{ ($product->count/$widget->product_count)*100 }}%;"
                                                            role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- ROW-3 END -->


        @endsection

    @section('scripts')


    @endsection
