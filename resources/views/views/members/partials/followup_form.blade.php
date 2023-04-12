<div class="modal modalselect" id="add-followup">
<div class="modal-dialog modal-xl">
    <div class="modal-content">

    <div class="modal-header">
        <h6 class="modal-title text-dark"> <i class="fa fa-plus"></i> Capture Folowup Record</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
    </div>

<form action="{{ url('save-followup') }}" method="POST" class="feeForm00" enctype="multipart/form-data">
  
<div class="modal-body">
  @csrf    
    <input type="hidden" name="member_id" value="{{$member->id}}" />
    <div class="row">

    <div class="col-lg-4">
            <div class="form-group col-lg-12">
                <label class="form-label">Followup Date</label>
                <input type="date" name="date" class="form-control datepick" value="{{old('date')}}" placeholder="Followup Date" id="date" required>
            </div>

            <div class="form-group col-lg-12">
                    <label class="form-label">Services Rendered</label>
                    @include('partials.services.dropdown',['field'=>'services[]'])
                    <small class="text-muted">Select services offered during visit</small>
            </div>

            <div class="form-group col-lg-12">
                    <label class="form-label">Cascade of Trainings Attended</label>
                    @include('partials.trainings.dropdown',['field'=>'trainings[]'])
                    <small class="text-muted">Select trainings attended</small>
            </div>

            
        <div class="form-group col-lg-12">
            <label class="form-label">Products On Shelf</label>
            <input type="number" name="shelfed_products" class="form-control" value="{{old('shelfed_products')}}" placeholder="Products On Shelf" id="shelfed_products" required>
        </div>
    </div>

    <div class="col-lg-3">
    

    <div class="form-group col-lg-12">
            <label class="form-label">People Employed</label>
            <input type="number" name="employee_count" class="form-control" value="{{old('employee_count')}}" placeholder="Number of Employees" id="employee_count" required>
        </div>

        <div class="form-group col-lg-12">
            <label class="form-label">Sales Volume</label>
            <input type="number" name="sales_volume" class="form-control" value="{{old('sales_volume')}}" placeholder="Sales Volume" id="sales_volume" required>
        </div>

        <div class="form-group col-lg-12">
            <label class="form-label">Percentage Profit Margin</label>
            <input type="number" name="profit" class="form-control" value="{{old('profit')}}" placeholder="Profit Margin" id="profito" required>
        </div>

        <div class="form-group col-lg-12">
            <label class="form-label">New Product Name (if any)</label>
            <input type="text" name="new_product_name" class="form-control" value="{{old('new_product_name')}}" placeholder="New product Name (if any)" id="new_product_name">
        </div>


    </div>

    <div class="col-lg-5">
    
    <div class="form-group col-lg-12">
            <label class="form-label">Trade Mark Reservation</label>
            <select class="form-control" name="trade_mark_registration" required>
                <option>Not Yet Reserved</option>
                <option>Reserved</option>
                <option>Rejected</option>
                <option>In Process</option>
            </select>
        </div>

        <div class="form-group col-lg-12">
            <label class="form-label">URSB Registration</label>
            <select class="form-control" name="ursb_registration" required>
                <option>Not Yet Reserved</option>
                <option>Reserved</option>
                <option>Rejected</option>
                <option>In Process</option>
            </select>
        </div>
        <div class="form-group col-lg-12">
            <label class="form-label">URSB Name Reservation</label>
            <select class="form-control" name="ursb_name_reservation" required>
                <option>Not Yet Reserved</option>
                <option>Reserved</option>
                <option>Rejected</option>
                <option>In Process</option>
            </select>
        </div>

        <div class="form-group col-lg-12">
            <label class="form-label">UNBS Certification</label>
            <select class="form-control" name="unbs_certification" required>
                <option>Not Yet Reserved</option>
                <option>Reserved</option>
                <option>Rejected</option>
                <option>In Process</option>
            </select>
        </div>

        <div class="form-group col-lg-12">
            <label class="form-label">Recycling Method</label>
            <textarea name="recycling_method" class="form-control"  placeholder="Recycling Method" id="recycling_method">{{old('recycling_method')}}</textarea>
        </div>

        <div class="form-group col-lg-12">
            <label class="form-label">Recycling Materials</label>
            <textarea name="recycling_materials" class="form-control"  placeholder="Recycling Materials" id="recycling_materials">{{old('recycling_materials')}}</textarea>
        </div>


    </div>
    

    </div>
    <div class="modal-footer">
    
    <button type="submit" class="btn btn-success pl-5 pr-5">
        <i class="icon-floppy-disk  mr-2"></i>
        Submit
    </button>
    </div>

    </div>
    
    </form>
</div>
</div>
</div>