<?php

namespace App\Http\Controllers;
use App\Services\IBankContract;

class TestController extends Controller
{
    private $bankService;

    public function __construct(IBankContract $bankDebitService)
    {
        $this->bankService = $bankDebitService;
    }

    public function index()
    {
        $this->bankService->effectDebitOrder();
    }
}
