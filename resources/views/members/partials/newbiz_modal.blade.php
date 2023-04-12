
<div class="modal selectOnModal" id="add-business">
<div class="modal-dialog modal-xl">
    <div class="modal-content">

    <div class="modal-header">
        <h6 class="modal-title text-dark"> <i class="fa fa-plus"></i> Add Business</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
    </div>
        
    <form action="{{ url('member-businesses')}}" method="post" id="policywizard">

        <div class="modal-body">

        <input type="hidden" value="{{$member->id}}" name="member_id" />
         @csrf
         
         @include('members.partials.biz_profile_form')
   
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