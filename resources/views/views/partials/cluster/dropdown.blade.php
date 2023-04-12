<select class="form-control" 
name="{{ $field ?? 'cluster_id' }}" id="{{ $field ?? 'cluster_id' }}">
    <option value="{{  $all_value ?? 0 }}">{{  $all_field ?? 'Select' }}</option>
    @foreach($clusters as $row)
    <option {{ (@$selected && $selected == $row->id)?'selected':'' }} value="{{ $row->id }}">{{ $row->cluster_name }}</option>
    @endforeach
</select>