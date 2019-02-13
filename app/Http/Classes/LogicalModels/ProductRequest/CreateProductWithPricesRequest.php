<?php

namespace App\Http\Classes\LogicalModels\ProductRequest;

use Illuminate\Support\Facades\DB;

class CreateProductWithPricesRequest
{
    private $request;

    public function __construct(ProductWithPricesRequest $request)
    {
        $this->request = $request;
    }

    public function storeProductWithPrices($validDataForm)
    {
        DB::beginTransaction();
        try {
            $this->request->insertProductOrException($validDataForm);
            $this->request->insertPricesOrException($validDataForm);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw new \RuntimeException($e->getMessage());
        }
    }
}