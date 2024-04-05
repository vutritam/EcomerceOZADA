<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\productCategories;
use App\Models\productImages;
use App\Models\products;
use App\Models\shops;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = products::all();
        $shops = shops::all();
        $categories = productCategories::all();
        return View('products.products', ['products' => $products, 'shops' => $shops, 'categories' => $categories]);
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
        // Validate dữ liệu được gửi từ form
        $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|max:2048', // Giới hạn kích thước ảnh là 2MB
            'category_id' => 'required|exists:product_categories,id',
            'shop_id' => 'required|exists:shops,id',
            'status' => 'required|in:available,sold_out,pending,disabled',
        ]);

        // dd('ok');

        // Upload hình ảnh và lưu đường dẫn
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images', 'public');
        }
        $imageUrl = $imagePath ? asset('storage/' . $imagePath) : null;

        // Tạo sản phẩm mới
        $product = products::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imageUrl,
            'category_id' => $request->category_id,
            'shop_id' => $request->shop_id,
            'status' => $request->status,
        ]);

        // Lưu thông tin hình ảnh vào bảng product_images
        if ($imageUrl) {
            productImages::create([
                'product_id' => $product->id,
                'image_url' => $imageUrl,
            ]);
        }

        // Redirect về trang danh sách sản phẩm
        return response()->json(['message' => 'Successfully', 'status' => true]);
    }

    public function searchLiveProduct(Request $request)
    {
        $query = $request->input('query');
        // Perform search query using the input query
        $results = products::where('name', 'like', "%$query%")->get();

        return response()->json(['message' => 'Successfully', 'data' => $results, 'status' => true]);
    }

    /**
     * Display the specified resource.
     */
    public function show($categoryId)
    {
        // Lấy danh sách sản phẩm có categories_id tương ứng
        $products = products::where('category_id', $categoryId)->get();

        // Trả về view hoặc dữ liệu JSON tùy thuộc vào cách bạn muốn xử lý
        return response()->json(['message' => 'Successfully', 'data' => $products, 'status' => true]);
        // return response()->json($products); // Nếu muốn trả về dữ liệu JSON
    }
    // show all product admin
    public function showListProducts()
    {
        $listProducts = products::all();
        return View('adminPage.showProducts', ['listProducts' => $listProducts]);
        // return response()->json($products); // Nếu muốn trả về dữ liệu JSON
    }
    // show all order admin
    public function showListOrders()
    {
        // lấy tất cả orders và join bảng
        $listOrders = Orders::with('user', 'shiping_info')->get();
        return View('adminPage.showOrder', ['listOrders' => $listOrders]);
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
        $item = products::find($id);
        if (!$item) {
            return response()->json(['message' => 'Item not found'], 404);
        }
        $item->delete();
        return response()->json(['message' => 'Item deleted successfully'], 200);
    }
}
