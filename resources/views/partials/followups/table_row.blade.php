<tr class="border-bottom">
    <td class="text-center">
        <div class="mt-0 mt-sm-2 d-block">
            <h6 class="mb-0 fs-14 fw-semibold">
                {{$row->followup_date}}
            </h6>
        </div>
    </td>
    <td><span
            class="fw-semibold mt-sm-2 d-block">{{ $row->member->first_name }} {{ $row->member->middle_name }} {{ $row->member->last_name }}</span>
    </td>
    <td>{{ $row->details }}</td>
    
<tr>
