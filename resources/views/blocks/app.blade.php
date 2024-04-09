<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Include Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href={{ asset("js/slick/slick.css?v2022")}}>
    <link rel="stylesheet" type="text/css" href={{ asset("js/slick/slick-theme.css?v2022")}}>
    <link rel="stylesheet" type="text/css" href={{ asset("css/main.css")}}>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
    .slider-container {
        width: 100%;
        overflow: hidden;
    }
    .horizontal-scroll {
        width: 150px;
    height: 60px;
    background: rgb(255, 252, 252);
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.4) 0px 0px 10px;
    margin-right: 10px;
    flex-shrink: 0;
    display: flex;
    color: black;
    justify-content: center;
    align-items: center;
    gap:5px;
    }
    .slides {
        padding: 10px;
        overflow-x: auto;
        margin: 0 auto;
    }
    .slides::-webkit-scrollbar {
    display: none; /* Ẩn thanh cuộn ngang trên trình duyệt Chrome, Safari */
  }
    a {
        text-decoration: none;
        color: inherit;
        margin: 0;
        padding: 0;
    }
    .checkout-success-box{
        flex-grow: 1;
    margin: 0px 10rem;
    }
    ul,
    p {
        padding: 0;
        margin: 0;
    }
    ul li {
        list-style: none;
    }

    body {
        font-family: "Aleo", serif;
        font-family: "Aleo", serif;
        font-optical-sizing: auto;
        font-optical-sizing: auto;
        font-style: normal;
        font-style: normal;
        font-size: clamp(3rem, 1rem +10vw, 7rem);
        overflow-x: hidden;
    
    }

    .header-container {
        color: white;
        height: 100%;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url('https://s.alicdn.com/@img/imgextra/i4/O1CN01ustqhi1Tz44lu4arh_!!6000000002452-0-tps-3840-1248.jpg_q60.jpg');
    }

    .header-top {
        max-width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 72px;
        min-height: 72px;

    }

    .header-box {
        width: 95%;
        margin: 0 auto;
        align-items: center;
        display: flex;
        justify-content: space-between;
        height: 100%;
    }
    .header-box-mobile {
        margin: 0 auto;
        align-items: center;
        display: flex;
        justify-content: space-between;
        height: 100%;
    }

    #sticky-element {
        position: -webkit-sticky;
        /* Cho Safari */
        position: sticky;
        top: 0;
        /* Phần tử sẽ bắt đầu bám vào đỉnh của cửa sổ khi cuộn */
        z-index: 100;
        /* Đảm bảo phần tử hiển thị trên cùng khi cuộn */
        background-color: white;
        /* Màu nền mặc định */
        transition: background-color 0.5s ease;
        /* Sử dụng transition để tạo hiệu ứng mượt mà */
    }

    .header-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 95%;
        margin: 0 auto;
    }

    .header-nav ul {
        display: flex;
        gap: 28px;
        align-items: center;
        color: black;
    }

    .logo {
        background-image: url(./images/Artboard5.png);
        background-repeat: no-repeat;
        background-position: center center;
        width: 14%;
        height: 34%;
        background-size: cover;
    }

    .home-dot-element {
        padding: 40px 20px;
        width: 276px;
        background-color: hsla(0, 0%, 100%, .03);

    }

    .nav-cube {
        border-radius: 16px;
        display: block;
        min-height: 338px;
        padding: 40px;
        text-decoration: none;
    }

    .nav-cube:hover {
        background-color: rgba(255, 102, 0, .12);
        cursor: pointer;
    }

    .banner-content {
        display: flex;
        height: 504px;
        margin: 0 auto;
    }


    .nav-wrapper {
        background-color: #3a190b;


        padding: 60px 0;
    }

    .nav-wrapper-container {
        width: 90%;
        display: flex;
        height: 300px;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-justify-content: space-between;
        justify-content: space-between;
        margin: auto;
    }

    .btn-search {
        width: 125px;
        background-color: orange;
        padding: 10px;
    }

    .number-item {
        position: relative;
    }

    .number-item span {
        color: #f60;
        font-size: 36px;
        font-weight: 500;
        letter-spacing: -.73px;
        line-height: 44px;
    }

    .number-item:before {
        background-color: #ddd;
        border-radius: 2px;
        content: "";
        display: inline-block;
        height: 86%;
        left: -13px;
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        width: 4px;
    }

    .lead {
        font-size: 1.5rem;
        font-weight: 300;
    }

    .container {
        margin: 50px auto;
    }

    .slider {
        width: 100%;
        margin: 5px auto;
    }

    .slick-slide {
        margin: 0px 5px;
    }

    .slick-slide img {
        width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }

    .w-500 {
        width: 500px;
    }

    .slick-slide {
        transition: all ease-in-out .3s;
        opacity: .2;
    }

    .slick-active {
        opacity: .5;
    }

    .slick-current {
        opacity: 1;
    }

    ul li:hover .full-link_icon_wrapper {
        transform: scale(1.5);
        background: #f60 !important;
        color: #fcfcfc !important;
    }

    .full-link_item_desc {
        display: none;
    }

    .full-link_item_wrapper li:hover .full-link_content .full-link_item_desc {
        display: block;
        margin: 10px;
    }

    .full-link_item_wrapper li {
        width: 534px;
        padding: 18px 0;
    }

    .security-floor {

        background-image: url(https://s.alicdn.com/@img/imgextra/i1/O1CN01ZU454s273tH4l7azv_!!6000000007742-0-tps-3000-1394.jpg_q60.jpg);
        background-color: #49271c;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: 1920px 946px;
        color: #fff;
        margin: auto;
        overflow: hidden;
        width: 100%;
        height: 100%;
    }

    .tnf-content ul li {
        padding: 8px 0;
    }

    .category-number-1 {
        background: #949494;
        background-image: url(https://s.alicdn.com/@sc04/kf/A556f6a79905641a4a669592a030b3e87a.jpg_350x350.jpg);
        background-color: #949494;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 16px;
    }

    .category-number-2 {
        background: #949494;
        background-image: url(https://s.alicdn.com/@sc04/kf/H80b0e8fe0793438c9f6a90dcdb892c28x.jpg_350x350.jpg);
        background-color: #949494;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 16px;
    }

    .category-number-3 {
        background: #949494;
        background-image: url(https://s.alicdn.com/@sc04/kf/Hfa5e13997a164cc3b21bdf8b537e86c1T.jpeg_350x350.jpg);
        background-color: #949494;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 16px;
    }

    .category-number-4 {
        background: #949494;
        background-image: url(https://s.alicdn.com/@sc04/kf/Hee77c3c5e09542e9bfae60f0f4f9342fQ.jpg_350x350.jpg);
        background-color: #949494;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 16px;
    }

    .img-factory {
        background-image: url(//s.alicdn.com/@img/imgextra/i3/O1CN01blSupV1NpY5ZcwvIj_!!6000000001619-2-tps-920-920.png);
        background-color: #949494;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 16px;
    }

    .img-factory-1 {
        background-image: url(https://s.alicdn.com/@img/imgextra/i1/O1CN01twP5Jv1tjCIiCOQAv_!!6000000005937-2-tps-920-920.png);
        background-color: #949494;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 16px;
    }

    .img-factory-2 {
        background-image: url(https://s.alicdn.com/@img/imgextra/i1/O1CN01Lcuxd21Gs6zkRBFHe_!!6000000000677-2-tps-920-920.png);
        background-color: #949494;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 16px;
    }

    .tnf-getapp,
    .sns-and-app img {
        height: 40px;
    }

    .tooltip {
        user-select: none;
    }

    /* menu */
    .header-nav nav ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .header-nav nav ul li {
        position: relative;
    }

    .header-nav nav ul li.nav-sub-menu {
        display: block;
        padding: 10px 20px;
        text-decoration: none;
        color: #333;
    }

    .header-nav nav ul li:hover>.nav-sub-menu {
        display: block;
        color: rgb(12, 12, 12);
    }

    .header-nav nav ul li .nav-sub-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #fff;
        border: 1px solid #ccc;
        z-index: 10;
    }
    .header-nav nav ul li .nav-sub-menu p{
        margin-bottom: 10px;
    }
/* product */

.tag ul li {
        display: inline-block;
        list-style: none;
        padding: 0;
        margin: 0;
        font-size: 16px;
    }

    .tag li:not(:last-child):after {
        content: " ";
        font-weight: bold;
    }

    .tag li:nth-child(even) {
        color: #888;
    }

    .tag li:nth-child(odd) {
        color: #333;
    }

    .scroll-showcase-cell-image {
        width: 100px;

    }

    .product-tag .product-tag-item-text {
        background: #fff4ed;
        border-radius: 2px;
        color: #f60;
        font-size: 12px;
        height: 16px;
        line-height: 16px;
        white-space: nowrap;
    }

    .product-title {
        color: #333;
        cursor: pointer;
        display: -webkit-box;
        font-size: 14px;
        text-overflow: ellipsis;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
    }

    .product-extra-line {
        align-items: center;
        display: flex;
        flex-wrap: nowrap;
        justify-content: flex-start;
        margin-bottom: 4px;
    }

    .list-item {
        background-color: #fcfcfc;
        border-radius: 5px;
    }

    .list-item:hover {
        box-shadow: 0 0 12px 0 rgba(0, 0, 0, .2);
        border-radius: 5px;
    }

    /* menu item siderbar */
    .sidebar {
        width: 100%;
        color: #fff;
    }

    .sider-bar .sider-bar-price ul li {
        padding: 7px 5px;
    }

    .menu {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }


    .menu li a {
        display: flex;
        align-items: center;
        padding: 10px;
        text-decoration: none;
        color: #0c0c0c;
        position: relative;
        justify-content: space-between;
    }

    .menu li a .arrow-icon {
        margin-left: auto;
        transform: rotate(-90deg);
        transition: transform 0.3s ease;
    }

    .submenu {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
        opacity: 0;

    }
    .main-right {
        width: 81%;
    }
    .submenu input {
        color: #0c0c0c;
        margin-left: 5px;
    }

    .menu li.active .submenu {
        max-height: 200px;
        /* Hoặc một giá trị lớn hơn để phù hợp với kích thước thực tế của submenu */
        opacity: 1;
        padding: 10px;
        color: black;
    }

    /* end menu siderbar */

    .scroll-showcase-container {
        background: rgb(255, 255, 255);
        border-radius: 5px;
        padding: 40px 20px;
        box-shadow: 0 0 12px 0 rgba(0, 0, 0, .2);
    }

    /* end product */
    /* dropdown */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }
    .cart-icon {
        padding: 16px;
    position: fixed; /* Vị trí cố định trên màn hình */
    top: 17%; /* Khoảng cách từ phía trên */
    right: 20px; /* Khoảng cách từ phía phải */
    z-index: 99; /* Đảm bảo hiển thị trên các phần tử khác */
    cursor: pointer; /* Chỉ con trỏ thành dấu chỉ tay khi rê chuột qua icon */

    /* Tùy chỉnh kiểu của icon */
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    
}

.cart-icon img {
    width: 100%;
    height: auto;
}

.cart-count {
    position: absolute; /* Định vị với cha là .cart-icon */
    top: -5px; /* Đặt top là âm để đè lên phần trên của icon */
    right: -5px; /* Đặt right là âm để đè lên phần phải của icon */
    min-width: 30px; /* Đảm bảo kích thước tối thiểu */
    padding: 5px; /* Khoảng cách bao quanh nội dung */
    border-radius: 50%; /* Biểu tượng hình tròn */
    background-color: red; /* Màu nền */
    color: #fff; /* Màu chữ */
    font-size: 14px; /* Kích thước chữ */
    text-align: center; /* Căn chỉnh chữ giữa */
}

    /* // checkout */
        .timeline {
            
        height: 3px;
        background: rgb(100, 168, 245);
        }
        #timeline{
            width: 150px;
        }
        #timeline-1{
            width: 150px;
        }
        .timeline-1 {
            
        height: 3px;
        background: rgb(100, 168, 245);
        }
      
        .timeline-step {
            position: relative;
            width: 80px;
            height: 2px;
            background-color: #e2e8f0;
        }

        .timeline-step.active {
            background-color: #6366f1;
        }

        .timeline-step::after {
            content: '';
            position: absolute;
            top: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #e2e8f0;
            border: 2px solid #fff;
        }

        .timeline-step.active::after {
            background-color: #6366f1;
        }

        .timeline-step:first-child::before {
            display: none;
        }

        .timeline-step:last-child::after {
            display: none;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .checkout-step {
            animation: fadeIn 0.5s ease-in-out; /* Sử dụng keyframe để tạo hiệu ứng */
        }

        .checkout-step.hidden {
            display: none;
        }
        /* //loading fullpage */
        .loading-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.7);
    z-index: 9999;
    display: none;
}

.spinner {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border: 5px solid #f3f3f3; /* Light grey */
    border-top: 5px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
.scroll-showcase-container {
    overflow-x: auto; /* Hiện thanh cuộn ngang khi nội dung vượt quá */
}

.scroll-showcase-item {
    /* Thiết lập hiển thị flex cho các phần tử con */
    max-width: 100px; /* Thiết lập độ rộng tối thiểu cho mỗi phần tử con */
    flex: 0 0 auto; /* Không co giãn hoặc co lại phần tử con */
}
.toast-container {
    position: fixed;
    top: 62px; /* Thay đổi giá trị top tùy theo vị trí mong muốn */
    right: 10px; /* Thay đổi giá trị right tùy theo vị trí mong muốn */
    z-index: 10000; /* Đảm bảo Toasty nằm trên tất cả các phần tử khác */
  }

</style>

<body>
    <div>
    @include('blocks.loading')
    @include('blocks.header')
    <main>
        @include('blocks.navMobile')
        @include('blocks.toasty')
        @yield('content')
    </main>
    @include('blocks.footer')
</div>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-migrate-3.4.0.min.js"></script>
<script src={{asset("js/slick/slick.js?v2022")}} type="text/javascript" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
<script type="text/javascript">
        $(document).on('ready', function () {
            // Lấy tham chiếu đến thông báo Toasty
        var myToast = document.getElementById('myToast');

        // Kích hoạt thông báo Toasty
        var toast = new bootstrap.Toast(myToast);
                // When input is focused
        $('#searchInput-mobile').focus(function() {
            $('#searchDropdown-mobile').removeClass('hidden');
            // You can add additional logic here if needed
        });

        // When input loses focus
        $('#searchInput-mobile').blur(function() {
            // Delay hiding dropdown to allow click event on dropdown items
            setTimeout(function() {
                $('#searchDropdown-mobile').addClass('hidden');
            }, 200);
            // You can add additional logic here if needed
        });
        // search live product input ajax
        $('#searchInput-mobile').on('input', function() {
        var query = $(this).val().trim();

        if (query.length >= 1) {
           
            // Send AJAX request to the search route
            $.ajax({
                type: 'GET',
                url: '{{ route("searchProduct") }}',
                data: { query: query },
                success: function(response) {
                    // Process the search results and update the UI
                    $('#box-research').empty();
                    
                    var html = '';
                    if (response.data.length > 0) {
                        response.data.forEach(function(product) {
                            html += '<div class="flex items-center py-2 border-b border-gray-300" id="box-research">';
                            html += '<img src="' + product.image + '" alt="Product Image" class="w-12 h-12 object-cover rounded-md">';
                            html += '<div class="ml-3">';
                            html += '<h4 class="text-gray-800 font-semibold">' + product.name + '</h4>';
                            html += '<p class="text-gray-600">$' + product.price + '</p>';
                            html += '</div>';
                            html += '</div>';
                        });
                    } else {
                        html += '<div class="flex items-center justify-center py-2 border-b border-gray-300" id="box-research">';
                        html += '<p style="color:black">Không tìm thấy sản phẩm nào :((</p>';
                        html += '</div>';
                    }
                    $('#searchResults-mobile').html(html);
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
             });
            } else {
                    html += '<div class="flex items-center justify-center py-2 border-b border-gray-300" id="box-research">';
                    html += '<p style="color:black">Không tìm thấy sản phẩm nào :((</p>';
                    html += '</div>';
                    // Clear search results if query is too short
                    $('#searchResults-mobile').html(html);
            }
        })
            // When input is focused
        $('#searchInput').focus(function() {
            $('#searchDropdown').removeClass('hidden');
            // You can add additional logic here if needed
        });

        // When input loses focus
        $('#searchInput').blur(function() {
            // Delay hiding dropdown to allow click event on dropdown items
            setTimeout(function() {
                $('#searchDropdown').addClass('hidden');
            }, 200);
            // You can add additional logic here if needed
        });
        // search live product input ajax
        $('#searchInput').on('input', function() {
        var query = $(this).val().trim();

        if (query.length >= 1) {
           
            // Send AJAX request to the search route
            $.ajax({
                type: 'GET',
                url: '{{ route("searchProduct") }}',
                data: { query: query },
                success: function(response) {
                    // Process the search results and update the UI
                    $('#box-research').empty();
                    
                    var html = '';
                    if (response.data.length > 0) {
                        response.data.forEach(function(product) {
                            html += '<div class="flex items-center py-2 border-b border-gray-300" id="box-research">';
                            html += '<img src="' + product.image + '" alt="Product Image" class="w-12 h-12 object-cover rounded-md">';
                            html += '<div class="ml-3">';
                            html += '<h4 class="text-gray-800 font-semibold">' + product.name + '</h4>';
                            html += '<p class="text-gray-600">$' + product.price + '</p>';
                            html += '</div>';
                            html += '</div>';
                        });
                    } else {
                        html += '<div class="flex items-center justify-center py-2 border-b border-gray-300" id="box-research">';
                        html += '<p style="color:black">Không tìm thấy sản phẩm nào :((</p>';
                        html += '</div>';
                    }
                    $('#searchResults').html(html);
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
             });
            } else {
                    html += '<div class="flex items-center justify-center py-2 border-b border-gray-300" id="box-research">';
                    html += '<p style="color:black">Không tìm thấy sản phẩm nào :((</p>';
                    html += '</div>';
                    // Clear search results if query is too short
                    $('#searchResults').html(html);
            }
        })
        window.onbeforeunload = function() {
        // Kích hoạt hiệu ứng loading fullpage ở đây
        $('#loading-overlay').show();
        };

        // Sau khi trang tải hoàn tất, ẩn loading fullpage
        window.onload = function() {
            // Ẩn loading fullpage ở đây
            $('#loading-overlay').hide();
        };
        var currentUrl = window.location.href;
     
        // if(currentUrl.includes('products')) {
        //     console.log(currentUrl);
        //     var elementSearch = $('#search-all');
        //     elementSearch.css('opacity', 1)
        // }
        // Kiểm tra nếu URL chứa một từ khóa nhất định
        if (currentUrl.includes('home')) {
            $('.header-nav').find('li').css('color', 'white');
        } 
        $('.relative').hover(function () {
            $(this).find('.tooltip').toggleClass('opacity-100');
        });
        if(!currentUrl.includes('products')) {
        $('.nav-sub-menu').hover(
            function () {
                $('.header-nav nav ul li').css('color','black');
                var stickyElement = $('#sticky-element');
                var stickyElement1 = $('#sticky-element-1');
                stickyElement.css('color', 'black');
                stickyElement.css('background-color', 'white');
                stickyElement1.css('color', 'black');
                stickyElement1.css('background-color', 'white');
            },
            function () {
                $('.header-nav nav ul li').css('color','white');
                var stickyElement = $('#sticky-element');
                var stickyElement1 = $('#sticky-element-1');
                stickyElement.css('width', '');
                stickyElement.css('color', 'white');
                stickyElement.css('background-color', 'transparent');
                stickyElement1.css('color', 'white');
                stickyElement1.css('background-color', 'transparent');
            }
        );
        }
        var rangeInput = $('#customRange1');
        var rangeValue = $('#rangeValue');

        // Thêm sự kiện 'input' để cập nhật giá trị hiển thị khi thanh trượt thay đổi
        rangeInput.on('input', function () {
            rangeValue.text($(this).val());
        });
        $('.menu li').click(function (event) {
            event.preventDefault();
            event.stopPropagation();
            $(this).toggleClass('active');
            $(this).find('.submenu').toggleClass('submenu-show');
            $(this).find('.arrow-icon').toggleClass('active');
        });
        $('.submenu').click(function (event) {
            event.stopPropagation();
        });
        $('.submenu input').click(function (event) {
            event.stopPropagation();
        });

        // Khi click vào nút dropdown
    $(".dropbtn").click(function(){
        // Nếu dropdown đang ẩn, hiển thị nó, ngược lại ẩn đi
        $(".dropdown-content").toggle();
    });
        // Đóng dropdown khi click bất kỳ nơi nào ngoài dropdown
        $(document).click(function(e) {
            if (!$(e.target).closest('.dropdown').length) {
                $(".dropdown-content").hide();
            }
        });
        $(window).scroll(function () {
            var stickyElement = $('#sticky-element');
            var elementSearch = $('#search-all');
            var scrollPosition = $(window).scrollTop();
            if(!currentUrl.includes('products')) {
                if (scrollPosition > 100 ) {
                stickyElement.css('width', '100%')
                $('.header-nav').find('li').css('color', 'black');
                elementSearch.css('opacity', 1)
                stickyElement.css('background-color', 'white'); // Đổi màu nền thành màu xanh khi scroll xuống 200px
            } else {
                $('.header-nav').find('li').css('color', 'white');
                elementSearch.css('opacity', 0)
                stickyElement.css('background-color', 'transparent'); // Đổi lại màu nền mặc định nếu scroll lên trên 200px
            }
            
            } else {
                $(".header-container").css("background-image", "none");
                $('.bussiness-text').css('color','black');

            }
            // Kiểm tra vị trí cuộn trang, thay đổi màu nền của phần tử sticky nếu scroll xuống một khoảng cụ thể
           
        });
        $(".center").slick({
            dots: true,
            infinite: true,
            centerMode: true,
            slidesToShow: 7,
            slidesToScroll: 3
        });
        $(".slide-language").slick({
            dots: true,
            infinite: true,
            centerMode: true,
            slidesToShow: 6,
            slidesToScroll: 3
        });
        $(".lazy").slick({
            lazyLoad: 'ondemand', // ondemand progressive anticipated
            infinite: true
        });
        
        $('.add-address').click(function() {
            $("#box-address").addClass("hidden");
            $("#show-add-address").removeClass("hidden");
        });
        $('#info-more').click(function() {
            $("#address-infomation").removeClass("hidden");
            $("#final-checkout").addClass("hidden");
        });
        $('.show-address').click(function() {
            $("#show-add-address").addClass("hidden");
            $("#show-list-address").removeClass("hidden");
        });
        $('.remove-box-address').click(function() {
            $("#show-add-address").addClass("hidden");
            $("#box-address").removeClass("hidden");
        });
        $('#clear-ads').click(function() {
            $(".show-ads").addClass("hidden");
        });
        $('#order-submit').click(function() {
            var id= $(".id-address").val();
            var productCount = $('#productCount').text();
            var shipping_address = $('.shipping_address').text();
            if (productCount == 0 ||  shipping_address.includes('Trống') || shipping_address.includes('Chưa có thông tin')) {
                var productCount = $('.error-cart').text('Bạn chỉ có thể đặt hàng khi có địa chỉ và sản phẩm!');
                return 
            } 
            // lấy tất cả id của product để tạo đơn hàng
            var productIds = [];
            var cartItems = $('.cart-item-checkout').map(function() {
                return {
                    id: $(this).data('product-id'),
                    price: $(this).data('product-price'),
                    quantity: $(this).data('product-quantity')
                };
            }).get();
            
            $.ajax({
                type: 'POST',
                url: '{{ route("createOrderCheckOut") }}',
                data: {_token: '{{ csrf_token() }}', products: cartItems, id: id },
                success: function(response) {
                    // Cập nhật UI
                    $('#loading-overlay').show();
                    if(response.status) {
                        var toastBody = myToast.querySelector('.toast-body');
                            // Cập nhật nội dung mới
                            toastBody.innerHTML = 'Tạo đơn hàng thành công!';
                            toast.show()
                        var html = '<div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">';
                            html += '<div class="flex">';
                            html += '<div class="py-1"><svg class="fill-current h-6 w-6 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9 13V9a1 1 0 112 0v4a1 1 0 11-2 0zm1-10a7 7 0 110 14 7 7 0 010-14z"/></svg></div>';
                            html += '<div>';
                            html += '<p class="font-bold">Đặt hàng thành công!</p>';
                            html += '<p class="text-sm">Đơn hàng của bạn đã được xác nhận và đang được xử lý.</p>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                        $('.checkout-success').html(html)
                        $('.checkout-success').removeClass('hidden')
                        $('.checkout-success').addClass('checkout-success-box')
                        $("#timeline-1").addClass("timeline-1");
                        $('#address-infomation').addClass('hidden')
                        $('.show-cart-checkout').addClass('hidden')
                        $('#final-checkout').addClass('hidden')
                        $('#loading-overlay').hide();


                    }
                    
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });
        $('#show-address-session').on('click', '.delete-address', function() {
            $('#loading-overlay').show();
            $.ajax({
                type: 'POST',
                url: '{{ route("deleteAddressSession") }}',
                data: {_token: '{{ csrf_token() }}'},
                success: function(response) {
                    // Cập nhật UI
                    $('#loading-overlay').hide();
                    $('#show-address-session').text('Địa chỉ nhận hàng: Chưa có địa chỉ nào');
                    $('.shipping_address').text('Trống');
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        })
        $('.delete-address').click(function() {
            $('#loading-overlay').show();
            $.ajax({
                type: 'POST',
                url: '{{ route("deleteAddressSession") }}',
                data: {_token: '{{ csrf_token() }}'},
                success: function(response) {
                    $('#loading-overlay').hide();
                    // Cập nhật UI
                    $('.show-address-session').text('Địa chỉ nhận hàng: Chưa có địa chỉ nào');
                    $('.shipping_address').text('Địa chỉ nhận hàng: Chưa có địa chỉ nào');
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });
        $('.confirm-list').click(function() {
            $('#loading-overlay').show();
            $("#show-add-address").removeClass("hidden");
            $("#timeline").addClass("timeline");
            $("#show-list-address").addClass("hidden");
            var confirmFlag = true
            $.ajax({
                type: 'POST',
                url: '{{ route("getAddress") }}',
                data: {_token: '{{ csrf_token() }}',confirm: confirmFlag},
                success: function(response) {
                    if(response.status) {
                        $('.shipping_address').empty();
                        $('#loading-overlay').hide();

                        // Lấy dữ liệu từ response AJAX và gán vào biến JavaScript
                    var addressId = response.data.id;
                    var contactName = response.data.contact_name;
                    var shippingAddress = response.data.shipping_address;
                    var contactPhone = response.data.contact_phone;
                    
                    // Tạo chuỗi HTML sử dụng dữ liệu vừa lấy được
                    var html = 'Địa chỉ nhận hàng: '+ response.data.shipping_address +' <span class="delete-address material-symbols-outlined">delete</span>'
                    var html2 = 
                        '<input class="id-address hidden" value="' + addressId + '"/>' +
                        '<p>Tên: <span>' + contactName + '</span></p>' +
                        '<p><span>Địa chỉ nhận hàng: ' + shippingAddress + '</span></p>' +
                        '<p>SĐT: <span>' + contactPhone + '</span></p>';
                        '<p>SĐT: <span>' + contactPhone + '</span></p>';
                        $('#show-address-session').html(html);
                        $('.shipping_address').html(html2);
                        var newId = response.data.id;
                        // Cập nhật giá trị của thuộc tính ID của phần tử input
                        $('.id-address').val(newId);
                        $('.error-cart').text('');
                    }   
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });
        //ajax 
            $('#product-cate').on('click', '.btn-submit', function() {
                var shopId = $(this).closest('.list-item').attr('data-shop-id');
                $.ajax({
                            type: 'POST',
                            url: '{{ route("store-add-cart") }}',
                            data: {_token: '{{ csrf_token() }}',id: shopId},
                            success: function(response) {
                                // Xử lý kết quả trả về
                                // console.log('Message:', response);
                                // for (let index = 0; index < 3; index++) {
                                //     html += '<div><img src="' + response.data.image + '" alt="' + response.data.image + '" data-sizes="100vw"></div>';
                                // }
                                html = '<div><img src="' + response.data.image + '" alt="' + response.data.image + '" data-sizes="100vw"></div>';
                                $('#section-img').append(html);
                                $('#product-detail-id').data('product_id', response.data.id);
                                $('#product-name').text('Tên sản phẩm: ' + response.data.name);
                                $('#product-price').text('Giá sản phẩm: ' + response.data.price);
                                $('#product-description').text('Mô tả: ' + response.data.description);
                                $('#product-categories').text('Danh mục: ' + response.data.category_name);
                                $('#product-color').text(response.data.color);
                                $('#product-quantity').text(response.data.quantity);
                            },
                            error: function(xhr, status, error) {
                                console.error('Error:', error);
                            }
                        });
        });
        $('.btn-submit').click(function() {
            var shopId = $(this).closest('.list-item').attr('data-shop-id');
        // Lấy dữ liệu từ form
        // Gửi yêu cầu Ajax
            $.ajax({
                type: 'POST',
                url: '{{ route("store-add-cart") }}',
                data: {_token: '{{ csrf_token() }}',id: shopId},
                success: function(response) {
                    // Xử lý kết quả trả về
                    // for (let index = 0; index < 3; index++) {
                    //     html += '<div><img src="' + response.data.image + '" alt="' + response.data.image + '" data-sizes="100vw"></div>';
                    // }
                    html = '<div><img src="' + response.data.image + '" alt="' + response.data.image + '" data-sizes="100vw"></div>';
                    $('#section-img').append(html);
                    $('#product-detail-id').data('product_id', response.data.id);
                    $('#product-name').text('Tên sản phẩm: ' + response.data.name);
                    $('#product-price').text('Giá sản phẩm: ' + response.data.price);
                    $('#product-description').text('Mô tả: ' + response.data.description);
                    $('#product-categories').text('Danh mục: ' + response.data.category_name);
                    $('#product-color').text(response.data.color);
                    $('#product-quantity').text(response.data.quantity);
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });

            
        });

        $('#addCartContainer').on('click', '.addToCartBtn', function() {
                var Id = $('#product-detail-id').data('product_id');
                var quantity= $('#quantity').val();
                // Gửi yêu cầu Ajax
                $.ajax({
                    type: 'POST',
                    url: '{{ route("add") }}',
                    data: {_token: '{{ csrf_token() }}',id: Id, quantity: quantity},
                    success: function(response) {
                        // Xử lý kết quả trả về
                        if(response.status) {
                            // alert('thêm thành công')
                            var toastBody = myToast.querySelector('.toast-body');
                            // Cập nhật nội dung mới
                            toastBody.innerHTML = 'Thêm sản phẩm thành công';
                            toast.show()
                            var x = parseInt($('.cart-count').text());
                            $('.cart-count').text(x + 1);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
        });
        $('.list-cart-checkout').on('click', '.delete-item-checkout', function() {
                var productId = $(this).closest('.cart-item-checkout').data('product-id');
                // Gửi yêu cầu Ajax
                $.ajax({
                    type: 'POST',
                    url: '{{ route("delete") }}',
                    data: {_token: '{{ csrf_token() }}',id: productId},
                    success: function(response) {
                        // Xử lý kết quả trả về
                        if(response.status) {
                            var toastBody = myToast.querySelector('.toast-body');
                            // Cập nhật nội dung mới
                            toastBody.innerHTML = 'xóa thành công';
                            toast.show()
                            // Lặp qua mỗi sản phẩm trong response.data
                            // Xóa tất cả các sản phẩm khỏi danh sách hiện có
                            $('.list-cart-checkout').empty();
                            $('total-amount').empty();
                            let totalAmount = 0;
                            // Lặp qua từng sản phẩm trong giỏ hàng mới
                            $.each(response.data, function(productId, item) {
                                totalAmount += parseInt(item.price)
                                // Tạo một phần tử mới cho mỗi sản phẩm
                                var listItem = $('<li></li>').addClass('flex items-center justify-between py-4 px-4 cart-item-checkout')
                                                                .attr('data-product-id', productId)
                                                                .attr('data-product-price', item.price)
                                                                .attr('data-product-quantity', item.quantity);
                                
                                // Tạo phần tử cho hình ảnh sản phẩm
                                var imageDiv = $('<div></div>').addClass('flex-shrink-0 h-10 w-10');
                                var image = $('<img>').addClass('h-10 w-10 rounded-full').attr('src', item.image).attr('alt', '');
                                imageDiv.append(image);

                                // Tạo phần tử cho thông tin sản phẩm
                                var infoDiv = $('<div></div>').addClass('flex flex-col');
                                var name = $('<span></span>').addClass('text-sm font-medium text-gray-900').text(item.name);
                                var price = $('<span></span>').addClass('text-sm text-gray-500').text('Price: $' + item.price);
                                var quantity = $('<span></span>').addClass('text-sm text-gray-500').text('Quantity: ' + item.quantity);
                                infoDiv.append(name, price, quantity);

                                // Tạo phần tử cho nút xóa sản phẩm
                                var deleteButton = $('<button></button>').addClass('text-red-500 hover:text-red-700 focus:outline-none delete-item-container ');
                                var deleteIcon = $('<span></span>').addClass('delete-address material-symbols-outlined delete-item-checkout').text('delete');
                                deleteButton.append(deleteIcon);

                                // Gộp các phần tử con vào phần tử <li>
                                listItem.append(imageDiv, infoDiv, deleteButton);

                                // Thêm phần tử <li> vào danh sách sản phẩm trong giỏ hàng
                                $('.list-cart-checkout').append(listItem);
                            });
                            $('.total-amount').html(totalAmount);
                            
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
        });
        $('.delete-item').click(function() {
            var shopId = $('.item-cart').data('shopId');
                // var quantity= $('#quantity').val();
                // Gửi yêu cầu Ajax
                $.ajax({
                    type: 'POST',
                    url: '{{ route("delete") }}',
                    data: {_token: '{{ csrf_token() }}',id: shopId},
                    success: function(response) {
                        // Xử lý kết quả trả về
                        if(response.status) {
                            var toastBody = myToast.querySelector('.toast-body');
                            // Cập nhật nội dung mới
                            toastBody.innerHTML = 'xóa thành công';
                            toast.show()
                          
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            });
            $("#step1Prev").click(function () {
                $("#address-infomation").addClass("hidden");
                $("#final-checkout").removeClass("hidden");
               
            });
            $("#step1Next").click(function () {
                $("#step1").addClass("hidden");
                $("#step2").removeClass("hidden");
                $("#timeline").addClass("timeline");
                $(".item-step-2").addClass("bg-indigo-500 text-white");
                $(".timeline-step").eq(1).addClass("active");
            });

            // Step 2 Previous Button Click Event
            $("#step2Prev").click(function () {
                $("#step2").addClass("hidden");
                $("#step1").removeClass("hidden");
                $("#timeline").removeClass("timeline");
                $(".timeline-step").eq(1).removeClass("active");
            });
            $("#step3Prev").click(function () {
                $("#step3").addClass("hidden");
                $("#timeline-1").removeClass("timeline-1");
                $("#step2").removeClass("hidden");
                $(".timeline-step").eq(1).removeClass("active");
            });
            $("#step2Next").click(function () {
                $("#step2").addClass("hidden");
                $("#step3").removeClass("hidden");
                $("#timeline-1").addClass("timeline-1");
                $(".item-step-3").addClass("bg-indigo-500 text-white");
                $(".timeline-step").eq(1).removeClass("active");
            });
            // thay đổi số lượng
        $('.input-address').on('change', function() {
            var valueAdress = $(this).val(); 
            $.ajax({
                type: 'POST',
                url: '{{route("storeAddress")}}',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: valueAdress,
                },
                success: function (data) {
                   console.log(data,'data input change');
                }
            });
        })
        $('.quantity-input').on('change', function() {
            var quantity = $(this).val(); // Lấy giá trị số lượng mới từ input
            var productId = $(this).data('product-id'); // Lấy id của sản phẩm từ thuộc tính data

             // Tìm phần tử chứa tổng giá trị sản phẩm tương ứng với ID sản phẩm
            var totalPriceElement = $(this).closest('tr').find('.total-price');

            // Gửi request Ajax để cập nhật số lượng sản phẩm trong giỏ hàng
            $.ajax({
                type: 'POST',
                url: '{{route("updateQuantityCart")}}',
                data: {
                    _token: '{{ csrf_token() }}',
                    productId: productId,
                    newQuantity: quantity
                },
                success: function (data) {
                    var roundedPrice = parseFloat(data.newTotalPrice).toFixed(2);
                    var totalPriceAllCart = parseFloat(data.totalPriceAllCart).toFixed(2);
                    // Nếu cập nhật thành công, cập nhật tổng giá trị sản phẩm trên giao diện
                    totalPriceElement.text(roundedPrice);
                    $('.total').text(totalPriceAllCart);
                }
            });
        });
        var selectedCategories = [];

        $('.category-checkbox').change(function() {
            // Lấy ID của danh mục được chọn
            var categoryId = $(this).val();

            // Kiểm tra xem checkbox đã được chọn hay không
            if ($(this).is(':checked')) {
                // Nếu được chọn, thêm ID vào mảng
                selectedCategories.push(categoryId);
            } else {
                // Nếu không được chọn, loại bỏ ID khỏi mảng
                var index = selectedCategories.indexOf(categoryId);
                if (index !== -1) {
                    selectedCategories.splice(index, 1);
                }
            }

            // Thực hiện AJAX request nếu có ít nhất một danh mục được chọn

                $('#loading-overlay').show();
                $.ajax({
                    type: 'POST', // Hoặc 'GET' tùy thuộc vào route của bạn
                    url: '{{route("getProductByCategories")}}',
                    data: { _token: '{{ csrf_token() }}',categories: selectedCategories},
                    success: function(data) {
                         // Hiển thị danh sách sản phẩm trên giao diện
                         let $productItem
                        $('#product-cate').empty(); // Xóa nội dung hiện tại của #product-cate
                        $('#loading-overlay').hide();
                        if(data.data.length > 0) {
                            for (var i = 0; i < data.data.length; i++) {
                            var shop = data.data[i];
                            
                            $productItem = $('<div class="list-item p-3 mb-4" style="width: 23%;" data-shop-id="' + shop.id + '">' +
                                '<div>' +
                                '<img src="' + shop.image + '">' +
                                '</div>' +
                                '<span class="product-title">Hot Selling <strong>Products</strong> ' + shop.name + '</span>' +
                                '<div class="product-tag-wrapper">' +
                                '<div class="product-tag"><span class="product-tag-item-text">Ready to Ship</span></div>' +
                                '</div>' +
                                '<div class="product-extra-wrapper">' +
                                '<div class="product-price"><span class="price-number">$<b>' + shop.price + '</b>.23 - $<b>0</b>.25</span></div>' +
                                '<div class="product-moq"><span class="product-moq-number">Min. Order: 100 pieces</span></div>' +
                                '<div class="product-shipping">' +
                                '<div>Shipping per piece: $0.07</div>' +
                                '</div>' +
                                '<div class="product-shipping">' +
                                '<div>' + shop.description + '</div>' +
                                '</div>' +
                                '</div>' +
                                '<div class="pt-4">' +
                                '<button data-product-id="' + shop.id + '" type="button" class="btn btn-submit rounded-full p-1 text-base text-white"style="background-color: orange;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithCustomWidth"> Contact supplier</button>' +
                                '<button>Chat now</button>' +
                                '</div>' +
                                '</div>');
                            $('#product-cate').append($productItem); // Thêm phần tử $productItem vào #product-cate
                        }
                        } else {
                            $productItem = $('<div class="w-full text-2xl justify-center items-center flex p-3 mb-4"><span class="material-symbols-outlined">priority_high</span>Không có sản phẩm nào</div>')
                            $('#product-cate').append($productItem);
                        }
                    },
                    error: function() {
                        var toastBody = myToast.querySelector('.toast-body');
                            // Cập nhật nội dung mới
                            toastBody.innerHTML = 'Đã xảy ra lỗi khi tải sản phẩm!';
                            toast.show()
                
                    },
                    complete: function() {
                        $('#loading-overlay').hide();
                    }
                });
        });
        
    })
    

</script>

</html>