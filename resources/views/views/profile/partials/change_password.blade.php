
<div class="card">

<div class="card-header header-elements-inline">
    
    <h4 class="card-title">
        <i class="icon-shield2 text-lg"></i> 
    {{ __('auth.changepass') }}</h4>
 
</div>

<div class="card-body">
<form action="{{ route('profile.changepass') }}" method="POST" class="feeForm00">
 @csrf    
<div class="row">
        <input type="hidden" name="id" value="{{ $user->id}} ">
        <div class="form-group form-group-float  col-md-12">
                    <label class="form-group-float-label text-bold">{{ __('auth.password') }}</label>
                    <input type="password" name="pass1"  class="form-control"
                    placeholder="Enter password"  required="" />
         </div>

         <div class="form-group form-group-float  col-md-12">
                    <label class="form-group-float-label text-bold">{{ __('auth.confirmpass') }}</label>
                    <input type="password" name="pass2"  class="form-control" placeholder="Confirm password" required=""/>
         </div>
       

    <div class="col-md-6 col-xs-12 col-sm-12 offset-lg-7">
   
        <button type="submit" class="btn btn-dark pl-5 pr-5">
            <i class="icon-floppy-disk  mr-2"></i>
            {{ __('general.submit') }}
        </button>
    </div>
         
    </div>

 </form>
</div>
  
</div>