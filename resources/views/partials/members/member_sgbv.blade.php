<table class="table table-striped">
        <thead>
            <tr>
                <th>Date</th>
                <th>Nature</th>
                <!-- <th>Type</th> -->
                <th>Services</th>
            </tr>
        </thead>
        <tbody>
            @foreach($member->offences as $row)
            <tr>
                <td>{{ $row->occurence_date }}</td>
                <td>{{ $row->offence_nature }}</td>
                {{--<td>{{ $row->case_type->offence_type_name }}</td> --}}
                <td>
                <ul class="list-group">
                @foreach($row->services as $service)
                    <li>{{ $service->service->service_name}}</li>
                @endforeach
                </ul>
                </td>
            </tr>
            @endforeach

            
        </tbody>

        
    </table>