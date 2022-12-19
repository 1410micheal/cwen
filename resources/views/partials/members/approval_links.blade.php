
@if(!$row->internal_approved && !$row->institution_approved)
    <a href="{{url('approve')}}?ref={{$row->order_ref}}" class="btn btn-success"
        data-bs-toggle="tooltip"
        data-bs-original-title="Approve and Forward to Bank">
        Approve and Forward to Bank
    </a>
@endif

@if($row->internal_approved && !$row->institution_approved)
<a href="{{url('bank-approve')}}?ref={{$row->order_ref}}" class="btn btn-success"
        data-bs-toggle="tooltip"
        data-bs-original-title="Approve and Schedule">Approve and Schedule</a>
@endif

