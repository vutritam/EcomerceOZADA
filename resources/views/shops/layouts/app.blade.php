<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>show you</title>

    <!-- Custom fonts for this template-->
    <link href={{ asset("vendor/fontawesome-free/css/all.min.css")}} rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href={{ asset("css/main-shop.css")}}>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <style>
            .material-symbols-outlined {
              font-variation-settings:
              'FILL' 0,
              'wght' 400,
              'GRAD' 0,
              'opsz' 24
            }
            </style>
    <!-- Custom styles for this template-->
    <link href={{ asset("css/sb-admin-2.min.css")}} rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
       @yield('content')
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    

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
<script type="text/javascript">
    $(document).on('ready', function () {
        $('#btn-show-products').click(function() {
            // Lấy giá trị của thuộc tính data-shop-id từ nút button
            var shopId = $(this).data('shop-id');
            
            // Hiển thị giá trị của shopId trong console
            $.ajax({
                type: 'GET',
                url: '/get-products-by-shop/' + shopId,
                success: function(response) {
                    // Xử lý dữ liệu trả về từ server
                    $('#btn-show-products').empty();
                    var html = '';
                    if (response.data.length > 0) {
                        response.data.forEach(function(product) {

                            var shop = product;
                            html += '<div class="list-item p-3 mb-4" data-shop-id="' + shop.id + '">' +
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
                                '</div>';
                        });
                    } else {
                        html += '<div class="flex items-center justify-center py-2 border-b border-gray-300" id="box-research">';
                        html += '<p style="color:black">Không tìm thấy sản phẩm nào :((</p>';
                        html += '</div>';
                    }
                    $('#result-box-shop').append(html);
                },
                error: function() {
                    alert('Đã xảy ra lỗi khi tải sản phẩm!');
                }
            });
        });
    })
</script>

</html>