<div>
    <div style="width:95%;margin:15px auto;">
        <h2>Thanh toán đơn hàng </h2>
        <!-- Steps -->
        <div class="md:px-24 md:py-8 p-1 flex items-center justify-between">
            <!-- Step 1 -->
            <div class="flex items-center">
                <div class="h-8 w-8 flex items-center justify-center bg-indigo-500 text-white rounded-full">1</div>
                <div class="ml-4 text-lg font-semibold">Step 1</div>
            </div>
            <div id="timeline"></div>
            <!-- Step 2 -->
            <div class="flex items-center">
                <div class="h-8 w-8 flex items-center justify-center bg-gray-300 text-gray-600 rounded-full item-step-2">2</div>
                <div class="ml-4 text-lg font-semibold">Step 2</div>
            </div>
            <!-- Step 3 -->
            <div id="timeline-1"></div>
            <div class="flex items-center">
                <div class="h-8 w-8 flex items-center justify-center bg-gray-300 text-gray-600 rounded-full item-step-3">3</div>
                <div class="ml-4 text-lg font-semibold">Step 3</div>
            </div>
        </div>
    </div>
    <div class="flex gap-4 p-8 item-center main-checkout">
        <div class=" bg-white shadow-md overflow-hidden sm:rounded-lg show-cart-checkout" style="flex-grow: 1;">
            <div class="sm:px-6 flex items-center gap-1 justify-between p-2">
                <h2 class="text-lg font-semibold leading-6 text-gray-900">Chi tiết giỏ hàng</h2>
                <a href="{{route('showCart')}}" class="flex items-center gap-1"><span class="material-symbols-outlined">
                shopping_cart
                </span><span> xem giỏ hàng</span></a>
            </div>
            <div class="border-t border-gray-200">
                <ul class="divide-y divide-gray-200 list-cart-checkout">
                @if(session()->has('cart') && count(session('cart')) > 0)
                {{-- {{ session()->flush(); }} --}}
                    @foreach(session('cart') as $productId => $item)
                <!-- Cart item 1 -->
                <li class="flex items-center justify-between py-4 px-4 cart-item-checkout" data-product-id="{{ $productId }}" data-product-price="{{ $item['price'] }}" data-product-quantity="{{ $item['quantity'] }}">
                    <div class="flex gap-2">
                    <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-full"
                            src={{ $item['image'] }} alt="">
                    </div>
                    <div class="flex flex-col">
                        <span class="text-sm font-medium text-gray-900">{{ $item['name'] }}</span>
                        <span class="text-sm text-gray-500">Price: ${{ $item['price'] }}</span>
                        <span class="text-sm text-gray-500">Quantity: {{ $item['quantity'] }}</span>
                    </div>
                    
                    </div>
                    <button class="text-red-500 hover:text-red-700 focus:outline-none delete-item-container">
                    <!-- Icon for removing item from cart -->
                    <span class=" material-symbols-outlined delete-item-checkout">delete</span>
                    </button>
                </li>
                    @endforeach
                
            @else
            <ul>
                <li>
                    <p class="text-center p-4">Your cart is empty.</p>
                </li>
            </ul>
            @endif
                <!-- Add more cart items as needed -->
                </ul>
            </div>
            <a class="px-4 py-4 sm:px-6 flex items-center gap-2" href="{{route('product')}}">
                <span class="material-symbols-outlined">
                    shopping_cart_checkout
                    </span>
                <span> thêm sản phẩm</span></a>
            <div class="px-4 py-4 sm:px-6">
                <!-- Total price -->
                <div class="flex justify-between text-sm font-medium">
                <span>Tổng tiền:</span>
                <span class="total-amount">${{session()->has('totalPrice') && session()->has('cart') && count(session('cart')) > 0 ? session('totalPrice') : 0 }}</span>
                </div>
                <div class="text-sm font-medium">
                @if(session()->has('address'))
                <span id="show-address-session" class="flex justify-between items-center">Địa chỉ nhận hàng: {{ session('address')->shipping_address}} <span class="delete-address material-symbols-outlined">delete</span> </span>
                @else
                <span id="show-address-session" class="flex justify-between items-center">chưa có địa chỉ nào</span>
                @endif
            </div>
            </div>
            <div class="px-4 py-4 sm:px-6" id="box-address">
                <!-- Total price -->
                <div class="flex gap-2  items-center text-sm font-medium shadow-md p-1" style="width:130px">
                    <button type="button" class="inline-flex add-address items-center text-sm font-medium  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Thêm Địa Chỉ
                        <span class="material-symbols-outlined">
                            add
                        </span>
                    </button>
                </div>
                </div>
                <div class="px-4 py-4 sm:px-6 hidden" id="show-add-address">
                <!-- Total price -->
                <div class=" bg-white rounded-md overflow-hidden shadow-md">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                        <h2 class="md:text-2xl text-base font-semibold ">Thêm Địa Chỉ Giao Hàng</h2>
                        <span class="material-symbols-outlined remove-box-address">
                            remove
                            </span> 
                        </div>
                        <form action="{{route('addAddress')}}" method="POST" class="space-y-6">
                            @csrf
                            <div>
                                <label for="shipping_address" class="block text-sm font-medium text-gray-700">Địa Chỉ Giao Hàng</label>
                                <input type="text" name="shipping_address" id="shipping_address" autocomplete="shipping_address" required class="mt-1 focus:ring-indigo-500 p-2 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            @error('shipping_address')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                            <div>
                                <label for="contact_name" class="block text-sm font-medium text-gray-700">Tên Người Liên Hệ</label>
                                <input type="text" name="contact_name" id="contact_name" autocomplete="contact_name" required class="mt-1 focus:ring-indigo-500 p-2 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            @error('contact_name')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                            <div>
                                <label for="contact_phone" class="block text-sm font-medium text-gray-700">Số Điện Thoại Liên Hệ</label>
                                <input type="tel" name="contact_phone" id="contact_phone" autocomplete="contact_phone" required class="mt-1 focus:ring-indigo-500 p-2 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            @error('contact_phone')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                            <div class="flex justify-end gap-2">
                                <button type="submit" class="inline-flex items-center md:px-4 md:py-2 p-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Thêm mới
                                </button>
                                <button type="button" class="show-address inline-flex items-center md:px-4 md:py-2 p-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Thêm từ danh sách
                                </button>
                            </div>
                        </form>
                    </div>
                    </div>
                
                </div>
        
                <div class="px-4 py-4 sm:px-6 hidden" id="show-list-address">
                <!-- Total price -->
                <div class=" bg-white p-4 rounded-md overflow-hidden shadow-md">
                    <div class="p-6 ">
                        <h2 class="md:text-2xl text-base font-semibold mb-4">Danh sách địa chỉ của bạn</h2>
                        @if(count($listAddress) > 0)
                        @foreach($listAddress as $address)
                        <div class="flex gap-2 ">
                            <div class="mb-2" >
                                <p>Địa chỉ: {{ $address['shipping_address']}}</p>
                                <p>Tên ngưởi nhận: {{ $address['contact_name'] }}</p>
                                <p>SĐT: +84{{ $address['contact_phone'] }}</p>
                            </div>
                            <input type="radio" class="input-address" name="address" value="{{$address['id']}}"/>
                        </div>
                        
                    @endforeach
                    @else 
                            <p>Chưa có địa chỉ nào</p>
                    @endif
                    </div>
                    <button type="button" class="inline-flex back-list items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        quay lại
                    </button>
                    <button type="button" class="inline-flex confirm-list items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Xác nhận
                    </button>
                    </div>
                
                </div>
            </div>
        <div class="hidden py-8" style="flex-grow: 1;" id="address-infomation">
            <!-- Checkout Forms -->
            <div id="step1" class="checkout-step">
                <div class="bg-white rounded-lg shadow-md p-8">
                    <h2 class="text-2xl font-semibold mb-8">Step 1: Thông tin thêm (không bắt buộc)</h2>
                    <form>
                        <!-- Step 1 form fields go here -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Tên đầy đủ
                            </label>
                            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="John Doe">
                        </div>
                        <!-- More form fields for Step 1 -->
                        <button id="step1Prev" class="mr-2 bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                            Bỏ qua
                        </button>
                        <button id="step1Next" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                            Kế tiếp
                        </button>
                        
                    </form>
                </div>
            </div>
            <div id="step2" class="checkout-step hidden">
                <div class="bg-white rounded-lg shadow-md p-8">
                    <h2 class="text-2xl font-semibold mb-8">Step 2: Thêm địa chỉ</h2>
                    <form>
                        <!-- Step 2 form fields go here -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                                Địa chỉ
                            </label>
                            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" type="text" placeholder="123 Main St">
                        </div>
                        <!-- More form fields for Step 2 -->
                        <button id="step2Prev" class="mr-2 bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                            Trước
                        </button>
                        <button id="step2Next" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                            Kế tiếp
                        </button>
                    </form>
                </div>
            </div>
            <div id="step3" class="checkout-step hidden">
                <div class="bg-white rounded-lg shadow-md p-8">
                    <h2 class="text-2xl font-semibold mb-8">Step 3: finished Information</h2>
                    <form>
                        <!-- Step 2 form fields go here -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                                Address
                            </label>
                            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" type="text" placeholder="123 Main St">
                        </div>
                        <!-- More form fields for Step 2 -->
                        <button id="step3Prev" class="mr-2 bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                            Trước
                        </button>
                        <button  class="mr-2 bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                            Hoàn thành
                        </button>
                        
                    </form>
                </div>
            </div>
            <!-- More steps if needed -->
        </div>
        <div class=" py-8" style="flex-grow: 1;" id="final-checkout">
            <!-- Checkout Forms -->
            <div id="step1" class="checkout-step">
                <div class="bg-white rounded-lg shadow-md p-8">
                    <h2 class="text-2xl font-semibold mb-4">Thông tin thanh toán</h2>
                        <!-- Step 1 form fields go here -->
                        @if(session()->has('address'))
                        <div class="shipping_address">
                            <input class="id-address hidden" value="{{session('address')->id}}"/>
                            <p>Tên: <span>{{session('address')->contact_name}}</span></p>
                            <p><span >Địa chỉ nhận hàng: {{session('address')->shipping_address}}</span></p>
                            <p>SĐT: <span>{{session('address')->contact_phone}}</span></p>
                        </div>
                        
                        @else
                        <div class="shipping_address">
                            Chưa có thông tin
                        </div>
                    @endif
                        <!-- More form fields for Step 1 -->
                        <p class="mb-4">Số lượng sản phẩm: <span id="productCount">{{is_array(session('cart')) > 0 ? count(session('cart')): 0}}</span></p>
                        <p class="error-cart" style="color:red;"></p>
                        <div class="flex gap-2 items-center">
                        <button id="info-more" class="mr-2 bg-gray-500 hover:bg-gray-600 text-white font-bold md:py-2 md:px-4 p-2 rounded focus:outline-none focus:shadow-outline" type="button">
                            Thêm thông tin khác
                        </button>
                        <button id="order-submit" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold md:py-2 md:px-4 p-2 rounded focus:outline-none focus:shadow-outline" type="button">
                            Đặt hàng
                        </button>
                    </div>
                
                    
                        
                        
                </div>
            </div>
            <!-- More steps if needed -->
        </div>
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 checkout-success hidden" role="alert">
        </div>
    </div>
    
        
</div>