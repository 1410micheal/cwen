
<div class="modal" id="folllowup{{$row->id}}">
<div class="modal-dialog modal-xl">
    <div class="modal-content">

<div class="modal-header">
<h6 class="modal-title text-dark">Followup Details</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body">

<div class="row">

<div class="col-lg-3">
    <label class="fw-bold">Followup Date</label>
    <div class="form-group">{{ $row->followup_date }}</div>
</div>

<div class="col-lg-3">
    <label class="fw-bold">Products On Shelf</label>
    <div class="form-group">{{ number_format($row->products_on_shelf) }}</div>
</div>

<div class="col-lg-3">
    <label class="fw-bold">Sales Volume</label>
    <div class="form-group">{{ number_format($row->sales_volume) }}</div>
</div>

<div class="col-lg-3">
    <label class="fw-bold">Profit Margin</label>
    <div class="form-group">{{ $row->profit_margin }}%</div>
</div>

<div class="col-lg-3">
    <label class="fw-bold">No. of Employees</label>
    <div class="form-group">{{ number_format($row->employ_count) }}</div>
</div>

<div class="col-lg-3">
    <label class="fw-bold">URSB Registration</label>
    <div class="form-group">{{ $row->ursb_registration }}</div>
</div>

<div class="col-lg-3">
    <label class="fw-bold">URSB Name Reservation</label>
    <div class="form-group">{{ $row->ursb_name_reservation }}</div>
</div>

<div class="col-lg-3">
    <label class="fw-bold">UNBS Certification</label>
    <div class="form-group">{{ $row->unbs_certification }}</div>
</div>

<div class="col-lg-3">
    <label class="fw-bold">Recycling Method</label>
    <div class="form-group">{{ $row->recycling_method }}</div>
</div>

<div class="col-lg-3">
    <label class="fw-bold">Recycling Materials</label>
    <div class="form-group"> {{$row->recycling_materials }}</div>
</div>


</div>

<div class="row">
<div class="col-lg-6">
    <h5 class="fw-bold">Services Rendered</h5>
    <ul class="list-group">
        @foreach($row->followup_services as $service)
            <li>- {{ $service->service->service_name}}</li>
        @endforeach
    </ul>
</div>

<div class="col-lg-6">
   <h5 class="fw-bold">Trainings Attended</h5>
    <ul class="list-group">
    @foreach($row->followup_trainings as $training)
        <li>- {{ $training->training->training_name}}</li>
    @endforeach
    </ul>
</div>

</div>

</div>
<div class="modal-footer">
    <button type="button" data-bs-dismiss="modal" class="btn btn-danger pl-5 pr-5">
        Close
    </button>
</div>
</div>
</div>
</div>
</div>