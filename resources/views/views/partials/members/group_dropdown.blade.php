<select class="form-control select2" 
name="{{ $field ?? 'group_id' }}" id="{{ $field ?? 'group_id' }}">
    <option value="{{  $all_value ?? 0 }}">None</option>
    @foreach($groups as $row)
        <option {{ (@$selected && $selected == $row->id)?'selected':'' }} value="{{ $row->id }}">{{ $row->group_name }}</option>
    @endforeach
</select>