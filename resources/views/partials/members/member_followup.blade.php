<table class="table table-striped">
        <thead>
            <tr>
                <th>Date</th>
                <th>Services</th>
            </tr>
        </thead>
        <tbody>
            @foreach($member->visits as $row)
            <tr>
                <td>{{ $row->followup_date }}</td>
                <td>
                <ul class="list-group">
                @foreach($row->followup_services as $service)
                    <li>{{ $service->service->service_name}}</li>
                @endforeach
                </ul>
                </td>
            </tr>
            @endforeach

            
        </tbody>

        
    </table>