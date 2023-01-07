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
                                            <input type="text" name="first_name" class="form-control required" value="{{old('first_name')}}" placeholder="First Name" id="first_name" required>
                                        </div>

                                        <div class="control-group form-group col-lg-4">
                                            <label class="form-label">Middle Name</label>
                                            <input type="text" name="middle_name" class="form-control required" placeholder="Middle Name" value="{{old('middle_name')}}" id="middle_name">
                                        </div>

                                        <div class="control-group form-group col-lg-4">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" name="last_name" class="form-control required" placeholder="Last Name" id="last_name" value="{{old('last_name')}}" required>
                                        </div>

                                        </div>

                                        <div class="row">
                                        <div class="control-group form-group col-lg-4">
                                            <label class="form-label">Phone Number</label>
                                            <input type="tel" name="phone_no" class="form-control required" value="{{old('phone_no')}}" placeholder="Phone No" id="phone_no">
                                        </div>

                                        <div class="control-group form-group col-lg-4">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control required" placeholder="Email" value="{{old('email')}}" id="email">
                                        </div>

                                        <div class="control-group form-group col-lg-4">
                                            <label class="form-label">National ID No.</label>
                                            <input type="text" name="nin" class="form-control" placeholder="National ID" id="nin" value="{{old('nin')}}">
                                        </div>

                                        </div>

                                        <div class="row">

                                       
                                        <div class="control-group form-group col-lg-3">
                                            <label class="form-label">Date of Membership</label>
                                            <input type="date" name="date_registered" class="form-control" placeholder="Date of innitial Membership" id="date_registered" value="{{old('date_registered')}}" required>
                                        </div>

                                        <div class="control-group form-group col-lg-3">
                                            <label class="form-label">Date of Birth</label>
                                            <input type="date" name="dob" class="form-control required" placeholder="Date of birth" id="dob" value="{{old('dob')}}" required>
                                        </div>

                                        <div class="form-group col-lg-3">
                                                <label class="form-label">Member Category</label>
                                                @include('partials.categories.dropdown')
                                        </div>

                                        <div class="form-group col-lg-3">
                                                <label class="form-label">Gender</label>
                                                <select name="gender" class="form-control">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                        </div>

                                        </div>

                                        <div class="row">
                                        
                                        
                                        <div class="form-group col-lg-4">
                                                <label class="form-label">HIV Status</label>
                                                <select name="hiv_status" class="form-control">
                                                    <option>Negative</option>
                                                    <option>Positive</option>
                                                </select>
                                        </div>

                                        <div class="form-group col-lg-4">
                                                <label class="form-label">Education Level</label>
                                                <select name="education" class="form-control">
                                                    <option>Degree</option>
                                                    <option>High School</option>
                                                    <option>Secondary</option>
                                                    <option>Primary</option>
                                                    <option>None</option>
                                                </select>
                                        </div>

                                        
                                        <div class="form-group col-lg-4">
                                                <label class="form-label">Marital Status</label>
                                                <select name="marital_status" class="form-control">
                                                    <option>Married</option>
                                                    <option>Single</option>
                                                    <option>Divorced</option>
                                                </select>
                                        </div>


                                        </div>
                                        
                                    </section>

                                      <h3>Business Profile</h3>
                                    <section class="row">

                                       <div class="col-lg-12">
                                            
                                            <div class="form-group">
                                                <label class="form-label">Business Name</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Business Name"  name="business_name" id="business_name" value="{{old('business_name')}}" required>
                                                    </span>
                                                </div>
                                            </div>
                                       </div>
                                       <div class="col-lg-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">Business Type</label>
                                                <select name="business_type" class="form-control required">
                                                    @foreach($business_types as $type)
                                                        <option value="{{$type->id}}">{{$type->biz_type_name}}</option>
                                                    @endforeach
                                                </select>
                                                 <small class="text-muted">Type of Business</small>
                                            </div>
                                       </div>
                                       <div class="col-lg-6">
                                            
                                            <div class="form-group">
                                                <label class="form-label">No. of Employees</label>
                                                <div class="input-group">
                                                    <input type="number" min="1" class="form-control" placeholder="No. of Employees"  name="employee_count" id="employee_count" value="{{old('employee_count')}}" required>
                                                    </span>
                                                </div>
                                            </div>
                                       </div>
                                       <div class="col-lg-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">Ownership</label>
                                                <select name="biz_ownership" class="form-control required">
                                                        <option value="1">Member Owned</option>
                                                        <option value="0">Member Employed</option>
                                                </select>
                                                 <small class="text-muted">Does member own the business?</small>
                                            </div>
                                       </div>

                                       <div class="col-lg-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">Premise Ownership</label>
                                                <select name="prem_ownership" class="form-control required">
                                                        <option value="1">Owned</option>
                                                        <option value="0">Rented</option>
                                                </select>
                                                 <small class="text-muted">Does member own the business premises?</small>
                                            </div>
                                       </div>
                                       <div class="col-lg-4">
                                            <div class="control-group form-group">
                                                <label class="form-label">Received Business Dev't Training</label>
                                                <select name="has_biz_skills" class="form-control required">
                                                        <option value="1">Yes</option>
                                                        <option value="0">No</option>
                                                </select>
                                                 <small class="text-muted">Member trained in business development?</small>
                                            </div>
                                       </div>

                                       <div class="col-lg-4">
                                            <div class="control-group form-group">
                                                <label class="form-label">Licenced</label>
                                                <select name="is_licenced" class="form-control" required>
                                                        <option value="1">Yes</option>
                                                        <option value="0">No</option>
                                                </select>
                                                 <small class="text-muted">Is business licenced?</small>
                                            </div>
                                       </div>

                                        <div class="col-lg-4">
                                            <div class="control-group form-group">
                                                <label class="form-label">Regulating Authority</label>
                                                <select name="regulator" class="form-control" required>
                                                    <option value="" disabled selected>Select</option>
                                                   @foreach($regulators as $reg)
                                                        <option value="{{$reg->id}}">{{$reg->regulator_name}}</option>
                                                    @endforeach
                                                </select>
                                                 <small class="text-muted">Government Regulator</small>
                                            </div>
                                       </div>
                                       
                                       <div class="col-lg-12">
                                            
                                            <div class="form-group">
                                                <label class="form-label">Business Address</label>
                                                <div class="input-group">
                                                    <textarea class="form-control" placeholder="Business Address"  name="address" id="address">{{old('address')}}</textarea>
                                                    </span>
                                                </div>
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
    var previewImage = function(event) {
        var output = document.getElementById('preview');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
        }
    };
    </script>
   
    
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
