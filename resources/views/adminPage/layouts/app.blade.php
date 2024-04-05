<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href={{ asset("vendor/fontawesome-free/css/all.min.css")}} rel="stylesheet" type="text/css">
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
    <div id="wrapper">
        @include('.adminPage.layouts.siderbar')
       @yield('content')
    </div>
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

    <!-- Bootstrap core JavaScript-->
    <script src={{ asset("vendor/jquery/jquery.min.js")}}></script>
    <script src={{ asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>

    <!-- Core plugin JavaScript-->
    <script src={{ asset("vendor/jquery-easing/jquery.easing.min.js")}}></script>

    <!-- Custom scripts for all pages-->
    <script src={{ asset("js/sb-admin-2.min.js")}}></script>

    <!-- Page level plugins -->
    <script src={{ asset("vendor/chart.js/Chart.min.js")}}></script>

    <!-- Page level custom scripts -->
    <script src={{ asset("js/demo/chart-area-demo.js")}}></script>
    <script src={{ asset("js/demo/chart-pie-demo.js")}}></script>
    <script>
        $(document).ready(function() {
            $('#create-product-form').submit(function(e) {
                e.preventDefault(); // Ngăn chặn hành vi mặc định của form
    
                // Lấy dữ liệu của form
                var formData = new FormData(this);
    
                // Gửi AJAX request
                $.ajax({
                    url: '{{ route("store-product") }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Xử lý kết quả thành công
                        console.log(response);
                        if(response.status) {
                            alert(response.message)
                        }
                    },
                    error: function(xhr, status, error) {
                        // Xử lý lỗi
                        console.error(xhr.responseText);
                    }
                });
            });
             $(document).on('click', '.btn-delete-product', function() {
                var itemId = $(this).data('id');
                $.ajax({
                    type: 'DELETE',
                    url: '/item/' + itemId,
                    data:{
                        'id': itemId,
                        '_token': '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        alert('Item deleted successfully');
                        // Thực hiện các hành động khác nếu cần thiết
                    },
                    error: function(xhr, status, error) {
                        alert('Error deleting item');
                    }
                });
            });
            $(document).on('click', '.btn-confirm-order', function() {
                var itemId = $(this).data('id');
                $.ajax({
                    type: 'PUT',
                    url: '/order/' + itemId,
                    data:{
                        'id': itemId,
                        '_token': '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        alert('Xác nhận thành công');
                        // Thực hiện các hành động khác nếu cần thiết
                    },
                    error: function(xhr, status, error) {
                        alert('Error deleting item');
                    }
                });
            });
        });
    </script>

</body>

</html>