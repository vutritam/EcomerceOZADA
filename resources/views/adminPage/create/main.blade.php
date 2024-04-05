<div class="w-full px-4 py-8" style="flex-grow: 1;">
    <h2 class="text-2xl font-semibold mb-4">Tạo Sản Phẩm Mới</h2>
    <form id="create-product-form" enctype="multipart/form-data" class="space-y-6">
        @csrf
        <div class="flex items-center gap-4 my-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Tên Sản Phẩm</label>
            <input type="text" name="name" id="name" autocomplete="name" required class=" w-full block p-2 rounded-lg w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search Mockups, Logos, Design Templates...">
        </div>
        <div class="flex items-center gap-4 my-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Mô Tả</label>
            <textarea id="description" name="description" rows="3" class=" block p-2 rounded-lg w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"></textarea>
        </div>
        <div class="flex items-center gap-4 my-4">
            <label for="price" class="block text-sm font-medium text-gray-700">Giá</label>
            <input type="number" name="price" id="price" min="0" step="0.01" required class="w-full block p-2 rounded-lg w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500">
        </div>
        <div class="flex items-center gap-4 my-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Hình Ảnh</label>
            <input type="file" name="image" id="image" accept="image/*" required class="w-full block p-2 rounded-lg w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500">
        </div>
        <div class="flex items-center gap-4 my-4">
            <label for="category_id" class="block text-sm font-medium text-gray-700">Danh Mục</label>
            <select id="category_id" name="category_id" required class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="">Chọn Danh Mục</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                <!-- Include options dynamically here -->
            </select>
        </div>
        <div class="flex items-center gap-4 my-4">
            <label for="category_id" class="block text-sm font-medium text-gray-700">Shop</label>
            <select id="category_id" name="shop_id" required class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="">Chọn shop</option>
                @foreach ($shop as $shop)
                    <option value="{{$shop->id}}">{{$shop->name}}</option>
                @endforeach
                <!-- Include options dynamically here -->
            </select>
        </div>
        <div class="flex items-center gap-4 my-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Trạng Thái</label>
            <select id="status" name="status" required class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="">Chọn Trạng Thái</option>
                <option value="available">Available</option>
                <option value="sold_out">Sold Out</option>
                <option value="pending">Pending</option>
                <option value="disabled">Disabled</option>
            </select>
        </div>
        <div class="flex items-center gap-4 my-4">
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Tạo Sản Phẩm
            </button>
        </div>
    </form>
</div>
