<?php

namespace App\Http\Controllers\Dashboard\CustomersReview;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\CustomersReview\CustomersReviewInterface;
use App\Http\Requests\Dashboard\CustomersReview\StoreCustomersReviewRequest;
use App\Http\Requests\Dashboard\CustomersReview\UpdateCustomersReviewRequest;


class CustomersReviewController extends Controller
{
    protected $customersReview;

    public function __construct(CustomersReviewInterface $customersReview)
    {
        $this->customersReview = $customersReview;
    }



    public function index(Request $request)
    {
        return $this->customersReview->index($request);
    }



    public function show($id)
    {
        return $this->customersReview->show($id);
    }



    public function store(StoreCustomersReviewRequest $request)
    {
        return $this->customersReview->store($request);
    }



    public function update(UpdateCustomersReviewRequest $request)
    {
        return $this->customersReview->update($request);
    }



    public function destroy(Request $request)
    {
        return $this->customersReview->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->customersReview->deleteSelected($request);
    }
}
