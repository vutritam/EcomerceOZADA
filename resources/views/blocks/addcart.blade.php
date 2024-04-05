<!-- Offcanvas -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithCustomWidth"
            aria-labelledby="offcanvasWithCustomWidthLabel" style="width: 600px;">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasWithCustomWidthLabel">Chi tiết sản phẩm</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <!-- Nội dung của offcanvas -->
                <div class="p-4 " id="product-detail">
                    <h2 class="text-lg font-semibold mb-4">Product Detail</h2>
                    <div id="product-detail-id">
                        <section class="lazy slider" data-sizes="50vw" id="section-img">
                            <div>
                               
                            {{-- <div>
                              <img data-lazy="https://via.placeholder.com/350x300?text=1-350w"
                                data-srcset="https://via.placeholder.com/650x300?text=1-650w 650w, https://via.placeholder.com/960x300?text=1-960w 960w"
                                data-sizes="100vw">
                            </div>
                            <div>
                              <img data-lazy="https://via.placeholder.com/350x300?text=2-350w"
                                data-srcset="https://via.placeholder.com/650x300?text=2-650w 650w, https://via.placeholder.com/960x300?text=2-960w 960w"
                                data-sizes="100vw">
                            </div>
                            <div>
                              <img data-lazy="https://via.placeholder.com/350x300?text=3-350w"
                                data-srcset="https://via.placeholder.com/650x300?text=3-650w 650w, https://via.placeholder.com/960x300?text=3-960w 960w"
                                data-sizes="100vw">
                            </div>
                            <div>
                              <img data-lazy="https://via.placeholder.com/350x300?text=4-350w"
                                data-srcset="https://via.placeholder.com/650x300?text=4-650w 650w, https://via.placeholder.com/960x300?text=4-960w 960w"
                                data-sizes="100vw">
                            </div>
                            <div>
                              <img data-lazy="https://via.placeholder.com/350x300?text=5-350w"
                                data-srcset="https://via.placeholder.com/650x300?text=5-650w 650w, https://via.placeholder.com/960x300?text=5-960w 960w"
                                data-sizes="100vw">
                            </div>
                            <div>
                              <!-- this slide should inherit the sizes attr from the parent slider -->
                              <img data-lazy="https://via.placeholder.com/350x300?text=6-350w"
                                data-srcset="https://via.placeholder.com/650x300?text=6-650w 650w, https://via.placeholder.com/960x300?text=6-960w 960w">
                            </div> --}}
                          </section>
                    </div>
                    <!-- Product price -->
                    <div class="mb-4">
                        <p class="text-gray-600" id="product-name"></p>
                    </div>
                    <div class="mb-4">
                        <p class="text-gray-600" id="product-price"></p>
                    </div>
                    <!-- Price before shipping -->
                    <div class="mb-4">
                        <p class="text-gray-600" id="product-description"></p>
                    </div>
                    <div class="mb-4">
                        <p class="text-gray-600" id="product-categories"></p>
                    </div>
                    <!-- Quantity pricing -->
                    <div class="mb-4 flex">
                        <p class="text-gray-600">Quantity Pricing:</p>
                        <ul class="list-disc ml-8 flex">
                            <li id="product-quantity"></li>
                            <li>50 - 4999 pieces: $1.75</li>
                        </ul>
                    </div>
                    <!-- Color options -->
                    <div class="mb-4 flex items-center">
                        <p class="text-gray-600">Color:</p>
                        <ul class="list-disc ml-8 ">
                            <li id="product-color">White</li>
                        </ul>
                    </div>
                    <!-- Compatible models -->
                    <div class="mb-4">
                        <p class="text-gray-600">Compatible Model:</p>
                        <ul class="list-disc ml-8 flex flex-wrap gap-2">
                            <li class="border-2 rounded-3xl p-2  h-12">For iPhone 13 Pro</li>
                            <li class="border-2 rounded-3xl p-2  h-12">For iPhone 13 Pro</li>
                            <li class="border-2 rounded-3xl p-2  h-12">For IPhone 13</li>
                            <li class="border-2 rounded-3xl p-2  h-12">FOR iPhone 13 pro max</li>
                            <li class="border-2 rounded-3xl p-2  h-12">for iPhone 15 plus</li>
                            <li class="border-2 rounded-3xl p-2  h-12">For iPhone14</li>
                            <li class="border-2 rounded-3xl p-2  h-12">For iPhone 14 pro</li>
                            <li class="border-2 rounded-3xl p-2  h-12">For iPhone 14 pro max</li>
                            <li class="border-2 rounded-3xl p-2  h-12">for iPhone 15</li>
                            <li class="border-2 rounded-3xl p-2  h-12">for iPhone 15 Pro</li>
                            <li class="border-2 rounded-3xl p-2  h-12">for iPhone 15 Pro Max</li>
                            <li class="border-2 rounded-3xl p-2  h-12">for iPhone 14 plus</li>
                            <li class="border-2 rounded-3xl p-2  h-12">For Galaxy S24 Ultra</li>
                            <li class="border-2 rounded-3xl p-2  h-12">For Galaxy S24</li>
                            <li class="border-2 rounded-3xl p-2  h-12">For Galaxy S24 Plus</li>
                        </ul>
                    </div>
                    <!-- Package options -->
                    <div class="mb-4">
                        <p class="text-gray-600">Package:</p>
                        <ul class="list-disc ml-8">
                            <li>PVC box: $1.80</li>
                            <li>OPP BAG: $1.80</li>
                        </ul>
                    </div>
                    <!-- Select variations and quantity -->
                    <div class="mb-4">
                        <p class="text-gray-600">Select Quantity:</p>
                        <div class=" border border-gray-300 rounded-lg px-3 py-2">
                            <input class="" type="number" id="quantity"
                                class="w-16 bg-gray-100 text-center border-none focus:outline-none" value="1" min="1">
                        </div>
                    </div>
                    <!-- Shipping total -->

                    <div class="sticky top-0" id="addCartContainer">
                        <!-- Các thông tin sản phẩm -->
                        <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
                            <div class="p-4">
                                <!-- Chi tiết sản phẩm -->
                                <!-- ... -->

                                <!-- Shipping Total -->
                                <div class="mb-4">
                                    <p class="text-gray-600">Shipping Total:</p>
                                    <p>$7.13</p>
                                </div>

                                <!-- Subtotal -->
                                <div class="mb-4">
                                    <p class="text-gray-600">Subtotal:</p>
                                    <p>$7.13</p>
                                </div>

                                <!-- Nút "Thêm vào giỏ hàng" -->
                                <button 
                                    class="bg-blue-500 addToCartBtn text-white px-4 py-2 rounded hover:bg-blue-600">Add to
                                    Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>