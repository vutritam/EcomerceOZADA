<div class="container mx-auto py-8"  style="margin: 0 20px;">
    <h1 class="text-3xl font-semibold mb-8">Đơn hàng của bạn</h1>
    {{-- {{dd($listsOrderItem)}} --}}
    <div class="flex flex-col">
        <!-- Cart items -->
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Mã đơn hàng
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Số lượng sản phẩm
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Giá
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Tổng tiền
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Trạng thái
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Khác
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @if(count($listsOrderItem) > 0)
                                @foreach($listsOrderItem as $listsOrderItem)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center item-cart" data-shop-id="{{ $listsOrderItem->order->id }}">
                                            <div class="text-sm text-gray-900">{{ $listsOrderItem->order->id }}</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $listsOrderItem->quantity }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">${{ $listsOrderItem->price }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">${{ $listsOrderItem->order->total_price }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $listsOrderItem->order->status }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button class='delete-item'>
                                            <span class="material-symbols-outlined" >
                                                delete_forever
                                                </span>
                                        </button>
                                        
                                    </td>
                                </tr>
                                @endforeach

                            @else 
                            <tr rowSpan="6" class="flex items-center justify-center">
                                <td colspan="6" class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center item-cart" >
                                        <div class="text-sm text-gray-900">Bạn chưa có đơn hàng nào</div>
                                    </div>
                                </td>
                            </tr> 
                            @endif
                           
                           
                        
                            <!-- End of cart items -->
                        </tbody>
                    </table>
                    <div class="flex justify-end p-2 gap-2">
                        @if(session()->has('cart') && count(session('cart')) > 0)
                        <button class="w-32  py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Xóa tất cả</button>
                        <a href="{{route('product')}}" class="w-32  py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium hover:text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Mua thêm</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- End of cart items -->
        
    </div>
</div>