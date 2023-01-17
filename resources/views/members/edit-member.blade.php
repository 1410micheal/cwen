@extends('layouts.app')

    @section('styles')

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    @endsection

        @section('content')

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Update Member</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update Member</li>
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

                                    <input type="hidden" value="{{ $member->unique_id }}" name="ref" />

                                    <h3>Member Information</h3>
                                    <section>
                                        <div class="row">
                                        <div class="control-group form-group col-lg-4">
                                            <label class="form-label">First Name</label>
                                            <input type="text" name="first_name" class="form-control required" value="{{ @$member->first_name }}" placeholder="First Name" id="first_name" required>
                                        </div>

                                        <div class="control-group form-group col-lg-4">
                                            <label class="form-label">Middle Name</label>
                                            <input type="text" name="middle_name" class="form-control required" placeholder="Middle Name" value="{{@$member->middle_name}}" id="middle_name">
                                        </div>

                                        <div class="control-group form-group col-lg-4">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" name="last_name" class="form-control required" placeholder="Last Name" id="last_name" value="{{@$member->last_name}}" required>
                                        </div>

                                        </div>

                                        <div class="row">
                                        <div class="control-group form-group col-lg-4">
                                            <label class="form-label">Phone Number</label>
                                            <input type="tel" name="phone_no" class="form-control required" value="{{@$member->phone_no}}" placeholder="Phone No" id="phone_no">
                                        </div>

                                        <div class="control-group form-group col-lg-4">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control required" placeholder="Email" value="{{@$member->email}}" id="email">
                                        </div>

                                        <div class="control-group form-group col-lg-4">
                                            <label class="form-label">National ID No.</label>
                                            <input type="text" name="nin" class="form-control" placeholder="National ID" id="nin" value="{{@$member->nin}}">
                                        </div>

                                        </div>

                                        <div class="row">

                                       
                                        <div class="control-group form-group col-lg-3">
                                            <label class="form-label">Date of Membership</label>
                                            <input type="date" name="date_registered" class="form-control" placeholder="Date of innitial Membership" id="date_registered" value="{{@$member->date_registered}}" required>
                                        </div>

                                        <div class="control-group form-group col-lg-3">
                                            <label class="form-label">Date of Birth</label>
                                            <input type="date" name="dob" class="form-control required" placeholder="Date of birth" id="dob" value="{{@$member->dob}}" required>
                                        </div>

                                        <div class="form-group col-lg-3">
                                                <label class="form-label">Member Category</label>
                                                @include('partials.categories.dropdown',['selected'=>@$member->member_category_id])
                                        </div>

                                        <div class="form-group col-lg-3">
                                                <label class="form-label">Gender</label>
                                                <select name="gender" class="form-control">
                                                    <option {{ (@$member->gender=="Male")?"selected":""}}>Male</option>
                                                    <option {{ (@$member->gender=="Female")?"selected":""}}>Female</option>
                                                </select>
                                        </div>

                                        </div>

                                        <div class="row">
                                        
                                        
                                        <div class="form-group col-lg-3">
                                                <label class="form-label">HIV Status</label>
                                                <select name="hiv_status" class="form-control">
                                                    <option {{ (@$member->hiv_status=="Negative")?"selected":""}}>Negative</option>
                                                    <option {{ (@$member->hiv_status=="Positive")?"selected":""}}>Positive</option>
                                                </select>
                                        </div>

                                        <div class="form-group col-lg-3">
                                                <label class="form-label">Education Level</label>
                                                <select name="education" class="form-control">
                                                    <option {{ (@$member->education_level=="Degree")?"selected":""}}>Degree</option>
                                                    <option {{ (@$member->education_level=="High School")?"selected":""}} >High School</option>
                                                    <option {{ (@$member->education_level=="Secondary")?"selected":""}}>Secondary</option>
                                                    <option {{ (@$member->education_level=="Primary")?"selected":""}}>Primary</option>
                                                    <option {{ (@$member->education_level=="None")?"selected":""}}>None</option>
                                                </select>
                                        </div>

                                        
                                        <div class="form-group col-lg-3">
                                                <label class="form-label">Marital Status</label>
                                                <select name="marital_status" class="form-control">
                                                    <option {{ (@$member->marital_status=="Married")?"selected":""}}>Married</option>
                                                    <option {{ (@$member->marital_status=="Single")?"selected":""}}>Single</option>
                                                    <option {{ (@$member->marital_status=="Divorced")?"selected":""}}>Divorced</option>
                                                </select>
                                        </div>

                                        <div class="form-group col-lg-3">
                                                <label class="form-label">Village/Address</label>
                                                <input type="text" id="village" class="form-control" placeholder="Village" value="{{ @$member->village->village_name }}">
                                                <input type="hidden" name="village_id" id="village_id" value="{{ @$member->village->id }}">
                                        </div>


                                        </div>
                                        
                                    </section>

                                      <h3>Business Profile</h3>
                                    <section class="row">

                                       <div class="col-lg-12">
                                            
                                            <div class="form-group">
                                                <label class="form-label">Business Name</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Business Name"  name="business_name" id="business_name" value="{{ @$business->business_name }}" required>
                                                    </span>
                                                </div>
                                            </div>
                                       </div>
                                       <div class="col-lg-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">Business Type</label>
                                                <select name="business_type" class="form-control required">
                                                    @foreach($business_types as $type)
                                                        <option  {{ (@$business->business_type_id == $type->id)?"selected":"" }} value="{{$type->id}}">{{$type->biz_type_name}}</option>
                                                    @endforeach
                                                </select>
                                                 <small class="text-muted">Type of Business</small>
                                            </div>
                                       </div>
                                       <div class="col-lg-6">
                                            
                                            <div class="form-group">
                                                <label class="form-label">No. of Employees</label>
                                                <div class="input-group">
                                                    <input type="number" min="1" class="form-control" placeholder="No. of Employees"  name="employee_count" id="employee_count" value="{{ @$business->no_of_employees }}" required>
                                                    </span>
                                                </div>
                                            </div>
                                       </div>
                                       <div class="col-lg-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">Ownership</label>
                                                <select name="biz_ownership" class="form-control required">
                                                        <option value="1" {{ (@$business->is_biz_owner == 1)?"selected":"" }} >Member Owned</option>
                                                        <option value="0" {{ (@$business->is_biz_owner == 0)?"selected":"" }}>Member Employed</option>
                                                </select>
                                                 <small class="text-muted">Does member own the business?</small>
                                            </div>
                                       </div>

                                       <div class="col-lg-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">Premise Ownership</label>
                                                <select name="prem_ownership" class="form-control required">
                                                        <option value="1" {{ (@$business->is_premise_owner == 1)?"selected":"" }}>Owned</option>
                                                        <option value="0" {{ (@$business->is_premise_owner == 0)?"selected":"" }}>Rented</option>
                                                </select>
                                                 <small class="text-muted">Does member own the business premises?</small>
                                            </div>
                                       </div>
                                       <div class="col-lg-4">
                                            <div class="control-group form-group">
                                                <label class="form-label">Received Business Dev't Training</label>
                                                <select name="has_biz_skills" class="form-control required">
                                                        <option value="1" {{ (@$business->has_biz_skills == 1)?"selected":"" }}>Yes</option>
                                                        <option value="0" {{ (@$business->has_biz_skills == 0)?"selected":"" }}>No</option>
                                                </select>
                                                 <small class="text-muted">Member trained in business development?</small>
                                            </div>
                                       </div>

                                       <div class="col-lg-4">
                                            <div class="control-group form-group">
                                                <label class="form-label">Licenced</label>
                                                <select name="is_licenced" class="form-control" required>
                                                        <option value="1" {{ (@$business->is_licenced == 1)?"selected":"" }}>Yes</option>
                                                        <option value="0" {{ (@$business->is_licenced == 0)?"selected":"" }}>No</option>
                                                </select>
                                                 <small class="text-muted">Is business licenced?</small>
                                            </div>
                                       </div>

                                        <div class="col-lg-4">
                                            <div class="control-group form-group">
                                                <label class="form-label">Regulating Authority {{ @$business->regulator_id}}</label>
                                                <select name="regulator" class="form-control" required>
                                                    <option value="" disabled selected>Select</option>
                                                   @foreach($regulators as $reg)
                                                        <option {{ (@$business->regulator_id == $reg->id)?"selected":"" }} value="{{$reg->id}}">{{$reg->regulator_name}}</option>
                                                    @endforeach
                                                </select>
                                                 <small class="text-muted">Government Regulator</small>
                                            </div>
                                       </div>
                                       
                                       <div class="col-lg-12">
                                            
                                            <div class="form-group">
                                                <label class="form-label">Business Address</label>
                                                <div class="input-group">
                                                    <textarea class="form-control" placeholder="Business Address"  name="address" id="address">{{ @$business->address_detail }}</textarea>
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
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

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


    $('#village').autocomplete({
            type: "GET",
            minLength: 3,
            autoFocus:true,
            classes: {
                "ui-autocomplete": "highlight"
            },
            source : function (request, response) 
            {                         
                var source_url = "<?php echo route('villages'); ?>?q=" + $("#village").val();

                $.ajax({
                    url: source_url,
                    dataType: "json",
                    data: request,
                    success: function (data) { 
                        
                        var datas = data;

                        console.log(datas);

                        var list  = [];

                        datas.forEach(function(item){
                            let list_item = {
                                label:item.village_name+" "+item.district_name,
                                value:item.village_name+" "+item.district_name,
                                row_id:item.id
                            }

                            list.push(list_item);
                        });

                        response(list);
                     },
                    error : function (a,b,c) { console.log(a)}
                    });
            },                
            select: function (event, ui) { 
                $('#village_id').val(ui.item.row_id); 
            }               
        });


    </script>

    @endsection
