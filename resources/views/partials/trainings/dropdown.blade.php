<select class="form-control trainings"  multiple
name="{{ $field ?? 'training_id' }}" id="{{ $field ?? 'training_id' }}">
    <option value="{{  $all_value ?? 0 }}" disabled >{{  $all_field ?? 'Select' }}</option>
    @foreach($trainings as $row)
    <option {{ (@$selected && $selected == $row->id)?'selected':'' }} value="{{ $row->id }}">{{ $row->training_name }}</option>
    @endforeach
</select>