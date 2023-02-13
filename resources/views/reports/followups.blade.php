@extends('layouts.app')

    @section('styles')



    @endsection

        @section('content')

                       <!-- PAGE-HEADER -->
                       <div class="page-header">
                        <h1 class="page-title">Followup Report</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashbaord</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Member Followup Report</li>
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
                    
                                 <div class="from-group col-lg-4 col-md-4 mb-2">
                                    <label class="form-label">Date from </label>
                                    <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                                </div><input class="form-control fc-datepicker" value="{{@$search->from}}" placeholder="MM/DD/YYYY" type="text" name="start_date" autocomplete="off">
                                    </div>
                                 </div>

                                 <div class="from-group col-lg-4 col-md-4 mb-2">
                                 <label class="form-label">Date To </label>
                                    <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                                </div><input class="form-control fc-datepicker" value="{{@$search->to}}" placeholder="MM/DD/YYYY" type="text" name="end_date" autocomplete="off">
                                    </div></div>

                                    @if(count($followups)>0)
                                        <div class="from-group col-xl-2 col-md-2">                          
                                            <a href="{{ current_url() }}excel_export=1" class="btn btn-dark"><i class="fa fa fa-file-excel-o"></i> Export to Excel</a>
                                        </div>

                                        <div class="from-group col-xl-2 col-md-2">                          
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
                                                   <th
                                                        class="bg-transparent border-bottom-0">
                                                        Date </th>
                                                        <th
                                                        class="bg-transparent border-bottom-0">
                                                        Member</th>
                                                        <th colspan="2"
                                                        class="bg-transparent border-bottom-0">
                                                        Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                             @foreach($followups as $row)
                                                       
                                                 @include('partials.followups.table_row',['row'=>$row,'is_plain'=>true])

                                              @endforeach

                                             </tbody>
                                            </table>
                                    </div>
                                    {{ $followups->links() }}

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
