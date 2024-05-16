@extends('layouts.site')
@section('title', 'Liên hệ')
<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/layoutsite.css') }}">
    <link rel="stylesheet" href="{{ asset('layoutsite.css') }}">
@section('header')
    <link rel="stylesheet" href="product.css">
@endsection
@section('maincontent')
<section class="page_contact section">
    <div class="container py-3">
        <div class="row">
            <div class="col-lg-6">
                
                <h1>Công ty TNHH EGANY</h1>
                <div class="mb-3">
                    <ul><i class="fa-solid fa-location-dot"></i>Địa chỉ: 70 Lu Gia, District 11, Ho Chi Minh City.
                    </ul>
                    <ul><i class="fa-solid fa-mobile"></i>Số điện thoại: 0966200317</ul>
                    <ul><i class="fa-solid fa-envelope"></i>Email: vuquoc1906@gmail.com</ul>
                </div>

                <h2 class="pt-3 mt-3 border-top">Liên hệ với chúng tôi</h2>
                <form action="/action_page.php">
                    <div class="">
                        <div class="mb-3">
                            <label for="name" class="form-label"></label>
                            <input type="name" class="form-control" id="name" placeholder="Họ và tên" name="name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label"></label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="sdt" class="form-label"></label>
                            <input type="sodienthoai" class="form-control" id="sdt" placeholder="Số điện thoại"
                                name="sdt">
                        </div>
                        <div class="mb-3">
                            <label for="comment"></label>
                            <textarea class="form-control" rows="6" id="comment" placeholder="Nhập nội dung"
                                name="text"></textarea>
                        </div>
                        <div class="mb-3 mt-3">
                            <button type="button" class="btn btn-outline-dark">Gửi liên hệ của bạn</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-6">
                <div class="iFrameMap px-2 mt-3 mt-lg-0">
                    <div id="contact_map" class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.904611732553!2d105.81388241542348!3d21.03650239288885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab1946cc7e23%3A0x87ab3917166a0cd5!2zQ8O0bmcgdHkgY-G7lSBwaOG6p24gY8O0bmcgbmdo4buHIFNBUE8!5e0!3m2!1svi!2s!4v1555900531747!5m2!1svi!2s"
                            width="600" height="450" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('assets/js/main.js')}}"></script>

@endsection