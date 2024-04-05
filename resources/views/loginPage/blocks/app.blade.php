<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Include Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./js/slick/slick.css?v2022">
    <link rel="stylesheet" type="text/css" href="./js/slick/slick-theme.css?v2022">
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
    a {
        text-decoration: none;
        color: inherit;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: "Aleo", serif;
        font-optical-sizing: auto;
        font-style: normal;
        font-size: 14px;
    }

    .header-container {
        /* color: white; */
        height: 100%;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: 1920px 624px;
        /* background-image: url('https://s.alicdn.com/@img/imgextra/i4/O1CN01ustqhi1Tz44lu4arh_!!6000000002452-0-tps-3840-1248.jpg_q60.jpg'); */
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

    .header-login {
        width: 95%;
        margin: 0 auto;
        align-items: center;
        gap: 10px;
        display: flex;
        height: 100%;
    }

    .box-language {
        width: 100px;
        height: 32px;
        border: 1px solid gray;

    }

    .box-language select {
        width: 100%;
        height: 100%;
        background-color: transparent;

    }

    #sticky-element {
        position: -webkit-sticky;
        /* Cho Safari */
        position: sticky;
        top: 0;
        /* Phần tử sẽ bắt đầu bám vào đỉnh của cửa sổ khi cuộn */
        z-index: 100000;
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
        height: 43%;
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
        margin-left: 16px;
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
        max-width: 960px;
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

    .submenu input {
        color: #0c0c0c;
        margin-left: 5px;

    }

    .menu li.active .submenu {
        max-height: 200px;
        /* Hoặc một giá trị lớn hơn để phù hợp với kích thước thực tế của submenu */
        opacity: 1;
        padding: 10px;
    }

    /* end menu siderbar */

    .scroll-showcase-container {
        background: rgb(255, 255, 255);
        border-radius: 5px;
        padding: 40px 20px;
        box-shadow: 0 0 12px 0 rgba(0, 0, 0, .2);
    }

    /* end product */
    /* login */
    .main-login-container {
        background-image: url(https://gw.alicdn.com/imgextra/i1/O1CN01b9X76A1TzWTPv929g_!!6000000002453-0-tps-2200-600.jpg);
        background-color: #949494;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 16px;
        width: 100%;
        height: 600px;
        position: relative;
    }

    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f5f5f5;
        position: absolute;
        right: 10%;
        top: 20%;
        border-radius: 5px;
    }

    .login-form {
        width: 400px;
        padding: 20px;
        border: 1px solid #ebebeb;
        border-radius: 5px;
        background-color: #fff;
        box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.1);
    }

    .login-title {
        font-size: 24px;
        color: #333;
        width: 60%;
        margin: 0 auto;
    }

    .login-title img {
        transform: scale(0.75);
        display: flex;
        justify-content: center;
        width: 100%;

    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-label {
        display: block;
        margin-bottom: 5px;
        font-size: 16px;
        color: #666;
    }

    .form-input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ebebeb;
        border-radius: 3px;
    }

    .login-button {
        width: 100%;
        padding: 10px;
        background-color: #ffae00;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .login-button:hover {
        background-color: #0056b3;
    }

    /* end login */
    /* register */
    .register-container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 40%;
        margin: 0 auto;

    }

    .register-form {
        padding: 20px;
        font-size: 13px;
        text-align: center;
    }

    .register-title {
        text-align: center;
        margin-bottom: 20px;
        font-size: 24px;
        color: #333;
    }

    .form-group {
        display: flex;
        margin-bottom: 15px;
        align-items: center;
        gap: 10px;

    }

    .form-label {
        display: block;
        margin-bottom: 5px;
        font-size: 16px;
        color: #666;
        flex-shrink: 0;

    }

    .form-input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ebebeb;
        border-radius: 3px;
    }

    .form-checkbox {
        margin-right: 5px;
    }

    .form-checkbox-label {
        font-size: 14px;
        color: #666;
    }

    .register-button {
        width: 40%;
        margin: 0 auto;
        padding: 10px;
        background-color: #ffae00;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .register-button:hover {
        background-color: #0056b3;
    }
    /* end register */
</style>

<body>
    @include('loginPage.blocks.header')
    <main>
        @yield('content')
    </main>
    @include('loginPage.blocks.footer')
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-migrate-3.4.0.min.js"></script>
<script src="./js/slick/slick.js?v2022" type="text/javascript" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</html>