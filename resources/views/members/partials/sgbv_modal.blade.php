
<div class="modal" id="add-sgbv">
<div class="modal-dialog modal-lg">
    <div class="modal-content">

    <div class="modal-header">
        <h6 class="modal-title text-dark"> <i class="fa fa-plus"></i> Capture SGBV Record</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
    </div>

    <form action="{{ url('save-offence')}}" method="post" >

        <div class="modal-body">

        <div class="row">

          @csrf
            <input type="hidden" name="member_id" value="{{$member->id}}" />

            <div class="form-group col-lg-12">
                <label class="form-label">Offence Nature</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Offence Nature"  name="offence_nature" id="offence_nature" value="{{old('offence_nature')}}" required>
                    </span>
                </div>
            </div>

            <div class="form-group col-lg-4">
                <label class="form-label">Occurence  Date</label>
                <div class="input-group">
                    <input type="date" class="form-control" placeholder="Occurence Date"  name="occurence_date" id="occurence_date" value="{{old('occurence_date')}}" required>
                    </span>
                </div>
            </div>
            <div class="control-group form-group col-lg-4">
                <label class="form-label">Offence Type</label>
                <select name="offence_type" class="form-control required">
                    @foreach($offence_types as $type)
                        <option value="{{$type->id}}">{{$type->offence_type_name}}</option>
                    @endforeach
                </select>
                    <small class="text-muted">Type of Offence</small>
            </div>

            <div class="control-group form-group col-lg-4">
                <label class="form-label">Case Type</label>
                <select name="case_type" class="form-control required">
                        <option>New</option>
                        <option>Repeat</option>
                </select>
            </div>

            <div class="form-group col-lg-6">
                <label class="form-label">Survivor's Name</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Survivors' Name"  name="survivor" id="survivor" value="{{old('survivor')}}" required>
                    </span>
                </div>
            </div>

            <div class="form-group col-lg-6">
                <label class="form-label">Perpecurator</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Perpecurator's Name"  name="perpecurator" id="perpecurator" value="{{old('perpecurator')}}" required>
                    </span>
                </div>
            </div>

            <div class="control-group form-group col-lg-12">
                <label class="form-label">Services Offered</label>
                <select name="services[]" class="form-control select2Modal" multiple>
                    @foreach($services as $service)
                    <option value="{{$service->id}}">{{$service->service_name}}</option>
                    @endforeach
                </select>
                    <small class="text-muted">Services offered</small>
            </div>

            <div class="form-group col-lg-12">
                <label class="form-label">Effects on business</label>
                <div class="input-group">
                    <textarea class="form-control" placeholder="Effects on business"  name="effects_on_biz" id="effects_on_biz"  required>{{old('effects_on_biz')}}</textarea>
                </div>
            </div>

        </div>

   
</div>
<div class="modal-footer">
    
    <button type="submit" class="btn btn-success pl-5 pr-5">
        <i class="icon-floppy-disk  mr-2"></i>
        Submit
    </button>
</div>
    </form>
</div>
</div>
</div>
</div>