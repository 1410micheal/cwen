<tr class="border-bottom">
    <td class="text-left">{{$row->occurence_date}}</td>
    <td>{{ $row->offence_nature }}</td>
    <td> {{ $row->type->offence_type_name }} </td>
    <td>{{ $row->case_type}}</td>
    <td>{{ $row->effects_on_biz }}</td>
    
    @php
        $services = "";
        $i=0;
        foreach($row->services as $service):
            $services = $service->service_name.($i>0 && $i<(count($services)))?",":"";
            $i++;
        endforeach;
    @endphp

    <td>{{ $services }}</td>
    <td>{{ $row->perpecurator }}</td>

<tr>
