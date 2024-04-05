<div class="py-2 px-4 w-full text-base">
    <h2 class="text-2xl">Danh sách đơn hàng</h2>
    <!-- Single search result -->
    @foreach($listOrders as $listOrders)
    <div class="flex items-center gap-2">
    <div class="flex items-center py-2 border-b border-gray-300 w-full">
            <div class="ml-3">
                <h4 class="text-gray-800 font-semibold">Đơn hàng số: {{ $listOrders->id}}</h4>
                <h4 class="text-gray-800 font-semibold">Tài khoản: {{ $listOrders->user->email ?? 'Trống'}}</h4>
                <p class="text-gray-600">Tên người nhận đơn hàng: {{ $listOrders->shiping_info->contact_name ?? 'Trống'}}</p>
                <p class="text-gray-600">Trạng thái: {{ $listOrders->status}}</p>
            </div>
    </div>
    <div style="width:150px; flex-shrink: 0;" class="flex items-center gap-2">
        @if($listOrders->status !== 'completed')
        <button class="bg-blue-500 addToCartBtn text-white px-4 py-2 rounded hover:bg-blue-600 btn-confirm-order" data-id="{{ $listOrders->id }}">Xác nhận</button>
        @endif
        <button class="btn-delete-product" data-id="{{ $listOrders->id }}"><span class="material-symbols-outlined">
            delete
            </span>
        </button>
        </div>
    </div>
    @endforeach
</div>