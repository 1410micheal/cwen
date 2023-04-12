<select class="form-control" 
name="{{ $field ?? 'type_id' }}" id="{{ $field ?? 'type_id' }}">
    <option value="{{  $all_value ?? 0 }}">{{  $all_field ?? 'Select' }}</option>
    @foreach($types as $row)
    <option {{ (@$selected && $selected == $row->id)?'selected':'' }} value="{{ $row->id }}">{{ $row->offence_type_name }}</option>
    @endforeach
</select>