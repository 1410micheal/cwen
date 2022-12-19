@extends('layouts.app')
@section('content')

  <?php 
  
  $session = current_user();

  ?>


<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Users</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Users</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

@include('permissions.partials.add_user_modal')

<!-- Highlighted tabs -->

        <div class="col-md-12">
            <div class="card">
            <div class="card-header row">
                <div class="col-md-9">
                    <h3 class="card-title mb-0">{{__('auth.users')}}</h3>
                </div>
                <div class="col-md-3">
                    <a class="modal-effect btn btn-outline-primary d-block d-grid mb-3 float-right" data-bs-effect="effect-rotate-bottom" data-bs-toggle="modal" href="#addUser"><i class="fa fa-plus-circle"></i> {{__('general.add')}} {{__('auth.user')}}</a>
                </div>
            </div>

                <div class="card-body services-body">


                        <form action="{{ route('permissions.filerusers') }}" method="POST">
                            @csrf
                            <div class="row pb-3">
                                 <div class="form-group col-md-3  col-sm-12">
                                    <label>Institution</label>
                                    <select class="form-control form-control-select2 select text-bold" name="institution_id" >

                                         <option value="">All</option>
                                       
                                        @foreach($institutions as $institution)
                                            @if(@$institution->inst_name)
                                             <option value='{{ $institution->id}}'
                                                {{ (@$search->institution == $institution->id)?'selected':''}} >
                                                {{ $institution->inst_name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label>{{ __('general.name') }}</label>
                                    <input type="text" name="name"  value="{{$search->name}}" class="form-control" placeholder="Search by Name">
                                </div>

                                <div class="form-group col-md-3">
                                    <label>{{ __('general.email') }}</label>
                                    <input type="tel" name="email"  value="{{$search->phone}}" class="form-control" placeholder="Search by Phone">
                                </div>

                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-dark"><i class="icon-filter4"></i> 
                                    {{ __('general.search') }} {{ __('general.users') }}</button>
                                </div>
                            </div>
                        </form>

                <hr>

                    @if(count($users)>0)
                        <table class="table table-striped">
                            <thead>
                                <tr class="text-bold">
                                    <th>{{ __('auth.user') }}</th>
                                    <th>{{ __('general.email') }}</th>
                                    <th>{{ __('general.phone') }}</th>
                                    <th>{{ __('institutions.institution') }}</th>
                                    <th>{{ __('general.status') }}</th>
                                    <th>{{ __('auth.role') }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $user)

                                @php
                                  $institution    = get_institution($user->institution_id);
                                  $userRole = get_role($user->id);
                                  $statuses = array(
                                  "0"=>"Blocked",
                                  "2"=>"Restricted",
                                  "3"=>"Reset",
                                  "1"=>"Active");
                                @endphp

                                @if($institution)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->mobile }}</td>
                                    <td>{{ @$institution->names }}</td>
                                    <td><b class="badge badge-dark">{{  $statuses[$user->status] }}</b></td>
                                    <td>{{ strtoupper((@$userRole->name)?$userRole->name:'NO ROLE') }}</td>
                                    <td class="text-center">

                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                                    <i class="fa fa-menu"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                               
                                                    <a href="#user{{$user->id}}0" data-bs-toggle="modal" class="dropdown-item"><i class="icon-touch-pinch"></i> 
                                                    {{ __('general.change') }}  {{ __('auth.role') }} </a>

                                               <a href="#login_state{{$user->id}}0" data-bs-toggle="modal" class="dropdown-item"><i class="fa fa-expand"> Reset Password</i> 
                                              
                                                <a href="{{ url('profile', secure_value($user->id))}}" class="dropdown-item"><i class="fa fa-expand"></i> 
                                                    {{ __('general.details') }}  </a>
                                                
                                                <a href="#delete{{$user->id}}0" data-bs-toggle="modal" class="dropdown-item text-danger"><i class="icon-trash"></i> 
                                                    Delete </a>
                                                </div>
                                            </div>
                                
                                             @include('permissions.partials.user_edit_form_modal')
                                             @include('permissions.partials.reset_modal')
                                             @include('permissions.partials.delete_user_modal')

  
                                    </td>
                                </tr>

                                 @endif
                                      
                                @endforeach
                            </tbody>
                        </table> 
                         {{ $users->links() }}
                        @else
                            <center><div><br><br>No data found</div></center>
                        @endif

                </div>
            </div>
        </div>
  
    <!-- /highlighted tabs -->

@endsection
    <!-- /List