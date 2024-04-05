<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">Tạo Shop Mới</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form method="POST" action="{{ route('shops.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="shopName" class="block text-sm font-medium text-gray-700">Tên Shop</label>
            <input type="text" id="shopName" name="name" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>
        @error('name')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
        <div class="mb-4">
            <label for="shopDescription" class="block text-sm font-medium text-gray-700">Mô Tả</label>
            <textarea id="shopDescription" name="description" class="mt-1 p-2 border border-gray-300 rounded-md w-full"></textarea>
        </div>
        @error('description')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
        <div class="mb-4">
            <label for="shopLogo" class="block text-sm font-medium text-gray-700">Logo</label>
            <input type="file" id="shopLogo" name="logo" accept="image/*" class="mt-1">
        </div>
        @error('logo')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Tạo Shop</button>
    </form>
</div>
