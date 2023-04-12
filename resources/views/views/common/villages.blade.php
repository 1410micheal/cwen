@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Gov't Regulators</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Villages</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->


                        <!-- ROW-4 -->
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header row">
                                    	<div class="col-md-9">
                                        <h3 class="card-title mb-0">{{ $heading }}</h3>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="modal-effect btn btn-outline-primary d-block d-grid mb-3 float-right" data-bs-effect="effect-rotate-bottom" data-bs-toggle="modal" href="#village"><i class="fa fa-plus-circle"></i> Add Villages</a>
                                      </div>

                                    </div>
                                    <div class="card-body pt-4">

                                        <div class="grid-margin">
                                            <div class="">
                                                <div class="panel panel-primary">
                                                  
                                                    <div class="panel-body tabs-menu-body border-0 pt-0">

                                 <form class="px-5 row">
                    

                                 <div class="from-group col-lg-10 ">
                                        <label class="form-label">Search </label>
                                        <input class="form-control" value="{{@$search->term}}" placeholder="Search here" type="text" name="term" autocomplete="off">
                                </div>

                                 <div class="from-group col-lg-2 mt-5">
                                    <label></label>
                                    <button type="submit" class="btn btn-primary">Search</button>
                                 </div>

                                 </div>
                                 </form>
                                                       
                                                                <div class="table-responsive">
                                                                    <table id="data-table"
                                                                        class="table table-bordered text-nowrap mb-0">
                                                                        <thead class="border-top">
                                                                            <tr>
                                                                                <th class="bg-transparent border-bottom-0">
                                                                                    Village</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Description</th>
                                                                                <th class="bg-transparent border-bottom-0"
                                                                                    style="width: 5%;">Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                        @foreach($villages as $row)
                                                                            <tr class="border-bottom">
                                                                                
                                                                                <td>
                                                                                	<h6>{{$row->village_name}}</h6>
                                                                                </td>
                                                                                <td>
                                                                                	<h6>{{$row->district->district_name}}</h6>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">

                                                                                        <a class="btn text-info btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>

                                                                    <br>

                                                                    {{ $villages->links() }}


                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                              <!-- MODAL EFFECTS -->
        <div class="modal fade modalselect" id="village">
            <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title text-dark"> <i class="fa fa-box text-danger"></i> Add Village</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form class="form-horizontal" action="{{url('save-village')}}" method="post">

                    <div class="modal-body">
                            @csrf
                            <div class=" row mb-4">
                                <label class="col-md-3 form-label">Village Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="village_name" class="form-control" placeholder="Village Name" required>
                                </div>
                            </div>

                            <div class=" row mb-4 mb-4">
                                <label class="col-md-3 form-label">District</label>
                                <div class="col-md-9">
                                    @include('partials.districts.dropdown')
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button> 
                        <button class="btn btn-light"  data-bs-dismiss="modal">Close</button>
                    </div>
                    
                           
                    </form>
                </div>
            </div>
        </div>

    @endsection

    @section('scripts')
    
    @include('partials.general.select2')


    @endsection
