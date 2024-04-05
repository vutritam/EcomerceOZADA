<div class="py-2 px-4 w-full text-base">
    <h2 class="text-2xl">Danh sách sản phẩm</h2>
    <!-- Single search result -->
    @foreach($listProducts as $listProducts)
    <div class="flex items-center gap-2">
    <div class="flex items-center py-2 border-b border-gray-300 w-full">
            <img src="{{ $listProducts->image}}" alt="Product Image" class="w-24 h-24 object-cover rounded-md">
            <div class="ml-3">
                <h4 class="text-gray-800 font-semibold">{{ $listProducts->name}}</h4>
                <span class="text-gray-600">{{ $listProducts->price}}</span>
                <span class="text-gray-600">Mô tả: {{ $listProducts->description}}</span>
                <div class="flex items-center  w-full gap-2">
                    <span class="text-gray-600">Lượt xem: 6</span>
                    <span class="text-gray-600">đánh giá: 6</span>
                </div>
            </div>
           
    </div>
    <div style="width:150px; flex-shrink: 0;" class="flex items-center gap-2">
        <button class="btn-delete-product" data-id="{{ $listProducts->id }}"><span class="material-symbols-outlined">
            delete
            </span></button>
        <button><span class="material-symbols-outlined">
            edit
            </span></button>
        </div>
    </div>
    @endforeach
</div>