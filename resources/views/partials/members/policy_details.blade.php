<li class="list-group list-group-flush">

    <li class="list-group-item active bg-dark">
        <h4 class="mb-1 text-white">Policy Details</h4>
    </li>

    <li class="list-group-item">
        <h5 class="mb-1 text-bold text-primary">Customer Name:</h5>
        {{ $policy->customer_name }}
    </li>
    <li class="list-group-item">
        <h5 class="mb-1 text-bold text-primary">Policy Number:</h5>
        {{ $policy->v_policy_no }}
    </li>

    <li class="list-group-item">
        <h5 class="mb-1 text-bold text-primary">Policy Status:</h5>
        {{ $policy->policy_status }}
    </li>

    <li class="list-group-item">
        <h5 class="mb-1 text-bold text-primary">AMOUNT:</h5>
        UGX {{ number_format($policy->n_contribution) }} {{ $policy->v_pymt_freq }}
    </li>

    <li class="list-group-item text-bold">
        <h5 class="mb-1 text-bold text-primary">Policy:</h5>
        {{ $policy->v_plan_desc }}
    </li>
    <li class="list-group-item text-bold">
        <h5 class="mb-1 text-bold text-primary">Customer Mobile:</h5>
        {{ $policy->mobile_phone_number }}
    </li>
    <li class="list-group-item text-bold">
        <h5 class="mb-1 text-bold text-primary">Customer Email:</h5>
        {{ $policy->email }}
    </li>

    <input type="hidden" name="policy_data" value='<?php echo json_encode($policy); ?>'>

</li>