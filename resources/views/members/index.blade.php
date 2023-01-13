@extends('layouts.app')

    @section('styles')



    @endsection

        @section('content')

                       <!-- PAGE-HEADER -->
                       <div class="page-header">
                        <h1 class="page-title">Member List</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashbaord</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Member List</li>
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
                                                </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text" name="start_date">
                                    </div>
                                 </div>

                                 <div class="from-group col-lg-2 col-md-2 mb-2">
                                 <label class="form-label">Date To </label>
                                    <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                                </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text" name="end_date">
                                    </div></div>

                                 <div class="from-group col-lg-2 col-md-2">
                                    <label class="form-label">Gender </label>
                                    <select class="form-control" name="gender">
                                        <option value="">All</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                 </div>

                                 <div class="from-group col-lg-2 col-md-2">
                                         <label class="form-label">Marital Status</label>
                                        <select name="marital_status" class="form-control">
                                            <option value="">All</option>
                                            <option>Married</option>
                                            <option>Single</option>
                                            <option>Divorced</option>
                                        </select>
                                 </div>

                                 <div class="from-group col-lg-2 col-md-2">
                                    <label class="form-label">HIV Status </label>
                                    <select class="form-control" name="hiv_status">
                                        <option value="">All</option>
                                        <option value="Positive">Positive</option>
                                        <option value="Negative">Negative</option>
                                    </select>
                                 </div>

                                 <div class="from-group col-lg-2 col-md-2">
                                    <label class="form-label">Education</label>
                                    <select name="education" class="form-control">
                                        <option value="">All</option>
                                        <option>Degree</option>
                                        <option>High School</option>
                                        <option>Secondary</option>
                                        <option>Primary</option>
                                        <option>None</option>
                                    </select>
                                 </div>

                                 <div class="from-group col-lg-2 col-md-2 mt-5">
                                    <button type="submit" class="btn btn-primary">Apply Filter</button>
                                 </div>

                                 @if(count($members)>0)
                                 <div class="from-group col-xl-2 col-md-2 pt-5">                          
                                    <a href="{{ current_url() }}excel_export=1" class="btn btn-dark"><i class="fa fa fa-file-excel-o"></i> Export to Excel</a>
                                </div>

                                <div class="from-group col-xl-2 col-md-2 pt-5">                          
                                    <a href="{{ current_url() }}export_pdf=1" class="btn btn-dark"><i class="fa fa fa-file-pdf-o"></i> Export to PDF</a>
                                </div>

                                 @endif

                                 </div>
                                 </form>
                                
                                <div class="card-body">
                                    <p class="text-muted">Use the filters above to refine the data as per reporting requirement</p>
                                    <div class="table-responsive">
                                        
                                    <table id="data-table"
                                            class="table table-bordered text-nowrap mb-0">
                                            <thead class="border-top">
                                                <tr>
                                                    <th class="bg-transparent border-bottom-0"
                                                        style="width: 5%;">Unique Id</th>
                                                    <th
                                                        class="bg-transparent border-bottom-0">
                                                        Date Registered</th>
                                                        <th
                                                        class="bg-transparent border-bottom-0">
                                                        Member Name</th>
                                                        <th
                                                        class="bg-transparent border-bottom-0">
                                                        Gender</th>
                                                    <th class="bg-transparent border-bottom-0"
                                                        style="width: 10%;">Marital Status</th>
                                                    <th class="bg-transparent border-bottom-0"
                                                        style="width: 10%;">HIV Status</th>
                                                        <th class="bg-transparent border-bottom-0"
                                                        style="width: 10%;">Education</th>
                                                    <th class="bg-transparent border-bottom-0"
                                                        style="width: 5%;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                             @foreach($members as $row)
                                                       
                                                 @include('partials.members.table_row',['row'=>$row])

                                              @endforeach

                                             </tbody>
                                            </table>
                                    </div>

                                    

                                    {{ $members->links() }}

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
