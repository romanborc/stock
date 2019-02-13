<?php

namespace App\Http\Classes\LogicalModels\ProductRequest;

use App\Models\Product;
use App\Models\Price;
use http\Exception\RuntimeException;

class ProductWithPricesRequest implements ProductWithPricesRequestImp
{
    public function insertProductOrException($dataForm)
    {
        try {
            Product::create([
                'name' => $dataForm->name,
                'quantity' => $dataForm->quantity,
                'reserve' => $dataForm->reserve,

            ]);
        } catch (\Exception $e) {
            throw new \RuntimeException($e);
        }
    }

    public function insertPricesOrException($dataForm)
    {
        try {
            $product_id = Product::pluck('id')->last();
            foreach ($dataForm->prices as $price)
            {
                Price::create([
                    'price' => $price['price'],
                    'price_category_id' => $price['price_category_id'],
                    'product_id' => $product_id,
                ]);
            }
        } catch (\Exception $e) {
            throw new \RuntimeException($e);
        }
    }
}