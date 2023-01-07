<div class="py-3">
<form action="{{ url('save-followup') }}" method="POST" class="feeForm00" enctype="multipart/form-data">
    @csrf    
    <input type="hidden" name="member_id" value="{{$member->id}}" />
    <div class="row">
    <div class="control-group form-group col-lg-5">
        <label class="form-label">Followup Date</label>
        <input type="text" name="date" class="form-control fc-datepicker" value="{{old('date')}}" placeholder="Followup Date" id="date" required>
    </div>


    <div class="form-group col-lg-5">
            <label class="form-label">Services Rendered</label>
            <select name="services[]" class="select2 form-select" multiple="multiple">
                @foreach($services as $service)
                <option value="{{$service->id}}">{{$service->service_name}}</option>
                @endforeach
            </select>
            <small class="text-muted">Select services offered during visit</small>
    </div>
    <div class="form-group col-lg-2 " style="padding-top: 30px;">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>

    </div>


    </form>
</div>
