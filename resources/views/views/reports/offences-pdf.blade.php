@extends('layouts.pdf')

    @section('styles')

    @endsection

 @section('content')
<table id="data-table"
    class="table table-bordered text-nowrap mb-0">
    <thead class="border-top">
        <tr>
        <th class="bg-transparent border-bottom-0">Date</th>
        <th class="bg-transparent border-bottom-0">Member</th>
        <th class="bg-transparent border-bottom-0">Nature</th>
        <th class="bg-transparent border-bottom-0">Type</th>
        <th class="bg-transparent border-bottom-0">Status</th>
        <th class="bg-transparent border-bottom-0">Effects</th>
        <th class="bg-transparent border-bottom-0">Services Given</th>
        <th class="bg-transparent border-bottom-0">Perpecurator</th>
        </tr>
    </thead>
    <tbody>

        @foreach($offences as $row)
            @include('partials.offences.table_row',['row'=>$row])
        @endforeach

        </tbody>
    </table>

  @endsection