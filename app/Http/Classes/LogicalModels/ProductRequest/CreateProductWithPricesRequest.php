<?php

namespace App\Http\Classes\LogicalModels\ProductRequest;


class CreateProductWithPricesRequest
{
    private $product;


    public function __construct(ProductWithPricesRequest $product)
    {
        $this->product = $product;
    }

    public function storeProductWithPrices($request)
    {
        //Add DB::beginTransaction();
        try {
            $this->product->storeProduct($request);
            $this->product->storePrices($request);
        } catch (\Exception $e) {
            throw new \RuntimeException($e->getMessage());
        }

    }






}