<?php

namespace App\Http\Classes\Logical\Product\CreateRequest;

use Illuminate\Support\Facades\DB;

use App\Models\Product;
use App\Models\Price;



class CreateRequestModel
{
    /**
     *
     * @param  array $dataInput
     *
     */
    public function insertProductWithPrices(array $dataInput)
    {
        DB::beginTransaction();
        try {
            Product::create([
                'name' => $dataInput['name'],
                'quantity' => $dataInput['quantity'],
                'reserve' => $dataInput['reserve'],
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollBack();
            throw $e;
        }

        try {
            $product_id = Product::pluck('id')->last();
            foreach ((array) $dataInput->prices as $price) {
                Price::create([
                    'price' => $price['price'],
                    'price_category_id' => $price['price_category_id'],
                    'product_id' => $product_id,
                ]);
            }
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollBack();
            throw $e;
        }

        DB::commit();
    }
}