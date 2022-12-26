<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ThongKe</title>
    <link rel="stylesheet" href="assets_thongke/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets_thongke/css/Lista-Productos-Canito.css">
    <link rel="stylesheet" href="assets_thongke/css/Navbar-Centered-Brand-Dark-icons.css">
    <link rel="stylesheet" href="assets_thongke/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="assets_thongke/css/styles.css">
</head>

<body style="position: relative;">
    <nav class="navbar navbar-dark navbar-expand-md bg-dark d-flex py-3 nav-width" style="position: fixed;">
        <div class="container"><img src="assets_thongke/img/logo_website_light.png" style="width: 60px;margin-right: 10px;"><a class="navbar-brand d-flex align-items-center" href="{{ url('/quantri') }}"><span style="font-weight: bold;">Khuyến nông Hà Giang</span></a>
            <div class="collapse navbar-collapse d-flex float-end justify-content-end" id="navcol-5" style="width: 100px;">
                <a style="text-decoration: none" href="{{ url('/quantri') }}"><h1 style="color: #fff;margin-right: 50px;font-size: 30px;">Quản trị</h1></a>
                <a style="text-decoration: none" href="{{ url('/thongke') }}"><h1 style="color: #fff;margin-right: 380px;font-size: 30px;text-decoration:  underline;">Thống kê</h1></a>
                <a class="btn btn-primary ms-md-2 btn-dangxuat" role="button" href="{{ url('') }}" style="margin-top: 10px;background: #2dc500;border-style: none;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;">Đăng xuất</a>
            </div>
        </div>
    </nav>
    <div style="position: relative;padding-top: 110px;">
        <div class="container d-flex my-auto" style="height: 50px;"></div>
    </div>
    <script src="assets_thongke/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>