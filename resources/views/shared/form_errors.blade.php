
@if ($errors->any())
    <div class="alert alert-danger alert-dismissable">
    	<h5><i class="fa fa-warning"></i> {{ __('general.data_error') }}</h5>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <div class="row">
         <div class="offset-md-11">
           <button class="btn btn-sm btn-danger float float-right" data-bs-dismiss="alert">{{ __('close')}}</button>
           </div>
        </div>
    </div>
@endif