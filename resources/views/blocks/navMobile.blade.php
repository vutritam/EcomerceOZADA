<!-- Offcanvas -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithCustomWidth-menu"
            aria-labelledby="offcanvasWithCustomWidthLabel" style="width: 600px;">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasWithCustomWidthLabel">OZADA.com</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="sidebar">
                    <ul class="menu">
                        <li>
                            <a href="#">
                                <span>Menu 3</span>
                                <span class="material-symbols-outlined">
                                    keyboard_arrow_down
                                </span>
    
                            </a>
                               <!-- Nội dung của offcanvas -->
                               <ul class="submenu">
                                <li class="flex items-center gap-2">
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
                                    <div class="flex items-center gap-2">
                                        <span class="material-symbols-outlined">
                                            public
                                        </span>
                                        <span>English-USD</span>
                                    </div>
                                </li>
                            </ul>
                        </li>
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
                        
                        @if(request()->is('products'))
                        <li>
                            <a href="#">
                                <span>Danh mục sản phẩm</span>
                                <span class="material-symbols-outlined">
                                    keyboard_arrow_down
                                </span>
    
                            </a>
                            <ul class="submenu">
                                @foreach ($categories as $categories)
                                    <li>
                                        <div class="flex items-center gap-2">
                                            <input type="checkbox" class="category-checkbox" value="{{$categories->id}}" />
                                            <a>{{$categories->name}}</a>
            
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                       @endif
                    </ul>
                </div>
                {{-- menu products --}}
                {{-- <div class="sider-bar rounded-3xl" style="margin-right:10px;background-color: rgb(255, 255, 255);">
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
                    
        
                </div> --}}
            </div>
        </div>