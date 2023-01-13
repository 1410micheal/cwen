<select class="form-control select2" 
name="{{ $field ?? 'village_id' }}" id="{{ $field ?? 'village_id' }}">
    <option value="{{  $all_value ?? 0 }}">{{  $all_field ?? 'Select' }}</option>
    @foreach($villages as $row)
    <option {{ (@$selected && $selected == $row->id)?'selected':'' }} value="{{ $row->id }}">{{ $row->village_name .", ".$row->district_name }}</option>
    @endforeach
</select>