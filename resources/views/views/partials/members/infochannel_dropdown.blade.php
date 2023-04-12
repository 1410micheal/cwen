<select class="form-control select2" 
name="{{ $field ?? 'infochannel_id' }}" id="{{ $field ?? 'infochannel_id' }}">
    <option value="{{  $all_value ?? 0 }}" disabled>None</option>
    @foreach($infochannels as $row)
        <option {{ (@$selected && $selected == $row->id)?'selected':'' }} value="{{ $row->id }}">{{ $row->infochannel_name }}</option>
    @endforeach
</select>