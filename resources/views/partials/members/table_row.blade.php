<tr class="border-bottom">
    <td class="fw-semibold">
                @include('partials.members.row_links',['row'=>$row,'label'=>'#'.$row->unique_id])
    </td>

    <td>{{ $row->date_registered }}</td>
    <td>
        <span class="fw-semibold mt-sm-2 d-block">{{ $row->first_name }} {{ $row->middle_name }} {{ $row->last_name }}</span>
    </td>
    <td>{{ $row->phone_no }}</td>
    <td>{{ $row->gender }}</td>
    <td>{{ $row->marital_status }}</td>
    <td>{{ $row->hiv_status }}</td>
    <td>{{ $row->village->village_name }}, {{ $row->village->district->district_name }}</td>
    <td>{{ $row->education_level }}</td>
    <td>{{ ($row->group)?$row->group->group_name:'N/A' }}</td>
    <td>{{ ($row->cluster)?$row->cluster->cluster_name:'N/A' }}</td>
    @if(@$export!==1)
    <td>
        <div class="g-2">
            
            @include('partials.members.row_links',['row'=>$row])

        </div>
    </td>
    @endif
<tr>
