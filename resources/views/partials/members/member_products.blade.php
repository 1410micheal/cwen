<table class="table table-striped">
    @include('partials.products.table_header')
    <tbody>
        @foreach($member->products as $row)
            @include('partials.products.table_row',['row'=>$row])
        @endforeach

        
    </tbody>

    
</table>