<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-1/6 bg-gray-200">
        <!-- Your sidebar content here -->
        <ul class="p-4">
            <li><a href="#" class="block py-2 px-4 hover:bg-gray-300">Link 1</a></li>
            <li><a href="#" class="block py-2 px-4 hover:bg-gray-300">Link 2</a></li>
            <!-- Add more sidebar links as needed -->
        </ul>
    </div>

    <!-- Main content -->
    <div class="w-full bg-gray-100">
        <!-- Navbar -->
        <div class="flex justify-between items-center bg-blue-500 text-white p-4">
            <h1 class="text-xl font-bold">{{$shop['name']}}</h1>
            <!-- Add your navigation links here -->
            <ul class="flex space-x-4">
                <li><a href="#" class="hover:text-gray-300">Link 1</a></li>
                <li><a href="#" class="hover:text-gray-300">Link 2</a></li>
                <!-- Add more navigation links as needed -->
            </ul>
        </div>

        <!-- Shop content -->
        <div class="p-4">
            <!-- Shop logo -->
            <div class="flex justify-center mb-8">
                <img src="{{$shop['logo']}}" alt="Shop Logo" class="w-24 h-24 rounded-full">
            </div>

            <!-- Main shop content -->
            <div>
                <!-- Add your shop's main content here -->
                <p>xin chào {{$shop['name']}} bạn có thể tạo sản phẩm của mình riêng tại đây <button class="flex items-center justify-center px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                    <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                        Tạo sản phẩm
                    </button></p>
            </div>
        </div>
    </div>
</div>
