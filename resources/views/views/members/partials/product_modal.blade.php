
<div class="modal" id="add-product">
<div class="modal-dialog modal-lg">
    <div class="modal-content">

    <div class="modal-header">
        <h6 class="modal-title text-dark"> <i class="fa fa-plus"></i> Add Product</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
    </div>
        
    <form action="{{ url('save-product')}}" method="post" id="policywizard">

        <div class="modal-body">

        <div class="row">

          @csrf
            <input type="hidden" name="member_id" value="{{$member->id}}" />

            <div class="form-group col-lg-12">
                <label class="form-label">Product Name</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Product Name"  name="product_name" id="product_name" value="{{old('product_name')}}" required>
                    </span>
                </div>
            </div>
            <div class="control-group form-group col-lg-6">
                <label class="form-label">Product Type</label>
                <select name="prod_type_id" class="form-control required">
                    @foreach($product_types as $type)
                        <option value="{{$type->id}}">{{$type->type_name}}</option>
                    @endforeach
                </select>
                    <small class="text-muted">Type of Product</small>
            </div>

            <div class="control-group form-group col-lg-6">
                <label class="form-label">Brand Registration</label>
                <select name="brand_registered" class="form-control required">
                        <option value="1">Registered</option>
                        <option value="0">Not registered</option>
                </select>
                    <small class="text-muted">Is product brand registered?</small>
            </div>


            <div class="control-group form-group col-lg-4">
                <label class="form-label">UNBS Certification</label>
                <select name="unbs_certified" class="form-control required">
                        <option value="1">Certified</option>
                        <option value="0">Not Certified</option>
                </select>
                    <small class="text-muted">Is product UNBS certified?</small>
            </div>

            <div class="control-group form-group col-lg-4">
                <label class="form-label">Packaging Type</label>
                <select name="packaging_type" class="form-control required">
                   @foreach($packaging_types as $pack)
                        <option value="{{$pack->id}}">{{$pack->packaging_type_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="control-group form-group col-lg-4">
                <label class="form-label">Packaging Recyclability</label>
                <select name="recyclable" class="form-control required">
                        <option value="1">Recyclable</option>
                        <option value="0">Not Recyclable</option>
                </select>
                    <small class="text-muted">Is packaging recylable?</small>
            </div>

            <div class="control-group form-group col-lg-4">
                <label class="form-label">Received Eco-Packaging Training</label>
                <select name="eco_pack_trained" class="form-control required">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                </select>
                    <small class="text-muted">Was member trained about eco-packaging?</small>
            </div>

            <div class="control-group form-group col-lg-4">
                <label class="form-label">Practices Recycling</label>
                <select name="actively_recycles" class="form-control required">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                </select>
                <small class="text-muted">Does Member do recycling</small>
            </div>

            <div class="control-group form-group col-lg-4">
                <label class="form-label">Processing Method</label>
                @include('partials.products.process_dropdown')
                <small class="text-muted">How is the product procesed?</small>
            </div>

        </div>

   
</div>
<div class="modal-footer">
    
    <button type="submit" class="btn btn-success pl-5 pr-5">
        <i class="icon-floppy-disk  mr-2"></i>
        Submit
    </button>
</div>
    </form>
</div>
</div>
</div>
</div>