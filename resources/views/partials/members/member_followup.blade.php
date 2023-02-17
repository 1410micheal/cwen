<table class="table table-striped">
        <thead>
            <tr>
                <th>Date</th>
                @if(@$show_member)
                <th>Member Id</th>
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

            @include('partials.followups.table_row',['row'=>$row])

            @include('partials.followups.followup_details',['row'=>$row])

            @endforeach
        </tbody>

        
    </table>