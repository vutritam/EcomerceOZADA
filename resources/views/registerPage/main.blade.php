<div class="main-register-container">
    <div class="register-container">
        <div class="register-form">
            <h2 class="register-title">Đăng ký</h2>
            <form method="POST" action="{{ route('store') }}">
                @csrf
                <div class="form-group">
                    <label for="country" class="form-label">Country/Region:</label>
                    <select id="country" class="form-input" name="country_region">
                        <option value="Vietnam">Vietnam</option>
                        <!-- Thêm các quốc gia khác vào đây -->
                    </select>
                    
                    {{-- <p style="color: red">{{$errors->get('country_region')}}</p> --}}
                </div>
                @if($errors->has('country_region'))
                        @foreach($errors->get('country_region') as $error)
                            <p style="color: red">{{ $error }}</p>
                        @endforeach
                    @endif
                <div class="form-group">
                    <label class="form-label">Please select trade role:</label>
                    <input type="radio" id="buyer" name="trade_role" value="Buyer">
                    <label for="buyer">Buyer</label>
                    <input type="radio" id="seller" name="trade_role" value="Seller">
                    <label for="seller">Seller</label>
                    <input type="radio" id="both" name="trade_role" value="Both">
                    <label for="both">Both</label>
                    
                </div>
                @if($errors->has('trade_role'))
                        @foreach($errors->get('trade_role') as $error)
                            <p style="color: red">{{ $error }}</p>
                        @endforeach
                    @endif
                <div class="form-group">
                    <label for="email" class="form-label">Email Address:</label>
                    <input type="email" id="email" name="email" class="form-input"
                        placeholder="Please set the email as the login name.">
                       
                </div>
                @if($errors->has('email'))
                @foreach($errors->get('email') as $error)
                    <p style="color: red">{{ $error }}</p>
                @endforeach
            @endif
                <div class="form-group">
                    <label for="password" class="form-label">Login Password:</label>
                    <input type="text" name="password" id="password" class="form-input" placeholder="Set the login password">
                    
                </div>
                @if($errors->has('password'))
                @foreach($errors->get('password') as $error)
                    <p style="color: red">{{ $error }}</p>
                @endforeach
            @endif
                <div class="form-group">
                    <label for="confirm-password" class="form-label">Confirm Password:</label>
                    <input type="text" name="password_confirmation" id="confirm-password" class="form-input"
                        placeholder="Enter the login password again">
                </div>
                @if($errors->has('password_confirmation'))
                @foreach($errors->get('password_confirmation') as $error)
                    <p style="color: red">{{ $error }}</p>
                @endforeach
            @endif
                <div class="form-group">
                    <label for="company-name" class="form-label">Company Name:</label>
                    <input type="text" id="company-name" name="company_name" class="form-input"
                        placeholder="Please enter your company name">
                </div>
                @if($errors->has('company_name'))
                @foreach($errors->get('company_name') as $error)
                    <p style="color: red">{{ $error }}</p>
                @endforeach
            @endif
                <div class="form-group">
                    <label class="form-label">Full name:</label>
                    <input type="text" id="first-name" class="form-input"
                        placeholder="Please enter your first name">
                    <input type="text" id="last-name" name="full_name" class="form-input" placeholder="Please enter your last name">
                    
                </div>
                @if($errors->has('full_name'))
                    @foreach($errors->get('full_name') as $error)
                        <p style="color: red">{{ $error }}</p>
                    @endforeach
                @endif
                <div class="form-group">
                    <label for="tel" class="form-label">Tel:</label>
                    <input type="tel" name="phone_number" id="tel" class="form-input" placeholder="84 - area - phone number">
                   
                </div>
                @if($errors->has('phone_number'))
                @foreach($errors->get('phone_number') as $error)
                    <p style="color: red">{{ $error }}</p>
                @endforeach
            @endif
                <div class="form-group">
                    <label for="verify" class="form-label">Verify:</label>
                    <div class="flex items-center w-full justify-between">
                        <input type="range" class="form-range" min="0" max="100" value="0" id="customRange1">
                        <p class="mt-3">Giá trị hiện tại: <span id="rangeValue">50</span></p>
                    </div>
                    {{-- <p style="color: red">{{$errors->get('email')}}</p> --}}
                </div>
                <div class="form-group items-center">
                    <input type="checkbox" id="agree" class="form-checkbox">
                    <label for="agree" class="form-checkbox-label">I agree to (a) Free Membership Agreement, (b)
                        Terms of Use, and (c) Privacy Policy. I agree to receive more information from Alibaba.com
                        about its products and services.</label>
                </div>
                <button type="submit" class="register-button">Agree and Register</button>
            
           
        </div>
        {{-- tạo shop mới nếu trade role là seller --}}
        <div class="container mx-auto p-4 hidden">
            <h1 class="text-3xl font-bold mb-4">Tạo Shop Mới</h1>
            <form>
                <div class="mb-4">
                    <label for="shopName" class="block text-sm font-medium text-gray-700">Tên Shop</label>
                    <input type="text" id="shopName" name="shopName" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                </div>
                <div class="mb-4">
                    <label for="shopDescription" class="block text-sm font-medium text-gray-700">Mô Tả</label>
                    <textarea id="shopDescription" name="shopDescription" class="mt-1 p-2 border border-gray-300 rounded-md w-full"></textarea>
                </div>
                <div class="mb-4">
                    <label for="shopLogo" class="block text-sm font-medium text-gray-700">Logo</label>
                    <input type="file" id="shopLogo" name="shopLogo" accept="image/*" class="mt-1">
                </div>
                <div class="mb-4">
                    <label for="user" class="block text-sm font-medium text-gray-700">Do User Nào Tạo</label>
                    <select id="user" name="user" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                        <option value="1">User 1</option>
                        <option value="2">User 2</option>
                        <!-- Thêm các option khác tùy theo số lượng user -->
                    </select>
                </div>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Tạo Shop</button>
            </form>
        </div>
        
    </div>
</div>