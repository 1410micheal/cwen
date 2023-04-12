@extends('layouts.app')
@section('content')

  <!-- PAGE-HEADER -->
  <div class="page-header">
            <h1 class="page-title">Permissions</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Permissions</li>
                </ol>
            </div>
        </div>
   <!-- PAGE-HEADER END -->

<!-- Highlighted tabs -->
    <div class="row">

        
    @include('permissions.partials.add_permission_modal')

        <div class="col-md-12">
            <div class="card">
             
                <div class="card-header row">
                    <div class="col-md-9">
                    <h3 class="card-title mb-0">{{ __('auth.permissions') }}</h3>
                </div>
                <div class="col-md-3">

                    <a class="modal-effect btn btn-outline-primary d-block d-grid mb-3 float-right" data-bs-effect="effect-rotate-bottom" data-bs-toggle="modal" href="#addPermission"><i class="fa fa-plus-circle"></i> Add Permission</a>
                    </div>

                </div>

                <div class="card-body services-body">

                    @if(count($permissions)>0)
                        <table class="table datatable-basic table-striped">
                            <thead>
                                <tr class="text-bold">
                                    <th>{{ __('auth.permission') }} {{ __('general.name') }}</th>
                                    <th class="text-center">
                                        ...
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($permissions as $perm)
                                <tr>
                                    <td>{{ strtoupper($perm->name) }}</td>
                                    <td class="text-center">

                                    <div class="g-2">

                                       <a class="btn text-success btn-sm"
                                            data-bs-toggle="tooltip"
                                            data-bs-original-title="Audit"><span
                                                class="fa fa-bar-chart fs-14"></span></a>

                                        <a  href="#perm{{$perm->id}}0" class="btn text-info btn-sm"
                                           data-bs-toggle="modal">
                                            <span
                                            data-bs-toggle="tooltip"
                                            data-bs-original-title="Edit"
                                                class="fe fe-edit fs-14"></span></a>
                                      
                                    </div>   
                                    </td>
                                    
                                </tr>
                                
                                @include('permissions.partials.permission_edit_form_modal')
                                    
                                @endforeach
                            </tbody>
                        </table> 
                        {{ $permissions->links() }}
                        @else
                            <center><div><br><br>No data found</div></center>
                        @endif

                </div>
            </div>
        </div>
    </div>

 
    <!-- /highlighted tabs -->

@endsection
    <!-- /List


    