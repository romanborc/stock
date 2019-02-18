<?php

namespace App\Http\Classes\Logical\Product\CreateRequest;

interface CreateRequestInterface
{
    public function insertProductWithPrices($dataInput);
}
