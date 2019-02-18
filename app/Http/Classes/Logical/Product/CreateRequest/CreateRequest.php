<?php

namespace App\Http\Classes\Logical\Product\CreateRequest;
use Illuminate\Support\Facades\Validator;

class CreateRequest
{
    private $model;

    public function __construct(CreateRequestModel $model)
    {
        $this->model = $model;
    }

    /**
     * Get a validator for an incoming store request.
     *
     * @param  array  $dataInput
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $dataInput)
    {
        return Validator::make($dataInput, [
            'name' => 'required|max:255',
            'quantity' => 'required|max:3',
            'reserve' => 'max:3',
            'marriage' => 'max:3',
            'details.*.price' => 'max:3',
        ]);
    }

    /**
     *
     * @param  array $dataInput
     *
     */
    public function insertProductWithPrices(array $dataInput)
    {
        $this->model->insertProductWithPrices($dataInput);
    }








}