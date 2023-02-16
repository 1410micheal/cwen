<tr class="border-bottom">
    
    <td>{{ @$row->member->unique_id}}</td>
    <td>{{ @$row->member->first_name." ".@$row->member->first_name}}</td>
    <td class="text-left">{{$row->product_name}}</td>
    <td>{{ $row->type->type_name }}</td>
    <td>
         {{ $row->packaging->packaging_type_name }}
    </td>
    <td>{{ ($row->is_registered_brand)?'Regsitered':'Not Registered' }}</td>
    <td>{{ ($row->is_unbs_certified)?'Certified':'Not Certified' }}</td>
    <td>{{ ($row->recycles_packagin)?'Recyclable':'Non-Recyclable' }}</td>
    <td>{{ ($row->actively_recycles)?'Actively Recycles':'Doesn't Recycle' }}</td>
<tr>
