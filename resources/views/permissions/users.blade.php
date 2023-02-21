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
                                <div class="form-group col-md-3">
                                    <label>{{ __('general.name') }}</label>
                                    <input type="text" name="name"  value="{{$search->name}}" class="form-control" placeholder="Search by Name">
                                </div>

                                <div class="form-group col-md-3">
                                    <label>{{ __('general.email') }}</label>
                                    <input type="tel" name="email"  value="{{$search->email}}" class="form-control" placeholder="Search by Email">
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
                                    <th>{{ __('general.status') }}</th>
                                    <th>{{ __('auth.role') }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            @php
                                  
                                  $statuses = array(
                                  "0"=>"Inactive",
                                  "2"=>"Restricted",
                                  "3"=>"Reset",
                                  "1"=>"Active");
                                @endphp

                            @foreach($users as $user)

                            @php

                            $userRole = get_role($user->id);

                            @endphp

                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->mobile }}</td>
                                    <td><b class="badge badge-dark">{{  $statuses[$user->status] }}</b></td>
                                    <td>{{ strtoupper((@$userRole->name)?$userRole->name:'NO ROLE') }}</td>
                                    <td class="text-center">
                                             @include('permissions.partials.user_row_dropdown')

                                             @include('permissions.partials.user_edit_form_modal')
                                             @include('permissions.partials.reset_modal')
                                             @include('permissions.partials.delete_user_modal')
  
                                    </td>
                                </tr>

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