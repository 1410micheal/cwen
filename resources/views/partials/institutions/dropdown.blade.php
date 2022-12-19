<select class="form-control form-select" 
name="{{ $field ?? 'institution_id' }}" id="{{ $field ?? 'institution_id' }}">
    <option value="{{  $all_value ?? 0 }}">{{  $all_field ?? 'Select' }}</option>
    @foreach($institutions as $institution)
    <option {{ (@$selected && $selected == $institution->id)?'selected':'' }} value="{{ $institution->id }}">{{ $institution->inst_name }}</option>
    @endforeach
</select>