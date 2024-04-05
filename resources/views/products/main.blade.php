<div class="product-container " style="margin: 0 20px;">
    <div class="tag py-4 gap-4">
        <ul class="flex gap-9">
            <li>Products</li>
            <li>All suppliers</li>
        </ul>
    </div>
    {{-- {{dd($shops)}} --}}

    <div class="cart-icon">
        <a href="{{route('showCart')}}">

        <span class="material-symbols-outlined">
            shopping_cart
            </span>
        <span class="cart-count">{{session()->has('totalQuantity')  && session()->has('cart') && count(session('cart')) > 0? session('totalQuantity') : 0 }}</span>
        </a>
    </div>
    
    <div class="flex gap-2 justify-between siderbar-container">
        <div class="sider-bar siderbar-mobile-products rounded-3xl" style="margin-right:10px;background-color: rgb(255, 255, 255);">
            <div class=" sider-bar-price">
                <h2 class="text-2xl py-3">Danh mục sản phẩm</h2>
                <ul>
                    @foreach ($categories as $categories)
                        <li>
                            <div class="flex items-center gap-2">
                                <input type="checkbox" class="category-checkbox" value="{{$categories->id}}" />
                                <p>{{$categories->name}}</p>

                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="sider-bar-price">
                <h2 class="text-2xl py-3">Store reviews
                </h2>
                <ul>
                    <li>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" />
                            <p>Trade Assurance</p>

                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" />
                            <p>Trade Assurance</p>

                        </div>
                    </li>

                </ul>
            </div>
            <div class="">
                <h2 class="text-2xl py-3">Price
                </h2>
                <div class="flex w-full items-center gap-2 justify-around">
                    <input style="width: 40%;height: 30px;" class="border-2">
                    <span>-</span>
                    <input style="width: 40%;height: 30px;" class="border-2">
                    <button class="border-2 p-1 rounded-3xl w-12">ok</button>
                </div>
            </div>
            <div class="sidebar">
                <ul class="menu">
                    <li>
                        <a href="#">
                            <span>Menu 1</span>
                            <span class="material-symbols-outlined">
                                keyboard_arrow_down
                            </span>

                        </a>
                        <ul class="submenu ">
                            <div class="relative">
                                <input type="text"
                                    class="border border-gray-300 rounded-md pl-7 pr-3 py-1 focus:outline-none focus:border-blue-500 text-sm"
                                    placeholder="Search">
                                <div class="absolute inset-y-0 left-0 pl-2 flex items-center"
                                    style="color: #0c0c0c;">
                                    <span class="material-symbols-outlined">
                                        search
                                    </span>
                                </div>
                            </div>
                            <ul style="color: #0c0c0c;" class="mt-4">
                                <li>
                                    <div class="flex items-center gap-2">
                                        <input type="checkbox" value="" />
                                        <p>Trade Assurance</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center gap-2">
                                        <input type="checkbox" />
                                        <p>Trade Assurance</p>

                                    </div>
                                </li>

                            </ul>

                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span>Menu 2</span>
                            <span class="material-symbols-outlined">
                                keyboard_arrow_down
                            </span>

                        </a>
                        <ul class="submenu">
                            <li><a href="#">Submenu 2.1</a></li>
                            <li><a href="#">Submenu 2.2</a></li>
                            <li><a href="#">Submenu 2.3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span>Menu 3</span>
                            <span class="material-symbols-outlined">
                                keyboard_arrow_down
                            </span>

                        </a>
                        <ul class="submenu">
                            <li><a href="#">Submenu 3.1</a></li>
                            <li><a href="#">Submenu 3.2</a></li>
                            <li><a href="#">Submenu 3.3</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <div class="main-right">
            <div class="slider-container w-full px-8 rounded-3xl" style="background-color: #fcfcfc;">
                  <section class="slide-language desktop-slider slider">
                    @foreach ($shops as $shop)
                        <div>
                            <div class="gap-2 w-36 h-36 flex items-center justify-center">
                                <div class="full-link_icon_wrapper rounded-full p-2"
                                    style="background-color: rgb(231, 230, 229); width: 60px; height: 60px;  ">
                                    <img src="https://s.alicdn.com/@img/tfs/TB1aUq6cgoQMeJjy0FoXXcShVXa-48-48.png"
                                        alt="" srcset="">
                                    <p class="text-center mt-1">{{$shop->name}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </section>
            </div>
            <div class="slider-container w-full px-8 rounded-3xl" style="background-color: #fcfcfc;">
              
                <section class="lazy slider mobile-slider" data-sizes="50vw">
                    @foreach ($shops as $shops)
                    <div>
                        <div class="gap-2 h-36 flex items-center justify-center">
                            <div class="full-link_icon_wrapper rounded-full p-2"
                                style="background-color: rgb(231, 230, 229); width: 60px; height: 60px;  ">
                                <img src="https://s.alicdn.com/@img/tfs/TB1aUq6cgoQMeJjy0FoXXcShVXa-48-48.png"
                                    alt="" srcset="">
                                <p class="text-center mt-1">{{$shops->name}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  </section>
            </div>
            <div class="tag py-5">
                <ul>
                    <li>Alibaba</li>
                    <li>&gt;</li>
                    <li>Consumer Electronics</li>
                    <li>&gt;</li>
                    <li>Chargers, Batteries & Power Supplies</li>
                    <li>&gt;</li>
                    <li>Power Banks & Power Station</li>
                </ul>
            </div>
            <div class="scroll-showcase-container">
                <div class="flex gap-4 justify-center items-center overflow-x-auto">
                    @foreach ($products as $shop)
                        <div class="scroll-showcase-item">
                            <img src="{{$shop->image}}" alt="Product Image">
                            <div class="scroll-showcase-cell-title">{{$shop->name}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
            
            <div>
                <h2 class="py-4">Alibaba.com Products(12811 products available)</h2>
                <div class="container-item flex flex-wrap gap-4" id="product-cate">
                    @foreach ($products as $shop)
                    <div class="list-item p-3 mb-4" style="width: 23%;" data-shop-id="{{ $shop->id }}">
                        <div>
                            <img
                                src="{{ $shop->image}}">
                        </div>
                        <span class="product-title">Hot Selling <strong>Products</strong> {{ $shop->name}}</span>
                        <div class="product-tag-wrapper">
                            <div class="product-tag"><span class="product-tag-item-text">Ready to Ship</span>
                            </div>
                        </div>
                        <div class="product-extra-wrapper">
                            <div class="product-price"><span class="price-number">$<b>{{$shop->price}}</b>.23 -
                                    $<b>0</b>.25</span>
                            </div>
                            <div class="product-moq"><span class="product-moq-number">Min. Order: 100
                                    pieces</span>
                            </div>
                            <div class="product-shipping">
                                <div>Shipping per piece: $0.07</div>
                            </div>
                            <div class="product-shipping">
                                <div>{{$shop->description}}</div>
                            </div>
                        </div>
                        <div class="pt-4">
                            <button type="button" class="btn btn-submit rounded-full p-1 text-base text-white"
                                    style="background-color: orange;" 
                                    data-bs-toggle="offcanvas" 
                                    data-bs-target="#offcanvasWithCustomWidth">
                                Contact supplier
                            </button>
                            <button>Chat now</button>
                        </div>

                    </div>
                    @endforeach
                    

                </div>
            </div>
        </div>
    </div>
</div>