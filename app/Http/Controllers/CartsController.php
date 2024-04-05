<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\products;
use App\Models\ShippingInfo;
use Illuminate\Http\Request;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return View('carts.carts');
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
    public function addToCart(Request $request)
    {
        // Lấy thông tin sản phẩm từ request
        $productId = $request->id;
        $quantity = $request->has('quantity') ? $request->quantity : 1; // Giá trị mặc định là 1 nếu không truyền quantity

        // Lấy giỏ hàng từ session, nếu không có, tạo giỏ hàng mới
        $cart = session()->get('cart', []);


        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        if (isset($cart[$productId])) {
            // Nếu sản phẩm đã tồn tại trong giỏ hàng, cập nhật số lượng và giá mới
            $cart[$productId]['quantity'] += $quantity;
            $cart[$productId]['total'] = $cart[$productId]['quantity'] * $cart[$productId]['price'];
        } else {
            // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm mới vào giỏ hàng
            // Lấy thông tin chi tiết của sản phẩm từ CSDL (hoặc từ đâu đó khác)
            $product = products::find($productId);

            // Thêm sản phẩm mới vào giỏ hàng
            $cart[$productId] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => $quantity,
                'total' => $product->price * $quantity,
            ];
        }
        // Tính tổng giá trị của tất cả các sản phẩm trong giỏ hàng
        $totalPrice = 0;
        $totalQuantity = 0;
        foreach ($cart as $item) {
            $totalPrice += $item['total'];
            $totalQuantity += $item['quantity'];
        }
        // Lưu tổng giá trị vào session
        session()->put('totalPrice', $totalPrice);
        session()->put('totalQuantity',  $totalQuantity);

        // Lưu giỏ hàng mới vào session
        session()->put('cart', $cart);

        // Redirect về trang trước đó hoặc trang giỏ hàng và hiển thị thông báo
        return response()->json(['message' => 'Data processed successfully', 'status' => true]);
    }

    public function updateCart(Request $request)
    {
        // Lấy thông tin sản phẩm và số lượng mới từ request
        $productId = $request->productId;
        $newQuantity = $request->newQuantity;

        // Lấy giỏ hàng từ session
        $cart = session('cart');

        // Lấy thông tin sản phẩm từ cơ sở dữ liệu
        $product = products::find($productId);

        // Tính toán tổng giá mới của sản phẩm dựa trên số lượng mới
        $newTotalPrice = $newQuantity * $product->price;

        // Cập nhật số lượng và tổng giá của sản phẩm trong giỏ hàng
        $cart[$productId]['quantity'] = $newQuantity;
        $cart[$productId]['total'] = $newTotalPrice;

        $totalPrice = 0;
        $totalQuantity = 0;
        foreach ($cart as $item) {
            $totalPrice += $item['total'];
            $totalQuantity += $item['quantity'];
        }
        // Lưu tổng giá trị vào session
        session()->put('totalPrice', $totalPrice);
        session()->put('totalQuantity',  $totalQuantity);
        // Lưu giỏ hàng đã được cập nhật vào session
        session(['cart' => $cart]);

        // Trả về kết quả là tổng giá trị mới của sản phẩm
        return response()->json(['newTotalPrice' => $newTotalPrice, 'totalPriceAllCart' => $totalPrice]);
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
    public function destroy(Request $request)
    {
        //
        $cartId = $request->id;
        // Lấy ra session cart
        $cart = Session::get('cart', []);
        // Sao chép giỏ hàng vào một biến mới
        $totalPrice = 0;
        $totalQuantity = 0;
        // Duyệt qua các item trong cart
        // Xóa sản phẩm khỏi giỏ hàng nếu tồn tại
        if (isset($cart[$cartId])) {
            unset($cart[$cartId]);
        }
        foreach ($cart as $item) {
            $totalPrice += $item['total'];
            $totalQuantity += $item['quantity'];
        }
        // Lưu giỏ hàng mới vào session
        session(['cart' => $cart]);
        // Lưu tổng giá trị vào session
        Session::put('totalPrice', $totalPrice);
        Session::put('totalQuantity', $totalQuantity);
        return response()->json(['message' => 'Delete item cart successfully', 'data' => $cart, 'status' => true]);
    }
}
