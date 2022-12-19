
<li class="list-group list-group-flush">

    <li class="list-group-item active bg-dark">
        <h4 class="mb-1 text-white">Account Details</h4>
    </li>
    <div class="row">
    <div class="col-lg-6" style="marg:0px!important">
        <li class="list-group-item">
            <h5 class="mb-1 text-bold text-primary">Account Name:</h5>
            {{ $account->out_account_title }}
        </li>

        <input type="hidden" class="form-control" value="{{ $account->out_account_title }}"  name="account_name">

        <li class="list-group-item">
            <h5 class="mb-1 text-bold text-primary">Account Number:</h5>
            {{ $account->out_account_number }}
        </li>
    </div>
    <div class="col-lg-6">
        <li class="list-group-item">
            <h5 class="mb-1 text-bold text-primary">Account Product:</h5>
            {{ $account->out_acount_product }}
        </li>

        <li class="list-group-item">
            <h5 class="mb-1 text-bold text-primary">Currency:</h5>
            {{ $account->out_currency }}
        </li>
    </div>

</li>