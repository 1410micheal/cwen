@extends('layouts.pdf')
@section('content')

<table id="data-table"
class="table table-bordered text-nowrap mb-0">
<thead class="border-top">
<tr>
    <th class="bg-transparent border-bottom-0"
        style="width: 5%;">Unique Id</th>
    <th
        class="bg-transparent border-bottom-0">
        Date Registered</th>
    <th
    class="bg-transparent border-bottom-0">
    Member Name</th>
    <th
    class="bg-transparent border-bottom-0">
    Gender</th>
    <th class="bg-transparent border-bottom-0"
        style="width: 10%;">Marital Status</th>
    <th class="bg-transparent border-bottom-0"
        style="width: 10%;">HIV Status</th>
    <th class="bg-transparent border-bottom-0"
    style="width: 10%;">Education</th>
</tr>
</thead>
<tbody>
    @foreach($members as $row)
        @include('partials.members.table_row',['member'=>$row,'export'=>1])
    @endforeach
</tbody>
</table>

@endsection
				