<select class="form-control select2Modal districts" 
name="{{ $field ?? 'district_id' }}" id="{{ $field ?? 'district_id' }}">
    <option value="{{  $all_value ?? 0 }}">{{  $all_field ?? 'Select' }}</option>
    @foreach($districts as $row)
    <option {{ (@$selected && $selected == $row->id)?'selected':'' }} value="{{ $row->id }}">{{ $row->district_name }}</option>
    @endforeach
</select>