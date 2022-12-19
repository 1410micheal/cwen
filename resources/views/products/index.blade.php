@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Insitutions</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Insitutions</li>
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
                                        <h3 class="card-title mb-0">Insitutions {{ $heading }}</h3>
                                    </div>
                                    <div class="col-md-3">

                                        <a class="modal-effect btn btn-outline-primary d-block d-grid mb-3 float-right" data-bs-effect="effect-rotate-bottom" data-bs-toggle="modal" href="#institution"><i class="fa fa-plus-circle"></i> Add Institution</a>
                                      </div>

                                    </div>
                                    <div class="card-body pt-4">

                                        <div class="grid-margin">
                                            <div class="">
                                                <div class="panel panel-primary">
                                                  
                                                    <div class="panel-body tabs-menu-body border-0 pt-0">
                                                       
                                                                <div class="table-responsive">
                                                                    <table id="data-table"
                                                                        class="table table-bordered text-nowrap mb-0">
                                                                        <thead class="border-top">
                                                                            <tr>
                                                                                <th class="bg-transparent border-bottom-0">
                                                                                    Institution Name</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Email</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Tel</th>
                                                                                <th class="bg-transparent border-bottom-0"
                                                                                    style="width: 10%;">Status</th>
                                                                                <th class="bg-transparent border-bottom-0"
                                                                                    style="width: 5%;">Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                        @foreach($institutions as $row)
                                                                            <tr class="border-bottom">
                                                                                
                                                                                <td>
                                                                                	<h6>{{$row->inst_name}}</h6>
                                                                                </td>
                                                                                <td>
                                                                                	<h6>{{$row->inst_email}}</h6>
                                                                                </td>
                                                                                <td>
                                                                                	<h6>{{$row->inst_tel}}</h6>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">
                                                                                            	Active
                                                                                            </span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">

                                                                                    	 <a href="{{ url('insitution_activity') }}" class="btn text-success btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Activity Summary"><span
                                                                                                class="fa fa-bar-chart fs-14"></span></a>

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
        <div class="modal fade" id="institution">
            <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title text-dark"> <i class="fa fa-institution text-danger"></i> Create New Instituion</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form class="form-horizontal" action="{{url('save-institution')}}" method="post">

                    <div class="modal-body">
                            @csrf
                            <div class=" row mb-4">
                                <label class="col-md-3 form-label">Institution Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control" placeholder="Institution Name" required>
                                </div>
                            </div>

                            <div class=" row mb-4">
                                <label class="col-md-3 form-label" for="example-email">Email</label>
                                <div class="col-md-9">
                                    <input type="email" id="example-email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                            
                            <div class=" row mb-4 mb-4">
                                <label class="col-md-3 form-label">Phone Number</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" placeholder="Phone Number" name="phone">
                                </div>
                            </div>
                            <div class=" row mb-4 mb-4">
                            <label class="col-md-3 form-label">Institution Type</label>
                                <div class="col-md-9">
                                    <select class="form-control form-select" name="type">
                                        <option selected value="" disabled>Choose</option>
                                        <option value="1">None</option>
                                    </select>
                                    <small class="text-muted">Type of Instituion</small>
                                </div>
                            </div>


                             <div class=" row mb-4 mb-4">
                                <label class="col-md-3 form-label">Integration Route</label>
                                <div class="col-md-9">
                                    <select class="form-control form-select" name="route">
                                        <option selected value="" disabled>Choose</option>
                                        <option>None</option>
                                    </select>
                                    <small class="text-muted">Choose Intitution Connection Implementation</small>
                                </div>
                            </div>

                            <div class=" row mb-4 mb-4">
                                <label class="col-md-3 form-label">Address</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" type="text" placeholder="Address" name="address"></textarea>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button> 
                        <button class="btn btn-light" >Close</button>
                    </div>
                    
                           
                    </form>
                </div>
            </div>
        </div>

    @endsection

    @section('scripts')


    @endsection
