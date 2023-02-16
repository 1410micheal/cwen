<select class="form-control {{ $class ?? 'services'}}"  multiple
name="{{ $field ?? 'service_id' }}" id="{{ $field ?? 'service_id' }}">
    <option value="{{  $all_value ?? 0 }}" disabled>{{  $all_field ?? 'Select' }}</option>
    @foreach($services as $row)
    <option {{ (@$selected && $selected == $row->id)?'selected':'' }} value="{{ $row->id }}">{{ $row->service_name }}</option>
    @endforeach
</select>