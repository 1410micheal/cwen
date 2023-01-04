
<div class="card">

<div class="card-header header-elements-inline">
    
    <h4 class="card-title">
        <i class="icon-user text-lg"></i> 
    {{ __('auth.user') }} {{ __('auth.profile') }}</h4>
 
</div>

<div class="card-body">
<form action="{{ route('profile.update') }}" method="POST" class="feeForm00" enctype="multipart/form-data">
 @csrf    
<div class="row">
    <div class="col-lg-5">
        <input type="hidden" name="id" value="{{ $user->id}} ">
        <div class="form-group form-group-float  col-md-12">
                    <label class="form-group-float-label text-bold">{{ __('auth.firstname') }}</label>
                    <input type="text" name="firstname"  class="form-control" value="{{  $user->firstname }}" />
         </div>

         <div class="form-group form-group-float  col-md-12">
                    <label class="form-group-float-label text-bold">{{ __('auth.lastname') }}</label>
                    <input type="text" name="lastname"  class="form-control" value="{{  $user->lastname }}" />
         </div>
         
          <div class="form-group form-group-float  col-md-12">
                    <label class="form-group-float-label text-bold">{{ __('auth.email') }}</label>
                    <input type="text" name="email"  class="form-control" value="{{  $user->email }}" />
         </div>
    </div>
    <div class="col-lg-5">

         <div class="form-group form-group-float  col-md-12">
                    <label class="form-group-float-label text-bold">{{ __('auth.mobile') }}</label>
                    <input type="text" name="mobile"  class="form-control" value="{{  $user->mobile }}" />
         </div>

         <div class="form-group form-group-float  col-md-12">
                    <label class="form-group-float-label text-bold">{{ __('auth.nin') }}</label>
                    <input type="text" name="nin"  class="form-control" placeholder="{{ __('auth.nin') }}" value="{{  $user->nin }}" />
         </div>

       
    </div>

    <div class="col-lg-2">
    <div class="form-group form-group-float  col-md-12">
        <input type="file" name="photo" id="photo" onchange="previewImage(event)">

        <img class="img img-thumbnail mt-4 p-4" id="preview" onclick="$('#photo').click()" src="{{ asset('/storage/users/') }}/{{$user->photo}}">
    </div>
    </div>


    <div class="col-md-6 col-xs-12 col-sm-12">
   
        <button type="submit" class="btn btn-success pl-5 pr-5">
            <i class="icon-floppy-disk  mr-2"></i>
            {{ __('general.update') }}
        </button>
    </div>
         
    </div>

 </form>
</div>
  
</div>

<script>
  var previewImage = function(event) {
    var output = document.getElementById('preview');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>