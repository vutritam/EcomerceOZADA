<header class="header-container ">
    @if(request()->is('/') )
    <div class="bg-gray-100 border border-gray-300 rounded-lg p-3 shadow-md show-ads" >
        <div class="flex items-center justify-between">
            <h2 class="text-base font-semibold text-gray-800">Quảng cáo</h2>
            <button class="text-gray-500 hover:text-gray-600 focus:outline-none" id='clear-ads'>
                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 12.586l-3.293 3.293-1.414-1.414L8.586 11 5.293 7.707l1.414-1.414L10 9.172l3.293-3.293 1.414 1.414L11.414 11l3.293 3.293-1.414 1.414L10 12.586z"/></svg>
            </button>
        </div>
        <p class="mt-1 text-sm text-gray-600">Quảng cáo thương hiệu lên đến 80% dành cho newbie</p>
        <div class="mt-2">
            <a href="#" class="block bg-blue-500 hover:bg-blue-600 text-white text-center font-semibold py-1 px-3 rounded-lg transition duration-300 ease-in-out">Try cập ngay</a>
        </div>
    </div>
    @endif
    <div class="header-top" id="sticky-element">
        <div class="header-box">
            <div class="logo">
            </div>
            <div class="relative">
                <!-- Search input -->
                <div id="search-all" class=" flex items-center rounded-full border-2"
                style="width: 600px; border: 2px solid orangered;">
                <input id="searchInput" style="flex-grow: 1;outline: none;margin-left: 5px; color: #0c0c0c;"
                    placeholder="Tìm kiếm sản phẩm" />
                <span class="material-symbols-outlined text-black">
                    photo_camera
                </span>
                <button class="btn-search rounded-full flex items-center"> <span class="material-symbols-outlined">
                        search
                    </span><span>Tìm kiếm</span></button>
                    
            </div>
            
                <!-- Search results dropdown -->
                <div class="absolute w-full mt-2 bg-white border border-gray-300 rounded-md shadow-lg hidden" id="searchDropdown">
                    <!-- Recent searches -->
                    <div class="py-2 px-4 border-b border-gray-300">
                        <h3 class="text-sm font-semibold text-gray-700">Recent Searches</h3>
                        <ul class="mt-1" >
                            <li class="flex justify-between py-1">
                                <span class="text-sm text-gray-600">Keyword 1</span>
                                <button class="text-gray-500 hover:text-red-500 focus:outline-none">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 12.586l-3.293 3.293-1.414-1.414L8.586 11 5.293 7.707l1.414-1.414L10 9.172l3.293-3.293 1.414 1.414L11.414 11l3.293 3.293-1.414 1.414L10 12.586z"/></svg>
                                </button>
                            </li>
                            <!-- Add more recent searches here -->
                        </ul>
                    </div>
                    
                    <!-- Search results -->
                    <div class="py-2 px-4" id="searchResults">
                        <!-- Single search result -->
                        <div class="flex items-center py-2 border-b border-gray-300" id="box-research">
                            <img src="https://via.placeholder.com/50" alt="Product Image" class="w-12 h-12 object-cover rounded-md">
                            <div class="ml-3">
                                <h4 class="text-gray-800 font-semibold">Product Name</h4>
                                <p class="text-gray-600">$19.99</p>
                            </div>
                        </div>
                        <!-- Add more search results here -->
                    </div>
                </div>
            </div>
            
            <div class="header-nav" id='header-nav-bottom'>
                <nav>
                    <ul>
                        <li>
                            <div class="tnh-current-country relative" aria-describedby="popup-1">
                                <div class="deliver-span hover:bg-blue-600">Deliver to:</div>
                                <div class="tnh-country-flag flex items-center gap-2">
                                    <img style="width: 30px; height: 20px;"
                                        src="https://s.alicdn.com/@u/mobile/g/common/flags/1.0.0/assets/vn.png"
                                        loading="lazy">
                                    <span> VN</span>
                                </div>
                                <div
                                    class="absolute top-full left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-sm px-4 py-2 rounded opacity-0 pointer-events-none transition-opacity duration-300 tooltip">
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center">
                                            <input type="text" placeholder="Username"
                                                class="mr-2 px-2 py-1 rounded bg-gray-700 text-white">
                                            <input type="password" placeholder="Password"
                                                class="mr-2 px-2 py-1 rounded bg-gray-700 text-white">
                                            <button
                                                class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Submit</button>
                                        </div>
                                        <svg class="fill-current text-gray-800 h-4 w-4 cursor-pointer" x="0px"
                                            y="0px" viewBox="0 0 255 255" xml:space="preserve">
                                            <polygon points="0,255 127.5,127.5 255,255" />
                                        </svg>
                                    </div>
                                    <!-- Mũi tên -->
                                    <div
                                        class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-4 h-4 text-gray-800">
                                        <svg class="fill-current" viewBox="0 0 255 255">
                                            <polygon points="0,255 127.5,127.5 255,255" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#about" class="flex items-center gap-2"><span class="material-symbols-outlined">
                            public
                            </span><span>English-USD</span></a></li>
                            @if(auth()->check() && auth()->user()->role === 'user')
                                {{-- Hiển thị nội dung cho user --}}
                                <li> 
                                    <div class="dropdown">
                                        <div class="flex items-center gap-2">
                                            <button class="dropbtn"><img width="40px" height="40px" src="https://i.pinimg.com/736x/0d/64/98/0d64989794b1a4c9d89bff571d3d5842.jpg" /></button>
                                            <a class="dropbtn">{{ auth()->user()->full_name }}</a>
                                            </div>
                                        <div class="dropdown-content ">
                                            <form id="logoutForm" method="POST" action="{{ route('logout') }}" style="display: none;">
                                                @csrf <!-- Thêm token CSRF -->
                                            </form>
                                            
                                            <a id="logoutLink" href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                                                Logout
                                            </a>
                                            
                                            <a href="#">Đăng ký</a>
                                            <a href="#">Tài khoản</a>
                                        </div>
                                    </div>
                                    </li> 
                            @else
                                {{-- Hiển thị nội dung cho người dùng không phải user --}}
                                <li class="flex items-center justify-around">
                                    <span
                                            class="material-symbols-outlined">
                                            person
                                        </span>
                                    <a id="loginButton" href="{{ route('login') }}" >
                                        Sign in
                                    </a>
                                </li>
                                <li><a href="{{ route('register') }}"
                                        class="btn-search rounded-full "><span>Sign up</span></a></li>
                            @endif  
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="header-top-mobile" id="sticky-element">
        <div class="header-box-mobile">
            <div class="left-section">
                @if(auth()->check() && auth()->user()->role === 'user')
                <div class="dropdown">
                   <button class="dropbtn"><img width="40px" height="40px" src="https://i.pinimg.com/736x/0d/64/98/0d64989794b1a4c9d89bff571d3d5842.jpg" /></button>
                   <div class="dropdown-content ">
                      <form id="logoutForm" method="POST" action="{{ route('logout') }}" style="display: none;">
                         @csrf <!-- Thêm token CSRF -->
                      </form>
                      <a style="color: black">
                      {{ auth()->user()->full_name }}
                      </a>
                      <a id="logoutLink" href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                      Logout
                      </a>
                      <a href="#">Đăng ký</a>
                      <a href="#">Tài khoản</a>
                   </div>
                </div>
                @else
                <div class="dropdown">
                   <button class="dropbtn"><img width="60px" height="60px" src="https://i.pinimg.com/736x/0d/64/98/0d64989794b1a4c9d89bff571d3d5842.jpg" /></button>
                   <div class="dropdown-content ">
                      <a href="login">Đăng nhập</a>
                      <a href="register">Đăng ký</a>
                   </div>
                </div>
                @endif
                 
               </div>
               <div class="center-section">
                  <div class="relative p-1">
                     <!-- Search input -->
                     <div id="search-all" class=" flex items-center rounded-full border-2"
                        style="width: 600px; border: 2px solid orangered;">
                        <input id="searchInput-mobile" style="flex-grow: 1;outline: none;margin-left: 5px; color: #0c0c0c;"
                           placeholder="Tìm kiếm sản phẩm" />
                        <span class="material-symbols-outlined text-black">
                        photo_camera
                        </span>
                        <button class="btn-search rounded-full flex items-center"> <span class="material-symbols-outlined">
                        search
                        </span></button>
                     </div>
                     <!-- Search results dropdown -->
                     <div class="absolute w-full mt-2 bg-white border border-gray-300 rounded-md shadow-lg hidden" id="searchDropdown-mobile">
                        <!-- Recent searches -->
                        <div class="py-2 px-4 border-b border-gray-300">
                           <h3 class="text-sm font-semibold text-gray-700">Recent Searches</h3>
                           <ul class="mt-1" >
                              <li class="flex justify-between py-1">
                                 <span class="text-sm text-gray-600">Keyword 1</span>
                                 <button class="text-gray-500 hover:text-red-500 focus:outline-none">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                       <path d="M10 12.586l-3.293 3.293-1.414-1.414L8.586 11 5.293 7.707l1.414-1.414L10 9.172l3.293-3.293 1.414 1.414L11.414 11l3.293 3.293-1.414 1.414L10 12.586z"/>
                                    </svg>
                                 </button>
                              </li>
                              <!-- Add more recent searches here -->
                           </ul>
                        </div>
                        <!-- Search results -->
                        <div class="py-2 px-4" id="searchResults-mobile">
                           <!-- Single search result -->
                           <div class="flex items-center py-2 border-b border-gray-300" id="box-research">
                              <img src="https://via.placeholder.com/50" alt="Product Image" class="w-12 h-12 object-cover rounded-md">
                              <div class="ml-3">
                                 <h4 class="text-gray-800 font-semibold">Product Name</h4>
                                 <p class="text-gray-600">$19.99</p>
                              </div>
                           </div>
                           <!-- Add more search results here -->
                        </div>
                     </div>
                  </div>
               </div>
                  <div class="right-section">
                    <span class="material-symbols-outlined btn btn-submit rounded-full p-1 text-base text-white"
                    style="background-color: orange; width:2.5em" 
                    data-bs-toggle="offcanvas" 
                    data-bs-target="#offcanvasWithCustomWidth-menu">
                 menu
                 </span>
                  </div>
            <div class="header-nav" id='header-nav-bottom'>
                <nav>
                    <ul>
                        <li>
                            <div class="tnh-current-country relative" aria-describedby="popup-1">
                                <div class="deliver-span hover:bg-blue-600">Deliver to:</div>
                                <div class="tnh-country-flag flex items-center gap-2">
                                    <img style="width: 30px; height: 20px;"
                                        src="https://s.alicdn.com/@u/mobile/g/common/flags/1.0.0/assets/vn.png"
                                        loading="lazy">
                                    <span> VN</span>
                                </div>
                                <div
                                    class="absolute top-full left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-sm px-4 py-2 rounded opacity-0 pointer-events-none transition-opacity duration-300 tooltip">
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center">
                                            <input type="text" placeholder="Username"
                                                class="mr-2 px-2 py-1 rounded bg-gray-700 text-white">
                                            <input type="password" placeholder="Password"
                                                class="mr-2 px-2 py-1 rounded bg-gray-700 text-white">
                                            <button
                                                class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Submit</button>
                                        </div>
                                        <svg class="fill-current text-gray-800 h-4 w-4 cursor-pointer" x="0px"
                                            y="0px" viewBox="0 0 255 255" xml:space="preserve">
                                            <polygon points="0,255 127.5,127.5 255,255" />
                                        </svg>
                                    </div>
                                    <!-- Mũi tên -->
                                    <div
                                        class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-4 h-4 text-gray-800">
                                        <svg class="fill-current" viewBox="0 0 255 255">
                                            <polygon points="0,255 127.5,127.5 255,255" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#about" class="flex items-center gap-2"><span class="material-symbols-outlined">
                            public
                            </span><span>English-USD</span></a></li>
                            @if(auth()->check() && auth()->user()->role === 'user')
                                {{-- Hiển thị nội dung cho user --}}
                                <li> 
                                    <div class="dropdown">
                                        <div class="flex items-center gap-2">
                                        <button class="dropbtn"><img width="40px" height="40px" src="https://i.pinimg.com/736x/0d/64/98/0d64989794b1a4c9d89bff571d3d5842.jpg" /></button>
                                        <a class="dropbtn">{{ auth()->user()->full_name }}</a>
                                        </div>
                                        <div class="dropdown-content ">
                                            <form id="logoutForm" method="POST" action="{{ route('logout') }}" style="display: none;">
                                                @csrf <!-- Thêm token CSRF -->
                                            </form>
                                            
                                            <a id="logoutLink" href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                                                Logout
                                            </a>
                                            
                                            <a href="#">Đăng ký</a>
                                            <a href="#">Tài khoản</a>
                                        </div>
                                    </div>
                                    </li> 
                            @else
                                {{-- Hiển thị nội dung cho người dùng không phải user --}}
                                <li class="flex items-center justify-around">
                                    <span
                                            class="material-symbols-outlined">
                                            person
                                        </span>
                                    <a id="loginButton" href="{{ route('login') }}" >
                                        Sign in
                                    </a>
                                </li>
                                <li><a href="{{ route('register') }}"
                                        class="btn-search rounded-full "><span>Sign up</span></a></li>
                            @endif  
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="header-bottom" id="sticky-element-1">
        <div class="slider-container" id="sliderContainer">
            <div class="flex items-center gap-2 bussiness-text">
                <p>For bussiness</p>
                <div class="flex items-center gap-4 mt-3">
                    <a href="{{ route('product')}}" class="relative">
                       products
                    </a>
                    <a href="{{ route('showCart')}}" class="relative">
                        <span class="material-symbols-outlined">
                            shopping_cart
                        </span>
                        @if(session()->has('cart') && count(session('cart')) > 0)
                        <span style="top: -15px; right: -10px;" class="absolute bg-red-500 text-white rounded-full px-1 py-1 text-xs"></span>
                        @endif
                    </a>
                <a href="{{ route('show-order')}}" class="relative">
                        <span class="material-symbols-outlined">
                            shopping_bag
                        </span>
                        {{-- @if(session()->has('cart') && count(session('cart')) > 0) --}}
                        <span style="top: -15px; right: -10px;" class="absolute bg-red-500 text-white rounded-full px-1 py-1 text-xs"></span>
                        {{-- @endif --}}
                    </a>
                
                
                    @if(auth()->user() && auth()->user()->trade_role === 'seller')
                        @if(Session::has('has_shop') && Session::get('has_shop'))
                        <a href="{{ route('shops.show', ['id' => auth()->user()->id]) }}" class="btn btn-primary">Xem shop</a>
                    @else
                        <div><a href="{{ route('shops')}}">
                            <button class="flex items-center justify-center px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                            <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                                Tạo Shop
                            </button>
                            </a>
                        </div>
                    @endif
                    @endif
                </div>
            </div>
            @if(request()->is('/') )
            <div class="slides flex" id="slides">
              <div class="box horizontal-scroll">All categories<span class="material-symbols-outlined">
                widgets
                </span></div>
              <div class="box horizontal-scroll">Featured selections</div>
              <div class="box horizontal-scroll">Products</div>
              <div class="box horizontal-scroll">Ozada.com</div>
            </div>
            @endif
          </div>
        <div class="header-nav header-nav-desktop">
            <nav>
                <ul>
                    <li><a href="#home" class="flex items-center gap-2">
                        <span class="material-symbols-outlined">
                            menu
                            </span>
                        <span> categories</span>
                    </a>
                        <div class="nav-sub-menu ">
                            <div class="flex gap-2 justify-between p-4 ">
                                <div style="padding: 5px;max-height: 450px;overflow-y: auto; width: 400px;">
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                </div>
                                <div style="max-height: 450px;overflow-y: auto; width: 400px;">
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                </div>
                                <div style="max-height: 450px;overflow-y: auto; width: 400px;">
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                    <p>Điện thoại di động</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="#about">Featured selections</a></li>
                    <li><a href="#services">Trade Assurance</a></li>
                    <li><a href="#contact">Alibaba.com Membership</a></li>
                    <li>
                        <a href="{{ route('showCart')}}" class="relative">
                            <span class="material-symbols-outlined">
                                shopping_cart
                            </span>
                            @if(session()->has('cart') && count(session('cart')) > 0)
                            <span style="top: -15px; right: -10px;" class="absolute bg-red-500 text-white rounded-full px-1 py-1 text-xs"></span>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('show-order')}}" class="relative">
                            <span class="material-symbols-outlined">
                                shopping_bag
                            </span>
                            {{-- @if(session()->has('cart') && count(session('cart')) > 0) --}}
                            <span style="top: -15px; right: -10px;" class="absolute bg-red-500 text-white rounded-full px-1 py-1 text-xs"></span>
                            {{-- @endif --}}
                        </a>
                    </li>
                    
                </ul>
            </nav>
        </div>
        <div class="header-nav header-nav-desktop">
            <nav>
                <ul>
                    @if(auth()->user() && auth()->user()->trade_role === 'seller')
                    @if(Session::has('has_shop') && Session::get('has_shop'))
                    <a href="{{ route('shops.show', ['id' => auth()->user()->id]) }}" class="btn btn-primary">Xem shop</a>
                    @else
                    <li><a href="{{ route('shops')}}">
                        <button class="flex items-center justify-center px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                        <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                            Tạo Shop
                        </button>
                        </a>
                    </li>
                    @endif
                    
                    @endif
                    <li><a href="#about">Help Center</a></li>
                    <li><a href="#services">Get the app</a></li>
                    <li><a href="#contact">Become a supplier</a></li>
                </ul>
            </nav>
        </div>
    </div>

    @if(request()->is('products') || request()->is('carts') || request()->is('checkout') || request()->is('show-order'))
    <!-- Ẩn banner khi route là /products -->
    @else
   <banner class="banner-content justify-start items-center ">
    
        <div class="content-container" data-spm-anchor-id="a2700.product_home_newuser.0.i7.585967afpAmNh5">
            <div class="flex gap-9 m-auto w-11/12 flex-col md:p-0 p-2">
                <span class="text-xl">Learn about Alibaba.com</span>
                <h2 class="text-4xl font-semibold">The leading B2B ecommerce platform for global trade</h2>
                <div class="rounded-3xl md:h-14 p-1 bg-white flex items-center gap-2">
                    <div style="flex-grow: 1;">
                        <input placeholder="Nhập giá trị" class="outline-none w-full mx-2 text-black" />
                    </div>
                    <span class="material-symbols-outlined text-black">
                        photo_camera
                    </span>
                    <button class="btn-search rounded-full flex items-center"> <span
                            class="material-symbols-outlined">
                            search
                        </span><span class="btn-text-search">Tìm kiếm</span></button>

                </div>
                <div class="text-base flex items-center discover-box ">
                    <b class="mx-2">Frequently searched:</b>
                    <ul>
                        <li class="inline-block rounded-full h-12 border-2 p-2.5">Iphone 15 promax</li>
                        <li class="inline-block rounded-full h-12 border-2 p-2.5">sex toy</li>
                        <li class="inline-block rounded-full h-12 border-2 p-2.5">men shoes</li>
                    </ul>
                </div>
            </div>
        </div>
    </banner>
@endif
    
</header>