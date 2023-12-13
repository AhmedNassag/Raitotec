<?php

namespace App\Http\Controllers\Dashboard\Sale;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\Sale\SaleInterface;
use App\Http\Requests\Dashboard\Sale\StoreSaleRequest;
use App\Http\Requests\Dashboard\Sale\UpdateSaleRequest;


class SaleController extends Controller
{
    protected $sale;

    public function __construct(SaleInterface $sale)
    {
        $this->sale = $sale;
    }



    public function index(Request $request)
    {
        return $this->sale->index($request);
    }



    public function show($id)
    {
        return $this->sale->show($id);
    }



    public function store(StoreSaleRequest $request)
    {
        return $this->sale->store($request);
    }



    public function update(UpdateSaleRequest $request)
    {
        return $this->sale->update($request);
    }



    public function destroy(Request $request)
    {
        return $this->sale->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->sale->deleteSelected($request);
    }
}
