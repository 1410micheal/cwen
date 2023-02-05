<tr class="border-bottom">
    <td class="text-center">
        <div class="mt-0 mt-sm-2 d-block">
            <h6 class="mb-0 fs-14 fw-semibold">
                @include('partials.members.row_links',['row'=>$row,'label'=>'#'.$row->unique_id])
            </h6>
        </div>
    </td>

    <td>{{ $row->date_registered }}</td>
    <td>
        <span class="fw-semibold mt-sm-2 d-block">{{ $row->first_name }} {{ $row->middle_name }} {{ $row->last_name }}</span>
    </td>
    <td>{{ $row->phone_no }}</td>
    <td>{{ $row->gender }}</td>
    <td>{{ $row->marital_status }}</td>
    <td>{{ $row->hiv_status }}</td>
    <td>{{ $row->education_level }}</td>
    @if(@$export!==1)
    <td>
        <div class="g-2">
            
            @include('partials.members.row_links',['row'=>$row])

        </div>
    </td>
    @endif
<tr>
