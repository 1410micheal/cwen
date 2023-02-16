@extends('layouts.pdf')

    @section('styles')

    @endsection

 @section('content')
<table id="data-table"
    class="table table-bordered text-nowrap mb-0">
    <thead class="border-top">
        <tr>
        <th class="bg-transparent border-bottom-0">Member Id</th>  
        <th class="bg-transparent border-bottom-0">Member</th>
        <th class="bg-transparent border-bottom-0">Product Name</th>
        <th class="bg-transparent border-bottom-0">Type</th>
        <th class="bg-transparent border-bottom-0">Packaging</th>
        <th class="bg-transparent border-bottom-0">URSB Registration</th>
        <th class="bg-transparent border-bottom-0">UNBS Certification</th>
        <th class="bg-transparent border-bottom-0">Recylable Packaging</th>
        <th class="bg-transparent border-bottom-0">Recyling Practice</th>
        </tr>
    </thead>
    <tbody>

        @foreach($products as $row)
            @include('partials.products.table_row',['row'=>$row])
        @endforeach

        </tbody>
    </table>

  @endsection