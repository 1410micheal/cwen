@extends('layouts.pdf')

    @section('styles')

    @endsection

 @section('content')
<table id="data-table"
    class="table table-bordered text-nowrap mb-0">
    <thead class="border-top">
        <tr>
            <th
                class="bg-transparent border-bottom-0">
                Date </th>
                <th
                class="bg-transparent border-bottom-0">
                Member</th>
                <th colspan="2"
                class="bg-transparent border-bottom-0">
                Details</th>
        </tr>
    </thead>
    <tbody>

        @foreach($followups as $row)
                
            @include('partials.followups.table_row',['row'=>$row])

        @endforeach

        </tbody>
    </table>

  @endsection