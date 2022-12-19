@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Add Member</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Member</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->


                <!--Row-->
                <div class="row ">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom-0">
                                <div class="card-title">
                                   <i class="fa fa-address-card-o text-danger mr-2"></i> Complete Member Details
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('save-member')}}" method="post" id="policywizard">

                                    @csrf

                                    <h3>Member Information</h3>
                                    <section>
                                        <div class="row">
                                        <div class="control-group form-group col-lg-4">
                                            <label class="form-label">First Name</label>
                                            <input type="text" name="first_name" class="form-control required" placeholder="First Name" id="first_name">
                                        </div>

                                        <div class="control-group form-group col-lg-4">
                                            <label class="form-label">Middle Name</label>
                                            <input type="text" name="middle_name" class="form-control required" placeholder="Middle Name" id="middle_name">
                                        </div>

                                        <div class="control-group form-group col-lg-4">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" name="last_name" class="form-control required" placeholder="Last Name" id="last_name">
                                        </div>

                                        </div>
                                        <div class="row">

                                        <div class="form-group col-lg-4">
                                                <label class="form-label">Member Category</label>
                                                @include('partials.categories.dropdown')
                                        </div>

                                        <div class="form-group col-lg-4">
                                                <label class="form-label">Gender</label>
                                                <select name="gender" class="form-control">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                        </div>

                                        <div class="form-group col-lg-4">
                                                <label class="form-label">HIV Status</label>
                                                <select name="gender" class="form-control">
                                                    <option>Negative</option>
                                                    <option>Positive</option>
                                                </select>
                                        </div>

                                        </div>
                                        
                                    </section>

                                      <h3>Product Information</h3>
                                    <section class="row">
                                        <div class="col-lg-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">Product Type</label>
                                                <select name="product_type" class="form-control required">
                                                        <option value="1">Generic</option>
                                                </select>
                                                 <small>Product Type/ Catgeory</small>
                                            </div>
                                       </div>
                                       <div class="col-lg-6">
                                            
                                            <div class="form-group">
                                                <label class="form-label">Product Name</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Account Number" onblur="accountChanged($(this).val())" name="account_no" id="accountNo">
                                                    </span>
                                                </div>
                                            </div>
                                       </div>
                                       
                                        
                                    </section>

                                    <h3>Upload Attachments</h3>
                                    <section>
                                        <div class="control-group form-group  row">
                                            <div class="col-lg-12 col-sm-12">
                                                <label class="form-label text-muted">Upload suppoting attachments</label>
                                                <input id="demo" type="file" name="attachments"
                                                    accept=".jpg,.pdf, .png, image/jpeg, image/png" multiple>
                                            </div>
                                        </div>
                                        
                                    </section>
                                    
                                </div>
                                </form>
                        </div>
                    </div>
                </div>
                <!-- /Row -->

        @endsection

    @section('scripts')

    <!-- INTERNAL File-Uploads Js-->
    <script src="{{asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
    <script src="{{asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
    <script src="{{asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
    <script src="{{asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
    <script src="{{asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

   
    <!-- FORM WIZARD JS-->
    <script src="{{asset('assets/plugins/formwizard/jquery.smartWizard.js')}}"></script>
    <script src="{{asset('assets/plugins/formwizard/fromwizard.js')}}"></script>

    <!-- INTERNAl Jquery.steps js -->
    <script src="{{asset('assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>
    <script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>

    <!-- INTERNAL Accordion-Wizard-Form js-->
   
    
    <script>

      

        $('#policywizard').steps({
        headerTag: 'h3',
        bodyTag: 'section',
        autoFocus: true,
        titleTemplate: '<span class="number">#index#<\/span> <span class="title">#title#<\/span>',
        onStepChanging: function(event, currentIndex, newIndex) {
            console.log(event);

            console.log('Current Index',currentIndex);

            if (currentIndex < newIndex) {
                // Step 1 form validation
                if (currentIndex === 0) {

                    return true;
                    
                }
                // Step 2 form validation
                if (currentIndex === 1) {
                   
                        return true;
                        //showAlert('Invalid Data','Please complete all fields','warning');
                }

                 // Step 3 form validation
                if (currentIndex === 2) {
                   
                   return true;
                }

                // Step 4 form validation

                if (currentIndex === 3) {
                   alert('Form submitted!');
                   return true;
                }
                // Always allow step back to the previous step even if the current step is not valid.
            } else {
                return true;
            }
        },
        onFinished: function (event, currentIndex) {
            console.log(event);

                var form = $(this);
                // Submit form input
                form.submit();
       }
    });


    </script>

    @endsection
