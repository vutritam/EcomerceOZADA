<div class="container mx-auto py-8"  style="margin: 0 20px;">
    <h1 class="text-3xl font-semibold mb-8">Shopping Cart</h1>
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
                                    Product
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Price
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Quantity
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Total
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Remove</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <!-- Cart items go here -->
                            @if(session()->has('cart') && count(session('cart')) > 0)
                               {{-- {{ session()->flush(); }} --}}
                                @foreach(session('cart') as $productId => $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center item-cart" data-shop-id="{{ $item['id'] }}">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full"
                                                    src={{ $item['image'] }} alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">{{ $item['name'] }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">${{ $item['price'] }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                            <input class="w-full quantity-input" type="number" data-product-id="{{ $item['id'] }}" value="{{ $item['quantity'] }}" min="1">
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900 total-price" data-product-id="{{ $item['id'] }}">{{ $item['quantity'] * $item['price'] }}</div>
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
                            <tr rowspan="5">
                                <td colspan="5">
                                    <p class="text-center p-4">Your cart is empty.</p>
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
        <!-- Cart summary -->
        <div class="mt-8 p-4 bg-white border rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Cart Summary</h2>
            <div class="flex justify-between">
                <span class="text-gray-700">Subtotal:</span>
                <span class="text-gray-900 font-semibold">$10.00</span>
            </div>
            <div class="flex justify-between mt-2">
                <span class="text-gray-700">Shipping:</span>
                <span class="text-gray-900 font-semibold">$5.00</span>
            </div>
            <div class="flex justify-between mt-2">
                <span class="text-gray-700">Total:</span>
                <span class="text-gray-900 font-semibold total">${{session()->has('totalPrice') && session()->has('cart') && count(session('cart')) > 0 ? session('totalPrice') : 0 }}</span>
            </div>
            <div class="mt-6">
                @if(auth()->check() && session()->has('cart') && count(session('cart')) > 0)
    {{-- Người dùng đã đăng nhập --}}
                    <button class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <a href="{{route('showCheckout')}}" class="flex items-center justify-center gap-1">
                            <span class="material-symbols-outlined">
                                shopping_cart
                                </span><span>Checkout</span>
                            </a>
                    
                    </button>
                @elseif(auth()->check() && session('cart')=== null  || !auth()->check() && session('cart')=== null)
                    <button disabled class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                       <a href="{{route('product')}}"> Vui lòng thêm sản phẩm</a>
                    </button>
                @elseif(!auth()->check() && session()->has('cart') && count(session('cart')) > 0)
                    <div class="flex items-center justify-center gap-2">
                        <a href="{{ route('login') }}"class="flex items-center gap-1" >
                            <span class="material-symbols-outlined">
                                person
                            </span>
                            <span>Sign in</span>
                        </a>
                        <a href="#contact" class="p-2 rounded-full bg-indigo-600 font-medium text-white">Sign up</a>
                    </div>
                    @else
                    {{-- {{dd(count(session('cart')))}} --}}

            
                @endif

            </div>
        </div>
        <!-- End of cart summary -->
    </div>
</div>