@extends('layouts.app')

    @section('styles')



    @endsection

        @section('content')

                       <!-- PAGE-HEADER -->
                       <div class="page-header">
                        <h1 class="page-title">Products Report</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashbaord</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Products Report</li>
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
                    
                                 <div class="from-group col-lg-2 col-md-2 mb-2">
                                    <label class="form-label">Date from </label>
                                    <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                                </div><input class="form-control fc-datepicker" value="{{@$search->from}}" placeholder="MM/DD/YYYY" type="text" name="start_date" autocomplete="off">
                                    </div>
                                 </div>

                                 <div class="from-group col-lg-2 col-md-2 mb-2">
                                 <label class="form-label">Date To </label>
                                    <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                                </div><input class="form-control fc-datepicker" value="{{@$search->to}}" placeholder="MM/DD/YYYY" type="text" name="end_date" autocomplete="off">
                                    </div></div>

                                    <div class="from-group col-lg-2 col-md-2 mb-2">
                                    <label class="form-label">Product Type</label>
                                       @include('partials.products.types_dropdown',['selected'=>@$search->type_id])
                                    </div>

                                    <div class="from-group col-lg-3 col-md-3 mb-2">
                                    <label class="form-label">URSB Registration</label>
                                        <select class="form-control form-select" name="ursb">
                                            <option value="" {{ (@$search->ursb=="")?"selected":""}}>All</option>
                                            <option value="1" {{ (@$search->ursb==1)?"selected":""}}>Registered</option>
                                            <option value="0" {{ (@$search->ursb==0)?"selected":""}}>Not Registered</option>
                                        </select>
                                      </div>

                                      <div class="from-group col-lg-3 col-md-3 mb-2">
                                    <label class="form-label">UNBS Certification</label>
                                        <select class="form-control form-select" name="unbs">
                                            <option value="" {{ (@$search->unbs=="")?"selected":""}}>All</option>
                                            <option value="1" {{ (@$search->unbs==1)?"selected":""}}>Certified</option>
                                            <option value="0" {{ (@$search->unbs==0)?"selected":""}}>Not Certified</option>
                                        </select>
                                      </div>

                                    @if(count($products)>0)
                                        <div class="from-group col-xl-2 col-md-2 mt-5">                          
                                            <a href="{{ current_url() }}excel_export=1" class="btn btn-dark"><i class="fa fa fa-file-excel-o"></i> Export to Excel</a>
                                        </div>

                                        <div class="from-group col-xl-2 col-md-2 mt-5">                          
                                            <a href="{{ current_url() }}export_pdf=1" class="btn btn-dark"><i class="fa fa fa-file-pdf-o"></i> Export to PDF</a>
                                        </div>
                                    @endif

                                 <div class="from-group col-xl-2 col-md-3 mt-5">
                                    <button type="submit" class="btn btn-primary">Apply Filter</button>
                                 </div>

                                 </form>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted">Use the filters above to refine the data as per reporting requirement</p>
                                    <div class="table-responsive">
                                        
                                    <table id="data-table"
                                            class="table table-bordered text-nowrap mb-0">
                                            <thead class="border-top">
                                                <tr>
                                                   <th class="bg-transparent border-bottom-0">Product Name</th>
                                                    <th class="bg-transparent border-bottom-0">Type</th>
                                                    <th class="bg-transparent border-bottom-0">Packaging</th>
                                                    <th class="bg-transparent border-bottom-0">URSB Registration</th>
                                                    <th class="bg-transparent border-bottom-0">UNBS Certification</th>
                                                    <th class="bg-transparent border-bottom-0">Recylable Packaging</th>
                                                    <th class="bg-transparent border-bottom-0">Member</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                             @foreach($products as $row)
                                                       
                                                 @include('partials.products.table_row',['row'=>$row,'is_plain'=>true])

                                              @endforeach

                                             </tbody>
                                            </table>
                                    </div>
                                    {{ $products->links() }}

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->


        @endsection

    @section('scripts')

      <!-- DATEPICKER JS -->
       <!-- INTERNAL Bootstrap-Datepicker js-->
   @include('partials.general.datepicker')


    @endsection
