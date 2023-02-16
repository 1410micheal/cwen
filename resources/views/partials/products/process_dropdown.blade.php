<select class="form-control" 
name="{{ $field ?? 'method_id' }}" id="{{ $field ?? 'method_id' }}">
    <option value="{{  $all_value ?? 0 }}">{{  $all_field ?? 'Select' }}</option>
    @foreach($methods as $row)
    <option {{ (@$selected && $selected == $row->id)?'selected':'' }} value="{{ $row->id }}">{{ $row->method_name }}</option>
    @endforeach
</select>