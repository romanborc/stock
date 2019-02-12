<?php

namespace App\Http\Controllers\Price;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PriceCategory;

use App\Http\Requests\Product\ProductStore;
use App\Http\Classes\LogicalModels\ProductRequest\CreateProductWithPricesRequest;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(CreateProductWithPricesRequest $request)
    {
        $this->middleware('auth');
        $this->request = $request;

    }

    public function index()
    {
        $priceCategories = PriceCategory::all();
        return view('price.index', ['priceCategories' => $priceCategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStore $request)
    {
        $this->request->storeProductWithPrices($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
