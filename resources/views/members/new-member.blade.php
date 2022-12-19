@extends('layouts.app')

    @section('styles')

    @endsection

        @section('content')

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Create Standing Order</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">New Debit Order</li>
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
                                   <i class="fa fa-address-card-o text-danger mr-2"></i> Complete Debit Order Details
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('save-order')}}" method="post" id="policywizard">

                                    @csrf

                                    <h3>Customer Information</h3>
                                    <section>
                                        <div class="control-group form-group">
                                            <label class="form-label">Policy Number</label>
                                            <input type="text" name="policy_number" class="form-control required" placeholder="Policy Number" id="policy" onblur="policyChanged($(this).val())">
                                        </div>

                                        <div class="policy-info"></div>
                                        
                                    </section>

                                      <h3>Debit Order Information</h3>
                                    <section class="row">
                                        <div class="col-lg-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">Amount</label>
                                                <input type="number" class="form-control required amount" placeholder="Amount" id="amount" name="amount">
                                            </div>

                                            <div class="control-group form-group">
                                                <label class="form-label">Execution Day</label>
                                                <select name="execution_date" class="form-control required">
                                                    @for($i=1;$i<31;$i++)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                                </select>
                                                 <small>Day of the month</small>
                                            </div>
                                       </div>
                                       <div class="col-lg-6">
                                             <div class="form-group">
                                                <label class="form-label">Bank</label>
                                                @include('partials.institutions.dropdown')
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Account number</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Account Number" onblur="accountChanged($(this).val())" name="account_no" id="accountNo">
                                                    </span>
                                                </div>
                                            </div>
                                       </div>
                                       
                                       <div class="col-lg-12 account-info"></div>
                                        
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

        var validatedPolicy  = false;
        var validatedAccount = false;
        var policyNum = null;
        var accountNum = null;

        

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

                    if ($('#policy').val()){

                    console.log('check1',validatedPolicy);

                    if(!validatedPolicy)
                      validatePolicy($('#policy').val());

                      return validatedPolicy;

                    }else{

                        if($('#policy').val()){
                           return true;
                        }else{
                            showAlert('Invalid Data','Please provide a policy number','warning');
                        }

                    }
                    
                }
                // Step 2 form validation
                if (currentIndex === 1) {
                    var amount = $('#amount').val();
                    var institution_id = $('#institution_id').find("option:selected").val();

                    console.log('Instituion Id',institution_id);
                    
                    if (amount>0) {
                        return true;
                    } else {
                        //
                        showAlert('Invalid Data','Please complete all fields','warning');
                    }
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


function policyChanged(policy_no){

        if(policy_no !== policyNum && policy_no!=="")
        validatePolicy(policy_no);

        return;
  }
//VALDIATE POLICY

function validatePolicy(policyNumber){

        policyNum = policyNumber;

        showLoader('Checking Policy Details...');

            $.ajax({
                method:'get',
                url:`{{ url('validate-policy'); }}?policy_number=${policyNumber}`,
                success:function(response){
                    
                    console.log(response);

                    let resp = JSON.parse(response);

                    hideLoader();
                    if(resp.success){

                      $('.policy-info').html(resp.html);
                      $('.amount').val(resp.policy.n_contribution);
                      validatedPolicy = true;

                    }else{
                        showAlert($('.policy-info').html(response.resp));
                    }

                }
            });
        }

    function accountChanged(acc_no){

        if(acc_no !== accountNum && acc_no!=="")
        validateAccount(acc_no);

        return;
     }

    function validateAccount(accountNumber){

        accountNum = accountNumber;

       showLoader('Checking Account Details...');

       $.ajax({
        method:'get',
        url:`{{ url('validate-account'); }}?account_no=${accountNumber}`,
        success:function(response){
            
            console.log(response);

            let resp = JSON.parse(response);

            hideLoader();
            if(resp){

              $('.account-info').html(resp.html);
              validatedAccount = true;
            }

        }
    });
}

    </script>

    @endsection
