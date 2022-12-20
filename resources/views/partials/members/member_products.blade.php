<table class="table table-striped">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Type</th>
            <th>Registration</th>
            <th>UNBS Certification</th>
            <th>Packaging</th>
            <th>Eco Packaging</th>
            <th>Recycles Packaging</th>
        </tr>
    </thead>
    <tbody>
        @foreach($member->products as $row)
        <tr>
            <td>{{ $row->product_name }}</td>
            <td>{{ $row->type->type_name }}</td>
            <td>{{ ($row->is_registered_brand)?'Registered':'Not registered' }}</td>
            <td>{{ ($row->is_unbs_certified)?'Certified':'Not Certified' }}</td>
            
            <td>
            @foreach($row->packagings as $packaging)
                <span class="badge bg-success text-white badge-round-pill">
                    {{ $packaging->type->packaging_type_name }}
                </span>
            @endforeach
        </td>
        <td>{{ ($row->eco_packaging_trained)?'Eco Trained':'Not Trained' }}</td>
        <td>{{ ($row->recycles_packagin)?'Recycles':'Not Recyclable' }}</td>
            
        </tr>
        @endforeach

        
    </tbody>

    
</table>