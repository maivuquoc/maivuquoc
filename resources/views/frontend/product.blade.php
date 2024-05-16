@extends('layouts.site')
@section('title', 'Tất cả sản phẩm')
<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/layoutsite.css') }}">
    <link rel="stylesheet" href="{{ asset('layoutsite.css') }}">
@section('header')
    <link rel="stylesheet" href="product.css">
@endsection
@section('maincontent')
<section class="page_product section">
    <div class="container py-3">
        <div class="row">
            <img src="assets/image/collection_main_banner.webp">
            <h3 class="py-3">Tất cả sản phẩm</h3>

            <div class="col-md-3">
                <div class="container">
                    <div class="col">
                        <p>Thương hiệu</p>
                    </div>
                    <div class="col">
                        <div class="col">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Diamond Zone
                            </label>
                        </div>
                        <div class="col">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> EGA
                            </label>
                        </div>
                        <div class="col">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> EVA
                            </label>
                        </div>
                        <div class="col">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Queen Beauty
                            </label>
                        </div>
                        <div class="col">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Soleil
                            </label>
                        </div>
                    </div>
                    <div class="col pt-3 mt-3 border-top">
                        <p>Màu sắc</p>
                        <div class="col">
                            <div class="col">
                                <div class="spinner-border text-danger"></div> Đỏ
                            </div>
                        </div>
                        <div class="col">
                            <div class="col">
                                <div class="spinner-border text-warning"></div> Vàng
                            </div>
                        </div>
                        <div class="col">
                            <div class="col">
                                <div class="spinner-border text-info "></div> Xanh
                            </div>
                        </div>
                        <div class="col">
                            <div class="col">
                                <div class="spinner-border text-secondary"></div> Xám
                            </div>
                        </div>
                        <div class="col">
                            <div class="col">
                                <div class="spinner-border text-dark"></div> Đen
                            </div>
                        </div>
                    </div>
                    <div class="col pt-3 mt-3 border-top">
                        <p>Mức giá</p>
                        <div class="col">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Giá dưới 1.000.000₫
                            </label>
                        </div>
                        <div class="col">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> 1.000.000₫ -
                                2.000.000₫
                            </label>
                        </div>
                        <div class="col">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> 2.000.000₫ -
                                3.000.000₫
                            </label>
                        </div>
                        <div class="col">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> 3.000.000₫ -
                                5.000.000₫
                            </label>
                        </div>
                        <div class="col">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> 5.000.000₫ -
                                7.000.000₫
                            </label>
                        </div>
                        <div class="col">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> 7.000.000₫ -
                                10.000.000₫
                            </label>
                        </div>
                        <div class="col">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Giá trên
                                10.000.000₫
                            </label>
                        </div>
                    </div>
                    <div class="col pt-3 mt-3 border-top">
                        <p>Dịch vụ giao hàng</p>
                        <div class="col">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Miễn phí giao hàng
                            </label>
                        </div>
                        <div class="col">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Giao hàng nhanh 4h
                            </label>
                        </div>
                        <div class="col">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Giao hàng tiết kiệm
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="alert alert-light">
                                <div>
                                    <img src="assets/image/frame-9.webp" class="rounded" alt="Cinque Terre"
                                        width="280" height="265">
                                </div>
                                <div class="text-center pt-3 mt-3 border-top">
                                    <p class="product-vendor">EVA</p>
                                    <span class="product-name">
                                        <a href="product_detail.html">Nhẫn kim cương EVA</a>
                                    </span>
                                    <div class="price-box">
                                        <span class="special-price"><span
                                                class="price product-price">17.000.000₫</span>
                                        </span> <!-- Giá Khuyến mại -->
                                        <span class="old-price">
                                            <del class=" product-price-old sale">25.000.000₫</del>
                                        </span> <!-- Giá gốc -->
                                        <span class="badge rounded-pill bg-danger">-32%</span>
                                        <div class="save-price">
                                            (Tiết kiệm: <span>8.000.000₫</span>)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="alert alert-light">
                                <img src="assets/image/frame-6-0c55460e-915a-4d62-8d0e-1e8f458d8eb0.webp"
                                    class="rounded" alt="Cinque Terre" width="280" height="265">
                                <div class="text-center pt-3 mt-3 border-top">
                                    <p class="product-vendor">EVA</p>
                                    <span class="product-name">
                                        <a href="product_detail.html">Bông tai kim cương EVA</a>
                                    </span>
                                    <div class="price-box">
                                        <span class="special-price"><span
                                                class="price product-price">27.000.000₫</span>
                                        </span> <!-- Giá Khuyến mại -->
                                        <span class="old-price">
                                            <del class=" product-price-old sale">40.000.000₫</del>
                                        </span> <!-- Giá gốc -->
                                        <span class="badge rounded-pill bg-danger">-33%</span>
                                        <div class="save-price">
                                            (Tiết kiệm: <span>13.000.000₫</span>)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="alert alert-light">
                                <img src="assets/image/frame-1.webp" class="rounded" alt="Cinque Terre" width="280"
                                    height="265">
                                <div class="text-center pt-3 mt-3 border-top">
                                    <p class="product-vendor">EVA</p>
                                    <span class="product-name">
                                        <a href="product_detail.html">Dây chuyền kim cương EVA</a>
                                    </span>
                                    <div class="price-box">
                                        <span class="special-price"><span
                                                class="price product-price">33.000.000₫</span>
                                        </span> <!-- Giá Khuyến mại -->
                                        <span class="old-price">
                                            <del class=" product-price-old sale">50.000.000₫</del>
                                        </span> <!-- Giá gốc -->
                                        <span class="badge rounded-pill bg-danger">-34%</span>
                                        <div class="save-price">
                                            (Tiết kiệm: <span>17.000.000₫</span>)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
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
                        <div class="col-md-4 ">
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
                        <div class="col-md-4 ">
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
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<script src="{{ asset('assets/js/main.js')}}"></script>

@endsection