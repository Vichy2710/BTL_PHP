<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>NguoiDung</title>
    <link rel="stylesheet" href="assets_nguoidung/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets_nguoidung/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets_nguoidung/css/Lista-Productos-Canito.css">
    <link rel="stylesheet" href="assets_nguoidung/css/Ludens-Users---3-Profile.css">
    <link rel="stylesheet" href="assets_nguoidung/css/Navbar-Centered-Brand-Dark-icons.css">
    <link rel="stylesheet" href="assets_nguoidung/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="assets_nguoidung/css/styles.css">
</head>

<body style="position: relative;background: url(&quot;assets_nguoidung/img/anh_ho_so.jpg&quot;);background-size: cover;">
    <nav class="navbar navbar-dark navbar-expand-md bg-dark d-flex py-3 nav-width" style="position: fixed;">
        <div class="container"><img src="assets_nguoidung/img/logo_website_light.png" style="width: 60px;margin-right: 10px;"><a class="navbar-brand d-flex align-items-center" href="{{ url('nguoidung') }}"><span style="font-weight: bold;">Khuyến nông Hà Giang</span></a>
            <div class="collapse navbar-collapse d-flex float-end justify-content-end" id="navcol-5" style="width: 100px;"><a class="btn btn-primary my-auto ms-md-2 btn-dangxuat" role="button" href="{{ url('') }}" style="background: #2dc500;border-style: none;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;">Đăng xuất</a></div>
        </div>
    </nav>
    <div style="position: relative;padding-top: 110px;margin-bottom: 30px;">
        <div class="col-sm-6 col-lg-4 mx-auto" style="padding-right: 0px;padding-left: 0px;">
            <div class="card clean-card text-center">
                <div class="card-body info" style="padding-bottom: 10px;margin-bottom: 20px;">
                    <div class="row" style="margin-top: -24px;">
                        <div class="col" style="padding-top: 20px;">
                            <h1 style="font-size: 35px;margin-bottom: 0px;margin-top: -5px;color: rgb(25,135,84);">Hồ sơ cán bộ</h1>
                        </div>
                        <div class="col-md-12" style="margin-top: 22px;">
                            <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                <div class="col" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                    <p class="labels"><strong>Họ tên</strong></p>
                                </div>
                                <div class="col">
                                    <p class="labels">{{ $canbo['HoTen'] }}</p>
                                </div>
                            </div>
                            <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                <div class="col" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                    <p class="labels"><strong>Email</strong></p>
                                </div>
                                <div class="col">
                                    <p class="labels">{{ $canbo['Email'] }}</p>
                                </div>
                            </div>
                            <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                <div class="col" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                    <p class="labels"><strong>Địa chỉ</strong></p>
                                </div>
                                <div class="col">
                                    <p class="labels">{{ $canbo['DiaChi'] }}</p>
                                </div>
                            </div>
                            <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                <div class="col" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                    <p class="labels"><strong>Giới tính</strong></p>
                                </div>
                                <div class="col">
                                    <p class="labels">{{ $canbo['GioiTinh'] }}</p>
                                </div>
                            </div>
                            <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                <div class="col" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                    <p class="labels"><strong>Số tài khoản</strong></p>
                                </div>
                                <div class="col">
                                    <p class="labels">{{ $canbo['SoTaiKhoan'] }}</p>
                                </div>
                            </div>
                            <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                <div class="col" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                    <p class="labels"><strong>Ngày sinh</strong></p>
                                </div>
                                <div class="col">
                                    <p class="labels">{{ $canbo['NgaySinh'] }}</p>
                                </div>
                            </div>
                            <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                <div class="col" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                    <p class="labels"><strong>CCCD</strong></p>
                                </div>
                                <div class="col">
                                    <p class="labels">{{ $canbo['CCDC'] }}</p>
                                </div>
                            </div>
                            <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                <div class="col" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                    <p class="labels"><strong>Số điện thoại</strong></p>
                                </div>
                                <div class="col">
                                    <p class="labels">{{ $canbo['sdt'] }}</p>
                                </div>
                            </div>
                            <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                <div class="col" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                    <p class="labels"><strong>Lương</strong></p>
                                </div>
                                <div class="col">
                                    <p class="labels">{{ $luongs->toArray()[array_search($canbo['MaLuong'],array_column($luongs->toArray(),'id'))]['LuongCoBan']
                                    *  $luongs->toArray()[array_search($canbo['MaLuong'],array_column($luongs->toArray(),'id'))]['HsLuong']
                                    * $luongs->toArray()[array_search($canbo['MaLuong'],array_column($luongs->toArray(),'id'))]['HsPhuCap']}} triệu</p>
                                </div>
                            </div>
                            <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                <div class="col" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                    <p class="labels"><strong>Phòng ban</strong></p>
                                </div>
                                <div class="col">
                                    <p class="labels">{{ $phongbans->toArray()[array_search($canbo['MaPB'],array_column($phongbans->toArray(),'id'))]['TenPB'] }}</p>
                                </div>
                            </div>
                            <div class="row" style="border-bottom-width: 1px;border-bottom-color: var(--bs-gray-600);">
                                <div class="col" style="color: #343a40;border-right: 1px solid var(--bs-gray-500) ;">
                                    <p class="labels"><strong>Học vấn</strong></p>
                                </div>
                                <div class="col">
                                    <p class="labels">{{ $hocvans->toArray()[array_search($canbo['MaHV'],array_column($hocvans->toArray(),'id'))]['TenHV'] }}</p>
                                </div>
                            </div>
                            
                            <div class="row">
                                

                                <form action="{{ url('/nguoidungsua')  }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="idsuaNguoiDung" value="{{ $canbo['id'] }}">
                                    <button type="submit" class="col-md-12">
                                        <a class="btn btn-success" style="margin-top: 10px;">
                                            <i class="fas fa-pencil-alt"></i>&nbsp; &nbsp;Sửa
                                        </a>
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets_nguoidung/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>