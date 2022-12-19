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

                                 <div class="from-group col-xl-4 col-md-4">
                                    <label>Status </label>
                                    <select class="form-control">
                                        <option>All</option>
                                    </select>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->


        @endsection

    @section('scripts')

      <!-- DATEPICKER JS -->
      
      <script src="{{asset('assets/plugins/date-picker/date-picker.js')}}"></script>
    <script src="{{asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/plugins/input-mask/jquery.maskedinput.js')}}"></script>
       <!-- INTERNAL Bootstrap-Datepicker js-->
       <script src="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
    
    <!-- FORMELEMENTS JS -->
    <script>
         // Datepicker
            $('.fc-datepicker').datepicker({
                showOtherMonths: true,
                selectOtherMonths: true
            });

    </script>

    @endsection
