
<a href="{{url('member-details')}}?ref={{$row->unique_id}}" class="btn text-primary btn-sm"
    data-bs-toggle="tooltip"
    data-bs-original-title="Details">
    @if(@$label) {{ @$label }} @else<span class="fe fe-link fs-14"></span>@endif</a>
</a>
   
    