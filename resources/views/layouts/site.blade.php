<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/layoutsite.css') }}">
    <link rel="stylesheet" href="{{ asset('layoutsite.css') }}">

    @yield('header')
</head>

<body>
    <header>
        <section class="section_header">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-3 py-3">
                        <img src="assets/image/logo.webp" class="img-fluid" alt="">
                    </div>

                    <div class="col-md-5 py-3 d-none d-md-block">
                        <form class="d-flex" role="search">
                            <div class="form-field">
                                <input type="text" class="form-input" placeholder=" " />
                                <label for="seach" class="form-label">Tìm kiếm</label>

                            </div>

                        </form>

                        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="index.html">Trang chủ</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="product.html">Sản
                                                phẩm</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.html">Liện hệ</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-6 col-md-4 py-3 text-end">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <i class="fa-solid fa-user"></i>
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>

                </div>
            </div>
        </section>
    </header>
    <main>
        @yield('maincontent')
    </main>
    <footer class="section_footer bg-footer py-5">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src="assets/image/logo.webp" class="img-fluid" alt="">
                        <ul><i class="fa-solid fa-location-dot"></i>Địa chỉ: 70 Lu Gia, District 11, Ho Chi Minh City.
                        </ul>
                        <ul><i class="fa-solid fa-mobile"></i>Số điện thoại: 0966200317</ul>
                        <ul><i class="fa-solid fa-envelope"></i>Email: vuquoc1906@gmail.com</ul>
                    </div>

                    <div class="col-md-3">
                        <h4>Chính sách</h4>
                        <ul>Bảo hành sản phẩm</ul>
                        <ul>Chính sách bán hàng</ul>
                        <ul>Chính sách giao hàng</ul>
                        <ul>Chính sách đổi trả</ul>
                    </div>

                    <div class="col-md-3">
                        <h4>Hỗ trợ khách hàng</h4>
                        <ul>Điều khoản dịch vụ</ul>
                        <ul>Hệ thống cửa hàng</ul>
                        <ul>Câu hỏi thường gặp</ul>
                        <ul>Liên hệ</ul>
                    </div>

                    <div class="col-md-3">
                        <h4>Đăng kí nhận thông tin</h4>
                        <ul>Bạn có muốn nhận khuyến mãi đặc biệt? Đăng ký ngay.</ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Nhập địa chỉ email"
                                aria-label="Search">
                            <button class="btn btn-outline-secondary" type="submit">
                                <span class="spinner-grow spinner-grow-sm"></span>Đăng kí</button>
                        </form>

                        <div class="py-2">
                            <span><img src="assets//image/facebook.png"></span>
                            <span><img src="assets//image/zalo.png"></span>
                            <span><img src="assets//image/instagram.png"></span>
                            <span><img src="assets//image/youtube.png"></span>
                            <span><img src="assets//image/tiktok.png"></span>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </footer>
    <script src="{{ asset('assets/js/main.js')}}"></script>
    @yield('footer')
</body>

</html>
