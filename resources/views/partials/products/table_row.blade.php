<tr class="border-bottom">
    <td class="text-left">{{$row->product_name}}</td>
    <td>{{ $row->type->type_name }}</td>
    <td>
        @foreach($row->packagings as $pack)
         {{ $pack->type->packaging_type_name }}
        @endforeach
    </td>
    <td>{{ ($row->is_registered_bran)?'Regsitered':'Not Registered' }}</td>
    <td>{{ ($row->is_unbs_certified)?'Certified':'Not Certified' }}</td>
    <td>{{ ($row->recycles_packagin)?'Recyclable':'Non-Recyclable' }}</td>
    <td>{{ $row->member->first_name." ".$row->member->first_name}}</td>
<tr>
