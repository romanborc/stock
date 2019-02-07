<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PriceCategoryResourse;
use App\Models\PriceCategory;

class PriceCategoryController extends Controller
{
    public function index(Request $request)
    {
        return response([
            'data' => new PriceCategoryResourse(PriceCategory::all())
        ]);
    }
    
    public function store(Request $request)
    {
        $data = $request->json()->all();
        $priceCategory = PriceCategory::create([
            'name' => $data['name']
        ]);
        
        return response([
            'data' => new PriceCategoryResourse(PriceCategory::all())
        ]);
    }
}
