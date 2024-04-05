<?php

namespace App\Http\Controllers;

use App\Models\Order_items;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Lấy ID của người dùng đã đăng nhập
        $userId = Auth::id();
        $listsOrderItem = Order_items::select('order_items.*')
            ->selectSub(function ($query) {
                $query->selectRaw('SUM(order_items.quantity * products.price)')
                    ->from('order_items')
                    ->join('products', 'order_items.product_id', '=', 'products.id')
                    ->whereColumn('order_items.order_id', 'orders.id');
            }, 'total_price')
            ->leftJoin('orders', 'order_items.order_id', '=', 'orders.id')
            ->where('orders.user_id', $userId)
            ->with('order')
            ->get();


        // Truyền dữ liệu vào view
        return view('orders.orders', [
            'listsOrderItem' => $listsOrderItem,
        ]);
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
        //
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
    public function update($id)
    {
        // Tìm đơn hàng cần cập nhật
        $orderItem = Orders::find($id);

        // Kiểm tra xem đơn hàng có tồn tại không
        if (!$orderItem) {
            // Xử lý khi đơn hàng không tồn tại, ví dụ: thông báo lỗi
            return response()->json(['message' => 'Đơn hàng không tồn tại'], 404);
        }

        // Cập nhật trạng thái của đơn hàng
        $orderItem->update(['status' => 'completed']);

        // Trả về thông báo thành công hoặc dữ liệu đã được cập nhật
        return response()->json(['message' => 'Cập nhật trạng thái đơn hàng thành công', 'data' => $orderItem]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
