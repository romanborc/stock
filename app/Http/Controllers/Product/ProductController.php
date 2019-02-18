<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PriceCategory;
use App\Http\Classes\Logical\Product\CreateRequest\CreateRequest;
use App\Http\Requests\Product\ProductStore;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    private $request;

    public function __construct(CreateRequest $request)
    {
        $this->middleware('auth');
        $this->request = $request;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $priceCategories = PriceCategory::all();
        return view('price.index', ['priceCategories' => $priceCategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store()
    {
        $dataInput = Input::all();

        if($this->request->validator($dataInput)->fails()) {
            return redirect()->route('price')->withErrors($this->request->validator($dataInput)->errors())->withInput();
        }

        try {
            $this->request->insertProductWithPrices($dataInput);
        } catch (\Exception $e) {
            dd($e);
            return redirect()->route('price')->withErrors('Ошибка базы данных');
        }

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
