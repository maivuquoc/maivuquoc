@extends('layouts.site')
@section('title', 'Chi tiết sản phẩm')
<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/layoutsite.css') }}">
<link rel="stylesheet" href="{{ asset('layoutsite.css') }}">
@section('header')
    <link rel="stylesheet" href="{{ asset('product.css')}}">
@endsection
@section('maincontent')
<section class="page_productdetail section">
    <div class="container py-3">
        <div class="row">
            <div class="col-lg-2">
                <div class="col">
                    <img src="assets/image/frame-8.webp" class="rounded" alt="Cinque Terre" class="img-fluid"
                        width="250" height="235">
                </div>
                <div class="col">
                    <img src="assets/image/frame-9.webp" class="rounded" alt="Cinque Terre" class="img-fluid"
                        width="250" height="235">
                </div>
            </div>

            <div class="col-lg-4">
                <img src="assets/image/frame-9.webp" class="img-thumbnail" alt="Cinque Terre" width="370"
                    height="325">
                <h4 class="py-5 ">Chia sẻ
                    <img src="assets/image/facebook.png">
                    <img src="assets/image/instagram.png">
                    <img src="assets/image/tiktok.png">
                </h4>
            </div>
            <div class="col-lg-6">
                <div class="col">
                    <h3>Nhẫn kim cương EVA</h3>
                    <p>Thương hiệu: EVA </p>
                    <p>Mã sản phẩm: Đang cập nhật</p>
                </div>
                <div class="col">
                    <div class="price-box">
                        <span class="special-price"><span class="price product-price">17.000.000₫</span>
                        </span> <!-- Giá Khuyến mại -->
                        <span class="old-price">
                            <del class=" product-price-old sale">25.000.000₫</del>
                        </span> <!-- Giá gốc -->
                        <span class="badge rounded-pill bg-danger">-32%</span>
                        <div class="save-price">
                            (Tiết kiệm: <span>8.000.000₫</span>)
                        </div>
                    </div>
                    <div class="product-promotion rounded-sm" id="ega-salebox">
                        <h3
                            class="product-promotion__heading rounded-sm d-inline-flex align-items-center text-danger py-3">
                            <img src="assets/image/icon-product-promotion.png" alt="Nhẫn kim cương EVA" width="22"
                                height="22" class="mr-2">
                            KHUYẾN MÃI - ƯU ĐÃI
                        </h3>
                        <ul class="promotion-box">
                            <li>Nhập mã <strong>EGANY</strong> giảm thêm 5% đơn hàng từ 30 triệu <span
                                    class="smb-copy smb-cursor-pointer text-danger" data-code="EGANY"
                                    data-copied-text="Đã chép">Sao chép</span></li>
                            <li>Miễn phí vận chuyển toàn quốc cho tất cả đơn hàng</li>
                            <li>Tặng ngay Voucher mua hàng trị giá 10 triệu cho đơn hàng từ 50 triệu</li>
                            <li>Tặng kèm dịch vụ gói quà chuyên nghiệp</li>
                            <li>Giảm ngay 30% khi mua trọn bộ BST trang sức EVA mới năm 2023</li>
                        </ul>
                    </div>
                    <p>Mã giảm giá</p>
                    <span class="badge bg-danger">EGA05</span>
                    <span class="badge bg-danger">EGA10</span>
                    <span class="badge bg-danger">EGA15</span>
                    <span class="badge bg-danger">FREESHIP</span>
                    <div class="mb-3 mt-3">
                        <span>
                            <button type="button" class="btn btn-outline-dark">Thêm vào giỏ hàng</button>
                            <button type="button" class="btn btn-dark">Mua ngay</button>
                        </span>
                    </div>
                </div>

                <div class="col pt-3 mt-3 border-top py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img class="img-fluid" width="24" height="24"
                                    src="assets/image/policy_product_image_1.png" alt="">
                                Giao hàng miễn phí toàn quốc
                            </div>
                            <div class="col">
                                <img class="img-fluid " width="24" height="24"
                                    src="assets/image/policy_product_image_2.png" alt="">
                                Tích điểm tất cả sản phẩm
                            </div>
                            <div class="col">
                                <img class="img-fluid " width="24" height="24"
                                    src="assets/image/policy_product_image_3.png" alt="">
                                Giảm 5% khi thanh toán online
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="py-3">Mô tả sản phẩm</h4>
                <div class="container">
                    <p class="pt-2 mt-3 border-top">
                        Cuốn hút đến từ sự thanh lịch, kim cương chưa bao giờ là lỗi thời khi nàng biết chọn cho
                        mình
                        những thiết kế độc đáo, trẻ trung. Sở hữu thiết kế tinh xảo, trẻ trung, đôi bông tai Kim
                        cương
                        EGA Luxury không chỉ bừng sáng nét thanh tú, rạng ngời của nàng mà còn là món quà mang ý
                        nghĩa
                        vĩnh cửu.
                    </p>
                    <p>
                        Bên cạnh đó, ánh kim rực rỡ của vàng 14K sẽ tôn lên vẻ đẹp cổ điển của phụ nữ Á đông. Nàng
                        đừng
                        ngần ngại phối nữ trang đính kim cương với những bộ cánh dạ tiệc hay phục trang tối giản,
                        đơn
                        sắc để hoàn thiện vẻ ngoài sang trọng của mình.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-3">
        <div class="row">
            <h3>Sản phẩm cùng loại</h3>
            <div class="col-md-3 ">
                <div class="alert alert-light">
                    <img src="assets/image/frame-6-0c55460e-915a-4d62-8d0e-1e8f458d8eb0.webp" class="rounded"
                        alt="Cinque Terre" width="280" height="265">
                    <div class="text-center pt-3 mt-3 border-top">
                        <p class="product-vendor">EVA</p>
                        <span class="product-name">
                            <a href="product_detail.html">Bông tai kim cương EVA</a>
                        </span>
                        <div class="price-box">
                            <span class="special-price"><span class="price product-price">27.000.000₫</span>
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
            <div class="col-md-3 ">
                <div class="alert alert-light">
                    <img src="assets/image/frame-1.webp" class="rounded" alt="Cinque Terre" width="280"
                        height="265">
                    <div class="text-center pt-3 mt-3 border-top">
                        <p class="product-vendor">EVA</p>
                        <span class="product-name">
                            <a href="product_detail.html">Dây chuyền kim cương EVA</a>
                        </span>
                        <div class="price-box">
                            <span class="special-price"><span class="price product-price">33.000.000₫</span>
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
            
        </div>
    </div>
</section>
<script src="{{ asset('assets/js/main.js')}}"></script>

@endsection