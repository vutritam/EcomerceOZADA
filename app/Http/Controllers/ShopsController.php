<?php

namespace App\Http\Controllers;

use App\Models\shops;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('shops.shops');
        //
    }

    public function showShop($id)
    {
        $shop = shops::where('user_id', $id)->firstOrFail();
        return view('shops.show.show', ['shop' => $shop]);
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'nullable|string',
            'logo' => 'nullable|image|max:2048', // Giới hạn kích thước ảnh là 2MB
        ]);
        // dd($validator->errors());

        if ($validator->fails()) {
            // dd($request->all());
            return redirect()->route('shops')
                ->withErrors($validator)
                ->withInput();
        }

        // Upload hình ảnh và lưu đường dẫn
        $imagePath = null;
        if ($request->hasFile('logo')) {
            $imagePath = $request->file('logo')->store('shops_images', 'public');
        }
        $imageUrl = $imagePath ? asset('storage/' . $imagePath) : null;

        // Tạo shop mới
        $shop = shops::create([
            'name' => $request->name,
            'description' => $request->description,
            'logo' => $imageUrl,
            'user_id' => Auth::id(),
        ]);

        if ($shop) {

            return redirect()->route('shops.show')->with('success', 'Shop đã được tạo thành công.');
        } else {
            return redirect()->route('shops.store')->with('error', 'Đã xảy ra lỗi khi tạo shop.');
        }
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
