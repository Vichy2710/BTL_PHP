<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>QuanTri_Sua</title>
    <link rel="stylesheet" href="assets_quantrisua/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets_quantrisua/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets_quantrisua/css/Lista-Productos-Canito.css">
    <link rel="stylesheet" href="assets_quantrisua/css/Navbar-Centered-Brand-Dark-icons.css">
    <link rel="stylesheet" href="assets_quantrisua/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="assets_quantrisua/css/styles.css">
</head>

<body style="position: relative;">
    <nav class="navbar navbar-dark navbar-expand-md bg-dark d-flex py-3 nav-width" style="position: fixed;">
        <div class="container"><img src="assets_quantrisua/img/logo_website_light.png" style="width: 60px;margin-right: 10px;"><a class="navbar-brand d-flex align-items-center" href="{{ url('/quantri') }}"><span style="font-weight: bold;">Khuyến nông Hà Giang</span></a>
            <div class="collapse navbar-collapse d-flex float-end justify-content-end" id="navcol-5" style="width: 100px;">
                <a style="text-decoration: none" href="{{ url('/quantri') }}">
                    <h1 style="color: #fff;margin-right: 50px;text-decoration: underline;font-size: 30px;">Quản trị</h1>
                </a>
                <a style="text-decoration: none" href="{{ url('/thongke') }}">
                    <h1 style="color: #fff;margin-right: 380px;font-size: 30px;">Thống kê</h1>
                </a><a class="btn btn-primary ms-md-2 btn-dangxuat" role="button" href="{{ url('') }}" style="background: #2dc500;border-style: none;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;">Đăng xuất</a>
            </div>
        </div>
    </nav>
    <div style="position: relative;padding-top: 110px;">
        <div class="col-sm-6 col-lg-4 mx-auto" style="padding-right: 0px;padding-left: 0px;">
            <div class="card clean-card text-center">
                <div class="card-body info" style="padding-bottom: 20px;margin-bottom: 0;background: var(--bs-card-cap-bg);">
                    <div class="row" style="margin-top: -24px;">
                        <div class="col" style="padding-top: 20px;">
                            <h1 style="font-size: 35px;margin-bottom: 0px;margin-top: -5px;color: rgb(25,135,84);">Sửa thông tin</h1>
                        </div>
                        <form action="/capnhat" method="post">
                            @csrf
                            <div class="col-md-12" style="margin-top: 22px;">

                                <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                    <div class="col-4 my-auto" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                        <p class="my-auto labels"><strong>Họ tên</strong></p>
                                    </div>
                                    <div class="col-8" style="width: 200px;">
                                        <div class="group" style="margin-bottom: 0;"><input name="suahoten" value="{{ $cb['HoTen'] }}" type="text" required="" style="width: 210px;border-style: none;"></div>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                    <div class="col-4 my-auto" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                        <p class="my-auto labels"><strong>Email</strong></p>
                                    </div>
                                    <div class="col-8" style="width: 200px;">
                                        <div class="group" style="margin-bottom: 0;"><input name="suaemail" value="{{ $cb['Email'] }}" type="text" required="" style="width: 210px;border-style: none;margin-top: 10px;"></div>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                    <div class="col-4 my-auto" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                        <p class="my-auto labels"><strong>Số tài khoản</strong></p>
                                    </div>
                                    <div class="col-8" style="width: 200px;">
                                        <div class="group" style="margin-bottom: 0;"><input name="suastk" value="{{ $cb['SoTaiKhoan'] }}" type="text" required="" style="width: 210px;border-style: none;margin-top: 10px;"></div>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                    <div class="col-4 my-auto" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                        <p class="my-auto labels"><strong>Địa chỉ</strong></p>
                                    </div>
                                    <div class="col-8" style="width: 200px;">
                                        <div class="group" style="margin-bottom: 0;"><input name="suadiachi" value="{{ $cb['DiaChi'] }}" type="text" required="" style="width: 210px;border-style: none;margin-top: 10px;"></div>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                    <div class="col-4 my-auto" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                        <p class="my-auto labels"><strong>Số điện thoại</strong></p>
                                    </div>
                                    <div class="col-8" style="width: 200px;">
                                        <div class="group" style="margin-bottom: 0;"><input name="suasdt" value="{{ $cb['sdt'] }}" type="text" required="" style="width: 210px;border-style: none;margin-top: 10px;"></div>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                    <div class="col-4 my-auto" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                        <p class="my-auto labels"><strong>Mã lương</strong></p>
                                    </div>
                                    <div class="col-8" style="width: 200px;">
                                        <div class="group" style="margin-bottom: 0;"><input name="suamaluong" value="{{ $cb['MaLuong'] }}" type="text" required="" style="width: 210px;border-style: none;margin-top: 10px;"></div>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                    <div class="col-4 my-auto" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                        <p class="my-auto labels"><strong>Mã phòng</strong></p>
                                    </div>
                                    <div class="col-8" style="width: 200px;">
                                        <div class="group" style="margin-bottom: 0;"><input name="suamaphong" value="{{ $cb['MaPB'] }}" type="text" required="" style="width: 210px;border-style: none;margin-top: 10px;"></div>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                    <div class="col-4 my-auto" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                        <p class="my-auto labels"><strong>Mã học vấn</strong></p>
                                    </div>
                                    <div class="col-8" style="width: 200px;">
                                        <div class="group" style="margin-bottom: 0;"><input name="suamahv" value="{{ $cb['MaHV'] }}" type="text" required="" style="width: 210px;border-style: none;margin-top: 10px;"></div>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                    <div class="col-4 my-auto" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                        <p class="my-auto labels"><strong>Mã chức vụ</strong></p>
                                    </div>
                                    <div class="col-8" style="width: 200px;">
                                        <div class="group" style="margin-bottom: 0;"><input name="suamacv" value="{{ $cb['MaCV'] }}" type="text" required="" style="width: 210px;border-style: none;margin-top: 10px;"></div>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                    <div class="col-4 my-auto" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                        <p class="my-auto labels"><strong>Mã HDLD</strong></p>
                                    </div>
                                    <div class="col-8" style="width: 200px;">
                                        <div class="group" style="margin-bottom: 0;"><input name="suamahdld" value="{{ $cb['MaHDLD'] }}" type="text" required="" style="width: 210px;border-style: none;margin-top: 10px;"></div>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                    <div class="col-4 my-auto" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                        <p class="my-auto labels"><strong>Mã KTKL</strong></p>
                                    </div>
                                    <div class="col-8" style="width: 200px;">
                                        <div class="group" style="margin-bottom: 0;"><input name="suamaktkl" value="{{ $cb['MaKTKL'] }}" type="text" required="" style="width: 210px;border-style: none;margin-top: 10px;"></div>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                    <div class="col-4 my-auto" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                        <p class="my-auto labels"><strong>Mã chấm công</strong></p>
                                    </div>
                                    <div class="col-8" style="width: 200px;">
                                        <div class="group" style="margin-bottom: 0;"><input name="suamacc" value="{{ $cb['MaCC'] }}" type="text" required="" style="width: 210px;border-style: none;margin-top: 10px;"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" style="height: 55px;"><input type="submit" value="Lưu" class="btn btn-success" style="margin-top: 20px;"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets_quantrisua/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>