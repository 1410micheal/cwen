@extends('layouts.app')
@section('content')

@include('permissions.partials.add_role_modal')

<!-- PAGE-HEADER -->
<div class="page-header">
            <h1 class="page-title">{{ __('auth.roles') }} {{ __('general.setup') }}</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('auth.roles') }} {{ __('general.setup') }}</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

<!-- Highlighted tabs -->
    <div class="row py-2">
 
   
        <div class="col-md-12">
            <div class="card">
             
                <div class="card-header row">
                                    	<div class="col-md-9">
                                        <h3 class="card-title mb-0">{{ __('auth.roles') }}</h3>
                                    </div>
                                    <div class="col-md-3">

                                        <a class="modal-effect btn btn-outline-primary d-block d-grid mb-3 float-right" data-bs-effect="effect-rotate-bottom" data-bs-toggle="modal" href="#addRole"><i class="fa fa-plus-circle"></i> {{__('general.add')}} {{__('auth.role')}}</a>
                                      </div>

                                    </div>

                <div class="card-body services-body">

                    @if(count($roles)>0)
                        <table class="table datatable-basic table-striped">
                            <thead>
                                <tr class="text-bold">
                                    <th>{{ __('auth.role') }}</th>
                                    <th class="text-center">
                                        ...
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($roles as $role)

                            @php
                               $rolePerms = [];
                               $perms = $role->permissions()->get();
                               foreach($perms as $p):
                                  array_push($rolePerms,$p->id);
                                endforeach;
                            @endphp
                                <tr>
                                    <td>{{ strtoupper($role->name) }}</td>
                                    <td class="text-center">

                                          <a href="#role{{$role->id}}0" data-bs-toggle="modal" class="mr-2"><i class="fa fa-pencil text-info"></i></a>
                                          <a  href="#perms{{$role->id}}0" class=" text-success" data-bs-toggle="modal"><i class="fa fa-shield"></i> {{ __('auth.permissions') }} </a>
                                    </td>
                                </tr>
                                
                                @include('permissions.partials.role_edit_form_modal')
                                @include('permissions.partials.role_permissions_modal')
                                       
                                @endforeach
                            </tbody>
                        </table> 
                        {{ $roles->links() }}
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