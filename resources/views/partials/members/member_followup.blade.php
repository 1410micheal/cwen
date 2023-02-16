<table class="table table-striped">
        <thead>
            <tr>
                <th>Date</th>
                @if(@$show_member)
                <th>Member</th>
                @endif
                <th>Stock on shelf</th>
                <th>Sales Volume</th>
                <th>Profit Margin</th>
                <th>Employee Count</th>
                <th>URSB Registration</th>
                <th>URSB Name Reservation</th>
                <th>UNBS Certification</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rows as $row)
            <tr>
                <td>{{ $row->followup_date }}</td>
                @if(@$show_member)
                <td>{{ $row->member->first_name." ".$row->member->last_name}}</td>
                @endif
                <td>{{ number_format($row->products_on_shelf) }}</td>
                <td>{{ number_format($row->sales_volume) }}</td>
                <td>{{ $row->profit_margin }} @if($row->profit_margin>0) % @endif</td>
                <td>{{ number_format($row->employ_count) }}</td>
                <td>{{ $row->ursb_registration }}</td>
                <td>{{ $row->ursb_name_reservation }}</td>
                <td>{{ $row->unbs_certification }}</td>
                <td><a href="#folllowup{{$row->id}}" data-bs-toggle="modal">Details</a></td>
            </tr>

            @include('partials.followups.followup_details',['row'=>$row])

            @endforeach
        </tbody>

        
    </table>