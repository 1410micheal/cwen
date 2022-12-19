<select class="form-control form-select" 
name="{{ $field ?? 'member_category_id' }}" id="{{ $field ?? 'member_category_id' }}">
    <option value="{{  $all_value ?? 0 }}">{{  $all_field ?? 'Select' }}</option>
    @foreach($categories as $row)
    <option {{ (@$selected && $selected == $row->id)?'selected':'' }} value="{{ $row->id }}">{{ $row->category_name }}</option>
    @endforeach
</select>