<!-- ROW-1 OPEN -->
<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            
           <h3 class="text-primary">Business Profiles</h3>
           @can('edit members')
           <a href="#add-business" data-bs-toggle="modal" class="btn btn-lg btn-outline-dark mt-2 col-lg-3 mb-2 d-print-none">
                       <i class="fa fa-plus"></i> Add New Business
            </a>
            @endcan
           <hr>
            <div class="pb-4 pt-1">
            @php
              $count =0;
            @endphp

           @foreach($businesses as $business)
           
            @php
                $count ++;
            @endphp
            <div class="row pt-4" style="border-bottom: 1px #ff7b40 solid;">

                <div class="col-lg-12">
                <strong class="text-primary">#{{ $count }}</strong> 
                <h4 class="text-dark">Business: <strong>{{ $business->business_name }}</strong></h4>
                </div>

                <div class="col-lg-4">
                <h5> No. of Employees:  <strong>{{ $business->no_of_employees }} Employees</strong></h5>
                <h5>Premises:   <strong>{{ $business->premise_ownership }}</strong></h5>
                <h5>Business Ownership: <strong>{{ $business->business_ownership }}</strong></h5>
                <h5>Dev't Skills: <strong>{{ ($business->has_biz_skills)?'Has developemnt skills':'No developemnt skills' }}</strong></h5>
                </div>

                <div class="col-lg-4  text-start border-bottom border-lg-0">
                    <h5>Type: <strong>{{ $business->biz_type->biz_type_name }}</strong></h5>
                    <h5>Regulators:<strong>{{$business->regulator_names}}</strong></h5>
                    <h5>Licenced:<strong>{{ ($business->is_licenced)?'YES':'NO'}}</strong></h5>
                </div>

                <div class="col-lg-4  text-start border-bottom border-lg-0">
                    <h5 class="text-primary">Business Address</h5>
                    <p><strong>{{ $business->address_detail}}</strong></p>
                </div>
            </div>
            @endforeach

            @if(count($channels)>0)

                <div class="row px-2 py-4">
                    <div class="col-lg-12"><h4 class="fw-bold">Distribution Channels</h4></div>
                    <ul class="list-group">
                        @foreach($channels as $channel)
                            <li>- {{$channel->channel->channel_name}}
                        @endforeach
                    </ul>
                </div>
                @endif

            </div>

        </div>
    </div>
</div>
<!-- COL-END -->
</div>
<!-- ROW-1 CLOSED -->

@include('members.partials.newbiz_modal')
