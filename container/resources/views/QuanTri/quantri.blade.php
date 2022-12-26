<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>QuanTri</title>
    <link rel="stylesheet" href="assets_quantri/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets_quantri/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets_quantri/css/Lista-Productos-Canito.css">
    <link rel="stylesheet" href="assets_quantri/css/Navbar-Centered-Brand-Dark-icons.css">
    <link rel="stylesheet" href="assets_quantri/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="assets_quantri/css/styles.css">
</head>

<body style="position: relative;">
    <nav class="navbar navbar-dark navbar-expand-md bg-dark d-flex py-3 nav-width" style="position: fixed;">
        <div class="container"><img src="assets_quantri/img/logo_website_light.png" style="width: 60px;margin-right: 10px;"><a class="navbar-brand d-flex align-items-center" href="{{ url('/quantri') }}"><span style="font-weight: bold;">Khuyến nông Hà Giang</span></a>
            <div class="collapse navbar-collapse d-flex float-end justify-content-end" id="navcol-5" style="width: 100px;">
                <a style="text-decoration: none" href="{{ url('/quantri') }}">
                    <h1 style="color: #fff;margin-right: 50px;text-decoration: underline;font-size: 30px;">Quản trị</h1>
                </a>
                <a style="text-decoration: none" href="{{ url('/thongke') }}">
                    <h1 style="color: #fff;margin-right: 380px;font-size: 30px;">Thống kê</h1>
                </a>
                <a class="btn btn-primary ms-md-2 btn-dangxuat" role="button" href="{{ url('') }}" style="background: #2dc500;border-style: none;border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;margin-top: 10px">Đăng xuất</a>
            </div>
        </div>
    </nav>
    <div style="position: relative;padding-top: 110px;">
        <div class="container d-flex my-auto" style="height: 50px;">
            <div class="col my-auto">
                <!--tim kiem-->
                <!--<div>
                <input placeholder="Nhập tên cán bộ..." type="text" name="search" style= "padding-left:10px;padding-right:10px;padding-top:3px;padding-bottom:3px; border-style: solid;border-color: var(--bs-gray-500);border-top-color: rgb(0,;border-right-color: 0,;border-bottom-color: 0);border-left-color: 0,;border-radius: 20px;height: 40px;width: 250px;">
                <button class="btn btn-primary my-auto btn-tim" type="button" style="margin-left: 7px;border-radius: 40px;background: #2dc500;"><i class="fas fa-search"></i></button>
            </div>-->
                <form action="" method="GET">
                    <input type="text" name="search" id="" placeholder="Nhập tên cán bộ" style="border-radius: 20px;">
                    <button style="margin-left: 7px;border-radius: 40px;background: #2dc500;">Tìm kiếm</button>
                </form>
            </div>
            <div class="col-3 d-flex justify-content-end my-auto">
                <p class="my-auto" style="font-size: 18px;">Sắp xếp theo:&nbsp;</p>
                <div class="dropdown my-auto">
                    <button class="btn btn-primary dropdown-toggle my-auto" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="background: var(--bs-gray-400);color: var(--bs-dropdown-link-hover-color);border-radius: 20px;">Default</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('/sapXepTenAZ') }}">Họ tên A-Z</a>
                        <a class="dropdown-item" href="{{ url('/sapXepTenZA') }}">Họ tên Z-A</a>
                        <a class="dropdown-item" href="{{url ('/sapxepLuongCT')}}">Lương - Cao đến Thấp</a>
                        <a class="dropdown-item" href="{{url ('/sapxepLuongTC')}}">Lương - Thấp đến cao</a>
                    </div>
                    <!-- <select name="orderby" id="use-chosen"  >
                    <option value="default" >Default sorting</option>
                    <option value="salary">Lương - Thấp đến cao</option>
                    <option value="salary-desc">Lương - Cao đến thấp</option>
                    <option value="name">Tên cán bộ - a-z</option>
                    <option value="name-desc">Tên cán bộ - z-a</option>
                   </select>-->
                </div>
            </div>
            <div class="col-3 d-flex justify-content-end my-auto">
                <p class="my-auto" style="font-size: 18px;">Lọc theo:&nbsp;</p>
                <div class="dropdown"><button class="btn btn-primary dropdown-toggle my-auto" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="background: var(--bs-gray-400);color: var(--bs-dropdown-link-hover-color);border-radius: 20px;">Phòng ban</button>
                    <div class="dropdown-menu"><a class="dropdown-item" href="#">Họ tên</a><a class="dropdown-item" href="#">Quê quán</a><a class="dropdown-item" href="#">Ngày sinh</a></div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 20px;position: relative;">
        <div class="container">
            <div class="row my-auto">
                <div class="col-md-4">
                    <h2 style="width: 343px;">Danh sách cán bộ</h2>
                </div>
                <div class="col my-auto"> <a href="{{ url('/quantrithem') }}"><button class="btn btn-primary float-end my-auto btn-them" type="button" style="background: #2dc500;font-size: 18px;font-weight: bold;margin-right: 40px;width: 120px;">Thêm mới</button></a></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <table class="table table-striped table-bordered" id="example" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Họ tên</th>
                                    <th>Email</th>
                                    <th>Giới tính</th>
                                    <th>Địa chỉ</th>
                                    <th>SĐT</th>
                                    <th>Lương</th>
                                    <th>Chức vụ</th>
                                    <th>Phòng ban</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($canbos as $canbo)
                                <tr>
                                    <td>{{ $canbo['id'] }}</td>
                                    <td>{{ $canbo['HoTen'] }}</td>
                                    <td>{{ $canbo['Email'] }}</td>
                                    <td>{{ $canbo['GioiTinh'] }}</td>
                                    <td>{{ $canbo['DiaChi'] }}</td>
                                    <td>{{ $canbo['sdt'] }}</td>
                                    <td>{{ $luongs->toArray()[array_search($canbo['id'],array_column($luongs->toArray(),'id'))]['LuongCoBan']}}</td>
                                    <td>{{ $chucvus->toArray()[array_search($canbo['id'],array_column($chucvus->toArray(),'id'))]['TenCV']}}</td>
                                    <td>{{ $phongbans->toArray()[array_search($canbo['id'],array_column($phongbans->toArray(),'id'))]['TenPB']}}</td>
                                    <td>
                                        <form action="{{ url('/xoa')  }}" method="POST">
                                            @csrf

                                            <input type="hidden" name="idCanBoDangHienThi" value="{{ $canbo['id'] }}">
                                            <button class="btn btn-danger btn-xoa" type="submit">
                                                <i class="far fa-trash-alt d-xl-flex justify-content-xl-center align-items-xl-center"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ url('/quantrisua')  }}" method="POST">
                                            @csrf

                                            <input type="hidden" name="idCanBoDangHienThi" value="{{ $canbo['id'] }}">
                                            <button class="btn btn-warning btn-sua" type="submit">
                                                <i class="fas fa-pencil-alt d-xl-flex justify-content-xl-center align-items-xl-center"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets_quantri/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>