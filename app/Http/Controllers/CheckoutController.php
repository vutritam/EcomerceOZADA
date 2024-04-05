<?php

namespace App\Http\Controllers;

use App\Models\Order_items;
use App\Models\Orders;
use App\Models\products;
use App\Models\ShippingInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listsAddress = ShippingInfo::all();
        return View('checkout.checkout', ['listAddress' => $listsAddress]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createOrderCheckOut(Request $request)
    {
        // Tạo đơn hàng mới
        $order = Orders::create([
            'user_id' => Auth::id(),
            'order_date' => now(),
            'shipping_info_id' => $request->id,
            'status' => 'pending'
            // Thêm các trường khác nếu cần
        ]);
        // Kiểm tra xem đơn hàng đã được tạo thành công hay không
        if ($order) {
            // Nếu tạo đơn hàng thành công, thực hiện thêm các mục đơn hàng
            foreach ($request->products as $product) {
                $existingItem = Order_items::where('order_id', $order->id)
                    ->where('product_id', $product['id'])
                    ->first();

                if ($existingItem) {
                    // Nếu sản phẩm đã tồn tại, cập nhật số lượng và giá
                    $existingItem->quantity += $product['quantity'];
                    $existingItem->price = $product['price'];
                    $existingItem->save();
                } else {
                    // Nếu sản phẩm chưa tồn tại, tạo mới Order_item
                    Order_items::create([
                        'order_id' => $order->id,
                        'product_id' => $product['id'],
                        'quantity' => $product['quantity'],
                        'price' => $product['price'],
                    ]);
                }
            }

            // Lặp qua các sản phẩm trong giỏ hàng
            foreach (session('cart') as $productId => $item) {
                // Cập nhật số lượng sản phẩm trong kho
                $product = products::find($productId);
                $product->quantity -= $item['quantity'];
                $product->save();
            }

            // Xóa giỏ hàng của người dùng
            session()->forget('cart');
            session()->forget('address');
            session()->forget('totalPrice');
            session()->forget('totalQuantity');

            // Trả về phản hồi cho AJAX với thông báo thành công
            return response()->json(['success' => true, 'status' => true, 'message' => 'Đơn hàng đã được tạo thành công.']);
        } else {
            // Trả về phản hồi cho AJAX với thông báo thất bại
            return response()->json(['success' => false,  'status' => false, 'message' => 'Đã xảy ra lỗi khi tạo đơn hàng. Vui lòng thử lại sau.']);
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function addAddress(Request $request)
    {
        // Validate request data
        $request->validate([
            'shipping_address' => 'required|string',
            'contact_name' => 'required|string',
            'contact_phone' => 'required|string',
        ]);

        // Create a new shipping address
        ShippingInfo::create([
            'shipping_address' => $request->shipping_address,
            'contact_name' => $request->contact_name,
            'contact_phone' => $request->contact_phone,
            // Add other fields if needed
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Đã thêm địa chỉ giao hàng thành công.');
    }

    public function store(Request $request)
    {
        //
        $Value = $request->id;
        $address = ShippingInfo::find($Value);
        session()->put('address', $address);
    }

    public function deleteAddressSession()
    {
        // Xóa session address
        Session::forget('address');

        // Trả về thông báo thành công hoặc cần thiết
        return response()->json(['message' => 'Session address deleted successfully']);
    }

    public function getAddress(Request $request)
    {
        //
        $Value = $request->confirm;
        if ($Value) {
            $addressSession = session()->get('address');
            return response()->json(['message' => 'Data processed successfully', 'data' => $addressSession, 'status' => true]);
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


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
