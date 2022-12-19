@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Products</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Products</li>
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
                                        <h3 class="card-title mb-0">Jubilee Products</h3>
                                    </div>
                                    <div class="col-md-3">

                                        <a class="modal-effect btn btn-outline-primary d-block d-grid mb-3 float-right" data-bs-effect="effect-rotate-bottom" data-bs-toggle="modal" href="#product"><i class="fa fa-plus-circle"></i> Add Product</a>
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
                                                                                    Product Name</th>
                                                                                
                                                                                <th class="bg-transparent border-bottom-0"
                                                                                    style="width: 10%;">Status</th>
                                                                                <th class="bg-transparent border-bottom-0"
                                                                                    style="width: 5%;">Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr class="border-bottom">
                                                                                
                                                                                <td>
                                                                                	<h6>Jubilee Life</h6>
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

                                                                                    	 <a class="btn text-success btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Product Summary"><span
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
        <div class="modal fade" id="product">
            <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title text-dark"> <i class="fa fa-archive text-danger"></i> Create New Product</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      
                       <form class="form-horizontal">

                            <div class=" row mb-4">
                                <label class="col-md-3 form-label">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control" value="Product Name">
                                </div>
                            </div>

                            <div class=" row mb-4">
                                <label class="col-md-3 form-label" for="example-email">Description</label>
                                <div class="col-md-9">
                                    <textarea id="example-email" name="email" class="form-control" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <div class=" row mb-4">
                            <label class="col-md-3 form-label" for="example-email">Receipting Route</label>
                            <div class="col-md-9">
                                    <select class="form-control form-select">
                                        <option selected value="" disabled>Choose</option>
                                        <option>None</option>
                                        <option>General Core API</option>
                                    </select>
                                    <small class="text-muted">Choose Core Receipting Connection</small>
                                
                             </div>

                            </div>
                            
                            
                           
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary">Submit</button> <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        @endsection

    @section('scripts')


    @endsection
