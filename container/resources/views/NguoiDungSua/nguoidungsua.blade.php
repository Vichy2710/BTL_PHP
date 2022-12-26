<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>NguoiDung_Sua</title>
    <link rel="stylesheet" href="assets_nguoidungsua/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets_nguoidungsua/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets_nguoidungsua/css/Google-Style-Text-Input.css">
    <link rel="stylesheet" href="assets_nguoidungsua/css/Lista-Productos-Canito.css">
    <link rel="stylesheet" href="assets_nguoidungsua/css/Ludens-Users---3-Profile.css">
    <link rel="stylesheet" href="assets_nguoidungsua/css/Navbar-Centered-Brand-Dark-icons.css">
    <link rel="stylesheet" href="assets_nguoidungsua/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="assets_nguoidungsua/css/styles.css">
</head>

<body style="position: relative;background: url(&quot;assets_nguoidungsua/img/anh_ho_so.jpg&quot;);background-size: cover;">
    <nav class="navbar navbar-dark navbar-expand-md bg-dark d-flex py-3 nav-width" style="position: fixed;">
        <div class="container"><img src="assets_nguoidungsua/img/logo_website_light.png" style="width: 60px;margin-right: 10px;"><a class="navbar-brand d-flex align-items-center" href="{{ url('/nguoidung') }}"><span style="font-weight: bold;">Khuyến nông Hà Giang</span></a>
            <div class="collapse navbar-collapse d-flex float-end justify-content-end" id="navcol-5" style="width: 100px;"><a class="btn btn-primary my-auto ms-md-2 btn-dangxuat" role="button" href="{{ url('') }}" style="background: #2dc500;border-style: none;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;">Đăng xuất</a></div>
        </div>
    </nav>
    <div style="position: relative;padding-top: 110px;margin-bottom: 30px;">
        <div class="col-sm-6 col-lg-4 mx-auto" style="padding-right: 0px;padding-left: 0px;">
            <div class="card clean-card text-center">
                <div class="card-body info" style="padding-bottom: 10px;margin-bottom: 20px;">
                    <div class="row" style="margin-top: -24px;">
                        <div class="col" style="padding-top: 20px;">
                            <h1 style="font-size: 35px;margin-bottom: 0px;margin-top: -5px;color: rgb(25,135,84);">Sửa thông tin</h1>
                        </div>
                        <form action="/capnhatnguoidung" method="post">
                            @csrf
                            <div class="col-md-12" style="margin-top: 22px;">
                                <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                    <div class="col-4 my-auto" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                        <p class="my-auto labels"><strong>Địa chỉ</strong></p>
                                    </div>
                                    <div class="col-8" style="width: 200px;">
                                        <div class="group" style="margin-bottom: 0;"><input value="{{ $cb['DiaChi'] }}" name="suadiachi" type="text" required="" style="width: 210px;"></div>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                    <div class="col-4 my-auto" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                        <p class="my-auto labels"><strong>Giới tính</strong></p>
                                    </div>
                                    <div class="col-8" style="width: 200px;">
                                        <div class="group" style="margin-bottom: 0;"><input value="{{ $cb['GioiTinh'] }}" name="suagioitinh" type="text" required="" style="width: 210px;"></div>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                    <div class="col-4 my-auto" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                        <p class="my-auto labels"><strong>Ngày sinh</strong></p>
                                    </div>
                                    <div class="col-8" style="width: 200px;">
                                        <div class="group" style="margin-bottom: 0;"><input value="{{ $cb['NgaySinh'] }}"  placeholder="năm-tháng-ngày" name="suangaysinh" type="text" required="" style="width: 210px;"></div>
                                    </div>
                                </div>
                                
                                <button type="submit">
                                    <div class="col-md-12" style="height: 55px;"><a class="btn btn-success"   style="margin-top: 10px;"><i class="far fa-save"></i>&nbsp; &nbsp;Lưu</a></div>
                                </button>
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets_nguoidungsua/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>