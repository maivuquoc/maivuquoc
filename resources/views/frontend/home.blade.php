@extends('layouts.site')
@section('title', 'Trang chủ')
<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/layoutsite.css') }}">
    <link rel="stylesheet" href="{{ asset('layoutsite.css') }}">
@section('header')
    <link rel="stylesheet" href="product.css">
@endsection
@section('maincontent')
<section class="section_mainmenu">
    <div class="container">
        <div class="row">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/image/slider_1.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item ">
                        <img src="assets/image/slider_2.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item ">
                        <img src="assets/image/slider_1.webp" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-6 py-3">
                <div class="imgtext_content_wrap">
                    <div class="imgtext_content">
                        <h3 class="imgtext-title head-title-style">
                            <span>ABOUT</span> EGA LUXURY
                        </h3>
                        <p class="imgtext-desc">EGA LUXURY bắt nguồn từ Nghệ thuật, Thiết kế và Văn hóa.
                            <br><br>
                            Đồ trang sức của chúng tôi được lấy cảm hứng từ những hình dạng và câu chuyện phổ
                            quát trải dài qua nhiều thế hệ và nền văn hóa. <br><br>

                            Các hình thức điêu khắc, những đường cong mềm mại và những đường nét uyển chuyển tạo
                            nên vẻ sang trọng dễ dàng cho những nhà sáng tạo táo bạo, tò mò.
                        </p>
                        <div class="mb-3 mt-3">
                            <a href="product.html">
                                <button type="button" class="btn btn-outline-dark">Khám phá ngay</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <img class="img-fluid m-auto object-contain mh-100 w-auto" src="assets/image/imgtext_1_img.webp"
                    width="795" height="475" alt="imgtext_img">
            </div>
        </div>
    </div>

    <div class="container py-5">
        <h3 class="text-center py-2">Bộ sưu tập</h3>
        <div class="row">
            <div class="col-md-3">
                <img src="assets/image/season_coll_1_img.webp" class="rounded" alt="Cinque Terre" width="280"
                    height="265">
            </div>
            <div class="col-md-3">
                <img src="assets/image/season_coll_2_img.webp" class="rounded" alt="Cinque Terre" width="280"
                    height="265">
            </div>
            <div class="col-md-3">
                <img src="assets/image/season_coll_3_img.webp" class="rounded" alt="Cinque Terre" width="280"
                    height="265">
            </div>
            <div class="col-md-3">
                <img src="assets/image/season_coll_4_img.webp" class="rounded" alt="Cinque Terre" width="280"
                    height="265">
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <h3 class="text-center py-2">Sản phẩm mới nhất</h3>
            <div class="col-md-3 ">
                <div class="alert alert-light">
                    <div>
                        <img src="assets/image/frame-50.webp" class="rounded" alt="Cinque Terre" width="280"
                            height="265">
                    </div>
                    <div class="text-center pt-3 mt-3 border-top">
                        <p class="product-vendor">DIAMOND ZONE</p>
                        <span class="product-name">
                            <a href="product_detail.html">Nhẫn Oval Aquamarine Statement</a>
                        </span>
                        <div class="price-box">
                            <span class="special-price"><span class="price product-price">53.000.000₫</span>
                            </span> <!-- Giá Khuyến mại -->
                            <span class="old-price">
                                <del class=" product-price-old sale">66.000.000₫</del>
                            </span> <!-- Giá gốc -->
                            <span class="badge rounded-pill bg-danger">-20%</span>
                            <div class="save-price">
                                (Tiết kiệm: <span>13.000.000₫</span>)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="alert alert-light">
                    <img src="assets/image/be3d836-set.webp" class="rounded" alt="Cinque Terre" width="280"
                        height="265">
                    <div class="text-center pt-3 mt-3 border-top">
                        <p class="product-vendor">EGA</p>
                        <span class="product-name">
                            <a href="product_detail.html">Bông tai kim cương đính đá quý</a>
                        </span>
                        <div class="price-box">
                            <span class="special-price"><span class="price product-price">25.000.000₫</span>
                            </span> <!-- Giá Khuyến mại -->
                            <span class="old-price">
                                <del class=" product-price-old sale">28.700.000₫</del>
                            </span> <!-- Giá gốc -->
                            <span class="badge rounded-pill bg-danger">-13%</span>
                            <div class="save-price">
                                (Tiết kiệm: <span>3.700.000₫</span>)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="alert alert-light">
                    <img src="assets/image/be3d20-18ky-top.webp" class="rounded" alt="Cinque Terre" width="280"
                        height="265">
                    <div class="text-center pt-3 mt-3 border-top">
                        <p class="product-vendor">EGA</p>
                        <span class="product-name">
                            <a href="product_detail.html">Bông tai cao cấp Huggie kim cương</a>
                        </span>
                        <div class="price-box">
                            <span class="special-price"><span class="price product-price">24.000.000₫</span>
                            </span> <!-- Giá Khuyến mại -->
                            <span class="old-price">
                                <del class=" product-price-old sale">25.700.000₫</del>
                            </span> <!-- Giá gốc -->
                            <span class="badge rounded-pill bg-danger">-7%</span>
                            <div class="save-price">
                                (Tiết kiệm: <span>1.700.000₫</span>)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="alert alert-light">
                    <img src="assets/image/frame-66.webp" class="rounded" alt="Cinque Terre" width="280"
                        height="265">
                    <div class="text-center pt-3 mt-3 border-top">
                        <p class="product-vendor">DIAMOND ZONE</p>
                        <span class="product-name">
                            <a href="product_detail.html">Dây chuyền kim cương đá sapphire</a>
                        </span>
                        <div class="price-box">
                            <span class="special-price"><span class="price product-price">46.000.000₫</span>
                            </span> <!-- Giá Khuyến mại -->
                            <span class="old-price">
                                <del class=" product-price-old sale">50.000.000₫</del>
                            </span> <!-- Giá gốc -->
                            <span class="badge rounded-pill bg-danger">-8%</span>
                            <div class="save-price">
                                (Tiết kiệm: <span>4.000.000₫</span>)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3 mt-3 text-center">
                <a href="product.html">
                    <button type="button" class="btn btn-outline-dark">Xem tất cả</button>
                </a>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <h3 class="text-center py-2">Sản phẩm giảm giá</h3>
            <div class="col-md-3 ">
                <div class="alert alert-light">
                    <div>
                        <img src="assets/image/frame-92.webp" class="rounded" alt="Cinque Terre" width="280"
                            height="265">
                    </div>
                    <div class="text-center pt-3 mt-3 border-top">
                        <p class="product-vendor">DIAMOND ZONE</p>
                        <span class="product-name">
                            <a href="product_detail.html">Vòng tay nhánh Olive</a>
                        </span>
                        <div class="price-box">
                            <span class="special-price"><span class="price product-price">27.000.000₫</span>
                            </span> <!-- Giá Khuyến mại -->
                            <span class="old-price">
                                <del class=" product-price-old sale">50.000.000₫</del>
                            </span> <!-- Giá gốc -->
                            <span class="badge rounded-pill bg-danger">-46%</span>
                            <div class="save-price">
                                (Tiết kiệm: <span>23.000.000₫</span>)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="alert alert-light">
                    <img src="assets/image/frame-69.webp" class="rounded" alt="Cinque Terre" width="280"
                        height="265">
                    <div class="text-center pt-3 mt-3 border-top">
                        <p class="product-vendor">DIAMOND ZONE</p>
                        <span class="product-name">
                            <a href="product_detail.html">Lắc tay Oval Sapphire</a>
                        </span>
                        <div class="price-box">
                            <span class="special-price"><span class="price product-price">46.000.000₫</span>
                            </span> <!-- Giá Khuyến mại -->
                            <span class="old-price">
                                <del class=" product-price-old sale">50.000.000₫</del>
                            </span> <!-- Giá gốc -->
                            <span class="badge rounded-pill bg-danger">-8%</span>
                            <div class="save-price">
                                (Tiết kiệm: <span>4.000.000₫</span>)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="alert alert-light">
                    <img src="assets/image/frame-28.webp" class="rounded" alt="Cinque Terre" width="280"
                        height="265">
                    <div class="text-center pt-3 mt-3 border-top">
                        <p class="product-vendor">SOLEIL</p>
                        <span class="product-name">
                            <a href="product_detail.html">Bộ vòng tay cá tính</a>
                        </span>
                        <div class="price-box">
                            <span class="special-price"><span class="price product-price">2.000.000₫</span>
                            </span> <!-- Giá Khuyến mại -->
                            <span class="old-price">
                                <del class=" product-price-old sale">2.500.000₫</del>
                            </span> <!-- Giá gốc -->
                            <span class="badge rounded-pill bg-danger">-20%</span>
                            <div class="save-price">
                                (Tiết kiệm: <span>500.000₫</span>)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="alert alert-light">
                    <img src="assets/image/frame-7.webp" class="rounded" alt="Cinque Terre" width="280"
                        height="265">
                    <div class="text-center pt-3 mt-3 border-top">
                        <p class="product-vendor">EGA</p>
                        <span class="product-name">
                            <a href="product_detail.html">Lắc tay đá thạch anh tím</a>
                        </span>
                        <div class="price-box">
                            <span class="special-price"><span class="price product-price">37.000.000₫</span>
                            </span> <!-- Giá Khuyến mại -->
                            <span class="old-price">
                                <del class=" product-price-old sale">40.000.000₫</del>
                            </span> <!-- Giá gốc -->
                            <span class="badge rounded-pill bg-danger">-8%</span>
                            <div class="save-price">
                                (Tiết kiệm: <span>3.000.000₫</span>)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3 mt-3 text-center">
                <a href="product.html">
                    <button type="button" class="btn btn-outline-dark">Xem tất cả</button>
                </a>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('assets/js/main.js')}}"></script>

@endsection