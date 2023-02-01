    @extends('layouts.app')

    @section('styles')

    @endsection

    @section('content')

                    <!-- PAGE-HEADER -->
                    <div class="page-header">
                        <h1 class="page-title">Member Groups</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Member Groups</li>
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
                                    <a class="modal-effect btn btn-outline-primary d-block d-grid mb-3 float-right" data-bs-effect="effect-rotate-bottom" data-bs-toggle="modal" href="#group"><i class="fa fa-plus-circle"></i> Add Group</a>
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
                                                                                Group Name</th>
                                                                            <th
                                                                                class="bg-transparent border-bottom-0">
                                                                                Email</th>
                                                                            <th
                                                                                class="bg-transparent border-bottom-0">
                                                                                Phone  Number</th>
                                                                            <th class="bg-transparent border-bottom-0"
                                                                                style="width: 5%;">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                    @foreach($groups as $row)
                                                                        <tr class="border-bottom">
                                                                            
                                                                            <td>
                                                                                <h6>{{$row->group_name}}</h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6>{{$row->group_email}}</h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6>{{$row->group_phone}}</h6>
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

                                                                {{ $groups->links() }}


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
    <div class="modal fade" id="group">
        <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title text-dark"> <i class="fa fa-box text-danger"></i> Add Group</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <form class="form-horizontal" action="{{url('save-group')}}" method="post">

                <div class="modal-body" id="autoElem">
                        @csrf
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Group Name</label>
                            <div class="col-md-9">
                                <input type="text" name="group_name" class="form-control" placeholder="Group Name" required>
                            </div>
                        </div>

                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Group Email</label>
                            <div class="col-md-9">
                                <input type="text" name="group_email" class="form-control" placeholder="Group Email">
                            </div>
                        </div>

                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Group Phone</label>
                            <div class="col-md-9">
                                <input type="text" name="group_phone" class="form-control" placeholder="Group Phone">
                            </div>
                        </div>

                        <div class=" row mb-4 mb-4">
                            <label class="col-md-3 form-label">Village</label>
                            <div class="col-md-9">
                            <div class="form-group col-lg-5">
                                    <label class="form-label">Village/Address</label>
                                    <input type="text" id="village" class="form-control" placeholder="Village">
                                    <input type="hidden" name="id" id="village_id">
                            </div>
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

    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <!-- INTERNAL Accordion-Wizard-Form js-->

 
    @include('partials.general.select2')
    @include('partials.villages.autocomplete')


    @endsection
