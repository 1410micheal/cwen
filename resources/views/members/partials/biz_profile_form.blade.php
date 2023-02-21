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
                                                       <option value="" selected disabled>Select</option>
                                                    @foreach($business_types as $type)
                                                        <option {{ (old('business_type')==$type->id)?'selected':''}} value="{{$type->id}}">{{$type->biz_type_name}}</option>
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
                                                        <option value="" selected disabled>Select</option>
                                                        <option value="1" {{ (old('biz_ownership') == '1')?"selected":"" }}>Member Owned</option>
                                                        <option value="0" {{ (old('biz_ownership') == '0')?"selected":"" }}>Member Employed</option>
                                                </select>
                                                 <small class="text-muted">Does member own the business?</small>
                                            </div>
                                       </div>

                                       <div class="col-lg-6">
                                            <div class="control-group form-group">
                                                <label class="form-label">Premise Ownership</label>
                                                <select name="prem_ownership" class="form-control required">
                                                        <option value="" selected disabled>Select</option>
                                                        <option value="1" {{ (old('prem_ownership') == '1')?"selected":"" }}>Owned</option>
                                                        <option value="0"{{ (old('prem_ownership') == '0')?"selected":"" }}>Rented</option>
                                                </select>
                                                 <small class="text-muted">Does member own the business premises?</small>
                                            </div>
                                       </div>
                                       
                                       <div class="col-lg-4">
                                        <div class="form-group col-lg-12 modalselect">
                                                <label class="form-label">Cascade of Trainings Attended</label>
                                                @php
                                                 $selectd_tran = old('trainings');
                                                @endphp
                                                @include('partials.trainings.dropdown',['field'=>'trainings[]','selected'=>$selectd_tran])
                                                <small class="text-muted">Select trainings attended</small>
                                        </div>
                                       </div>

                                       <div class="col-lg-4">
                                            <div class="control-group form-group">
                                                <label class="form-label">Licenced</label>
                                                <select name="is_licenced" class="form-control" required>
                                                        <option value="" selected disabled>Select</option>
                                                        <option value="1" {{ (old('is_licenced') == '1')?"selected":"" }}>Yes</option>
                                                        <option value="0" {{ (old('is_licenced') == '0')?"selected":"" }}>No</option>
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
                                                        <option {{ (old('regulator')==$reg->id)?'selected':'' }} value="{{$reg->id}}">{{$reg->regulator_name}}</option>
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

                                       <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Service Required</label>
                                                @php
                                                 $selected_svc = old('services_expected');
                                                @endphp

                                                @include('partials.services.dropdown',['class'=>'select2','field'=>'services_expected[]','selected'=>$selected_svc])
                                            </div>
                                       </div>

                                       <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Distribution Channels</label>
                                                @php
                                                 $selected_ch = old('distribution_channels');
                                                @endphp
                                                @include('partials.channels.dropdown',['class'=>'select2','field'=>'distribution_channels[]','selected'=>$selected_ch])
                                            </div>
                                       </div>
                                       
                                        
                                    </section>
                                    