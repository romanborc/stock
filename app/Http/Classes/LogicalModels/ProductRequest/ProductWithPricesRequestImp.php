<?php
namespace App\Http\Classes\LogicalModels\ProductRequest;

interface ProductWithPricesRequestImp
{
    public function insertProductOrException($validDataForm);
    public function insertPricesOrException($validDataForm);
}

