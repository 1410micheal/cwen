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
                                                        <option value="" selected disabled>Select</option>
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
                                                        <option value="" selected disabled>Select</option>
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
                                                        <option value="" selected disabled>Select</option>
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
                                                        <option value="" selected disabled>Select</option>
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

                                       <div class="col-lg-12">
                                            
                                            <div class="form-group">
                                                <label class="form-label">Service Required</label>
                                                @include('partials.services.dropdown',['class'=>'select2','field'=>'services_expected[]'])
                                            </div>
                                       </div>
                                       
                                        
                                    </section>
                                    