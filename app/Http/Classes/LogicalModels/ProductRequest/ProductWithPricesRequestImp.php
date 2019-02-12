<?php
namespace App\Http\Classes\LogicalModels\ProductRequest;

interface ProductWithPricesRequestImp
{
    public function storeProduct($data);
    public function storePrices($data);
}

