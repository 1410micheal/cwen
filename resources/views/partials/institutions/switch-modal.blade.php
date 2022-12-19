
                       <!-- MODAL EFFECTS -->
<div class="modal fade" id="switch-institution">
            <div class="modal-dialog modal-dialog-centered  modal-sm" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title text-dark"> <i class="fa fa-institution text-danger"></i> Switch Instituion</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form class="form-horizontal" action="{{ url('institution-toggle') }}" method="post">

                    <div class="modal-body">
                          @csrf
                           <div class="form-group">
                             @include('partials.institutions.dropdown',
                             ['all_field'=>'All','all_value'=>0,'selected'=>session_institution()->id])
                           </div>
                         
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Switch Institution</button> 
                        <a class="btn btn-light" data-bs-dismiss="modal" >Close</a>
                    </div>
                     
                    </form>
                </div>
            </div>
        </div>

