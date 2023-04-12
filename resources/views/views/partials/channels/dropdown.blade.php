<select class="form-control {{ $class ?? 'channels'}}"  multiple
name="{{ $field ?? 'channel_id' }}" id="{{ $field ?? 'channel_id' }}">
    <option value="{{  $all_value ?? 0 }}" disabled>{{  $all_field ?? 'Select' }}</option>
    @foreach($channels as $row)
    <option {{ (@$selected)?((in_array($row->id,@$selected))?'selected':''):'' }} value="{{ $row->id }}">{{ $row->channel_name }}</option>
    @endforeach
</select>