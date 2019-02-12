<?php

namespace App\Http\Classes\LogicalModels\ProductRequest;

use App\Models\Product;
use App\Models\Price;
use http\Exception\RuntimeException;

class ProductWithPricesRequest implements ProductWithPricesRequestImp
{
    public function storeProduct($request)
    {
        try {
            Product::create([
                'name' => $request->name,
                'quantity' => $request->quantity,
                'reserve' => $request->reserve,

            ]);
        } catch (\Exception $e) {
            throw new \RuntimeException($e);
        }
    }

    public function storePrices($request)
    {
        try {
            $product_id = Product::pluck('id')->last();
            foreach ($request->prices as $price)
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