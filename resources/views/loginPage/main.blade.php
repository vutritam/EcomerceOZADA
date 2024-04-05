
<div class="main-login-container">
    <div class="login-container">
        <div class="login-form">
            <h2 class="login-title">
                <img src="./images/Artboard5.png" width="100" />
            </h2>
            <form method="POST" action="{{ route('handleLogin') }}">
                @csrf
            <div class="form-group">
                <label for="email" class="form-label">Account</label>
                <input type="email" id="email" name="email" class="form-input" placeholder="Nhập email của bạn">
            </div>
            
            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu:</label>
                <input type="password" id="password" name="password" class="form-input" placeholder="Nhập mật khẩu của bạn">
            </div>
            <div class="form-group">
                <span><input type="checkbox" /></span>
                <span>Stay signed in</span>
            </div>
                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            <button type="submit" class="login-button">Đăng nhập</button>
            </form>
        </div>
    </div>

</div>