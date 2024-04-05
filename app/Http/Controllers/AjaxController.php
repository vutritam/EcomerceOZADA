<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Xử lý dữ liệu ở đây
        $product = Products::join('product_categories', 'products.category_id', '=', 'product_categories.id')
            ->select('products.*', 'product_categories.name as category_name')
            ->where('products.id', $request->id)
            ->first();
        // Trả về kết quả
        return response()->json(['message' => 'Data processed successfully', 'data' => $product]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
