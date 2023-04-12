

@extends('layouts.app')

@section('styles')



@endsection

@section('content')

<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Settings</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashbaord</a></li>
            <li class="breadcrumb-item active" aria-current="page">Settings</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<!-- ROW-1 OPEN -->

<!-- Row -->
<div class="row ">
    <div class="col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-body">
<form action="{{ route('settings.savegen') }}" method="POST" class="feeForm00">
 @csrf    
<div class="row">
        <input type="hidden" name="id" value="{{ @$settings->id}} ">
        <div class="form-group form-group-float  col-md-12">
                    <label class="form-group-float-label text-bold">System Name</label>
                    <input type="text" name="system_name"  class="form-control"
                    placeholder="Enter System Name" value="{{ @$settings->system_name }}" />
         </div>

         <div class="form-group form-group-float  col-md-12">
                    <label class="form-group-float-label text-bold">System Email</label>
                    <input type="text" name="system_email"  class="form-control" placeholder="System Email"
                     required="" value="{{ @$settings->system_email }}"/>
         </div>
         <div class="form-group form-group-float  col-md-12">
                    <label class="form-group-float-label text-bold">Password Expiry (days)</label>
                    <input type="text" name="pass_expiry"  class="form-control" placeholder="Password Expiry (days)"
                     required="" value="{{ @$settings->password_expiration_days }}"/>
         </div>

         <div class="form-group form-group-float  col-md-12">
                    <label class="form-group-float-label text-bold">Enabaled Two Factor Authentication</label>
                    <select class="form-control" name="enable_two_factor">
                     @if(@$settings->password_expiration_days)
                     <option value="{{ (@$settings->password_expiration_days)?1:0 }}">{{ (@$settings->password_expiration_days)?'Enable':'Disable' }}</option>
                     @endif
                     <option value="1">Enable</option>
                     <option value="1">Disable</option>
                    </select>
         </div>
       
       

    <div class="col-md-6 col-xs-12 col-sm-12 offset-lg-9">
   
        <button type="submit" class="btn btn-dark pl-5 pr-5">
            <i class="icon-floppy-disk  mr-2"></i>
            SAVE CHANGES
        </button>
    </div>
         
    </div>

 </form>
</div>
  
</div>
    </div>
</div>
@endsection