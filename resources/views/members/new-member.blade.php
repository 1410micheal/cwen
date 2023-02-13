@extends('layouts.app')

    @section('styles')

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

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

                                       
                                        <div class="control-group form-group col-lg-4">
                                            <label class="form-label">Date of Membership</label>
                                            <input type="text" name="date_registered" class="form-control datepick" placeholder="Date of innitial Membership" id="date_registered" value="{{old('date_registered')}}" required>
                                        </div>

                                        <div class="control-group form-group col-lg-4">
                                            <label class="form-label">Date of Birth</label>
                                            <input type="text" name="dob" class="form-control dobdate" placeholder="Date of birth" id="dob" value="{{old('dob')}}" required>
                                        </div>

                                        <div class="form-group col-lg-4">
                                                <label class="form-label">Member Category</label>
                                                @include('partials.categories.dropdown')
                                        </div>

                                        <div class="form-group col-lg-4">
                                                <label class="form-label">Member Cluster</label>
                                                @include('partials.cluster.dropdown')
                                        </div>

                                        
                                        <div class="form-group col-lg-4">
                                                <label class="form-label">Member Group</label>
                                                @include('partials.members.group_dropdown')
                                        </div>

                                        <div class="form-group col-lg-4">
                                                <label class="form-label">Gender</label>
                                                <select name="gender" class="form-control">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                        </div>

                                        </div>

                                        <div class="row">
                                        
                                        
                                        <div class="form-group col-lg-3">
                                                <label class="form-label">HIV Status</label>
                                                <select name="hiv_status" class="form-control">
                                                    <option>Negative</option>
                                                    <option>Positive</option>
                                                </select>
                                        </div>

                                        <div class="form-group col-lg-2">
                                                <label class="form-label">Education Level</label>
                                                <select name="education" class="form-control">
                                                    <option>Degree</option>
                                                    <option>High School</option>
                                                    <option>Secondary</option>
                                                    <option>Primary</option>
                                                    <option>None</option>
                                                </select>
                                        </div>

                                        <div class="form-group col-lg-2">
                                                <label class="form-label">Marital Status</label>
                                                <select name="marital_status" class="form-control">
                                                    <option>Married</option>
                                                    <option>Single</option>
                                                    <option>Divorced</option>
                                                </select>
                                        </div>


                                        <div class="form-group col-lg-5 " id="autoElem">
                                                <label class="form-label">Village/Address</label>
                                                <input type="text" id="village" class="form-control" placeholder="Village">
                                                <input type="hidden" name="village_id" id="village_id">
                                        </div>


                                        </div>
                                        
                                    </section>

                                      <h3>Business Profile</h3>
                                     @include('members.partials.biz_profile_form')
                                </div>
                                </form>
                        </div>
                    </div>
                </div>
                <!-- /Row -->

        @endsection

    @section('scripts')

    @include('partials.general.datepicker')

    <!-- FORM WIZARD JS-->
    <script src="{{asset('assets/plugins/formwizard/jquery.smartWizard.js')}}"></script>
    <script src="{{asset('assets/plugins/formwizard/fromwizard.js')}}"></script>

    <!-- INTERNAl Jquery.steps js -->
    <script src="{{asset('assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>
    <script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script>
        $( function() {
            
            var year  = new Date().getFullYear();
            var month = new Date().getMonth();
            var day   = new Date().getDay();

            $( ".datepick" ).datepicker({
                maxDate: new Date(year, month+1, day),
            });
            
            $( ".dobdate" ).datepicker({
                maxDate: new Date(year-17, 1 - 1, day),
                changeYear: true
            });
            
        } );
    </script>

    <script>

    var previewImage = function(event) {
        var output = document.getElementById('preview');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
      };

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

   @include('partials.villages.autocomplete')
    

    @endsection
