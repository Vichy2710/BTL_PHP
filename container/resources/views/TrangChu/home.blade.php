<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Almarai&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anek+Devanagari&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Asset&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Be+Vietnam+Pro&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Login-with-overlay-image.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="color: var(--bs-gray-dark); margin: 0; padding:0">
    <div class="row" style="padding-bottom: 20px;padding-top: 20px;">
        <div class="col-lg-4 d-lg-flex" style="margin: auto;">
            <div class="d-flex"><img class="my-auto" src="assets/img/logo_website.png" height="50px" style="margin-left: 10px;width: 90px;height: 70px;">
                <h1 style="margin: auto;margin-left: 10px;font-family: 'Be Vietnam Pro', sans-serif;color: var(--bs-gray-dark);font-size: 40px;font-weight: bold;">Khuyến Nông<br>Hà Giang</h1>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-2 d-flex" style="margin: auto;width: 180px;"><i class="fas fa-phone-alt my-auto" style="font-size: 25px;margin-right: 10px;color: #2dc500;"></i>
            <p class="my-auto" style="color: var(--bs-gray-dark);font-family: 'Be Vietnam Pro', sans-serif;">Thứ 2 - thứ 7 02193 866 029</p>
        </div>
        <div class="col-lg-4 d-flex"><i class="fas fa-search-location my-auto" style="font-size: 25px;margin-right: 10px;color: #2dc500;"></i>
            <p class="my-auto" style="color: var(--bs-gray-dark);font-family: 'Be Vietnam Pro', sans-serif;">126 Nguyễn Thái Học, phường Trần Phú, Hà Giang</p>
        </div>
    </div>
    <div class="container" id="main-wrapper">
        <div class="row justify-content-center" style="margin-bottom: 30px;height: 520px;">
            <div class="col-xl-10">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="mb-5">
                                        <h3  class="h4 font-weight-bold text-theme" style="color: #2dc500 !important;font-size: 40px;">Đăng nhập</h3>
                                    </div>
                                    <h6 class="h5 mb-0">Admin!</h6>
                                    <p class="text-muted mt-2 mb-5">Nhập email và mật khẩu để truy cập hệ thống quản lý</p>
                                    <form action="check" method="POST" >
                                        @csrf <!-- {{ csrf_field() }} -->
                                        <div class="form-group"><label class="form-label" for="exampleInputEmail1">Email</label><input name="email" required class="form-control form-control" type="email" id="exampleInputEmail1" style="margin-bottom: 15px;"></div>
                                        <div class="form-group mb-5"><label class="form-label" for="exampleInputPassword1">Mật khẩu</label><input name="password" required class="form-control form-control" type="password" id="exampleInputPassword1"></div>
                                        <button class="btn btn-theme" type="submit" style="border:0 !important;width: 150px;height: 50px;font-size: 20px;font-weight: bold;background: #2dc500;">Đăng nhập</button><a class="forgot-link float-right link-green" href="#l" style="margin-left: 10px;">Quên mật khẩu?</a>
                                        
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-inline-block">
                                <div class="account-block rounded-right">
                                    <div id="image-log-in" class="overlay rounded-right"></div>
                                    <div class="account-testimonial">
                                        <h4 class="text-white mb-4" style="font-size: 40px;color: rgb(0,0,0);">Quản lý cán bộ trung tâm Khuyến nông Hà Giang</h4>
                                        <p class="lead text-white" style="color: rgb(0,0,0);">Giám đốc: Hoàng Thị Hằng</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>