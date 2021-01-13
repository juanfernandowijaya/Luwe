@extends('layout/main')
@section('title','Home')

@section('container')
<!-- Banner -->
<div id="banner" class="banner_recommendation full-screen-mode parallax">
    <div class="container pr">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="banner-static">
                <div class="banner-text">
                    <div class="banner-cell">
                        <h1 style="color:#f9c648;font-size:30px;font-weight:900;font-family:">REKOMENDASI</h1>
                        <div class="row">
                            <div class="col-6 col-md-4"></div>
                            <div class="col-6 col-md-4">
                                <p style="font-size: 20px;color:white">Mau makan tapi masih bingung mau makan apa? cari sana sini masih bingung sampai perut kosong? cek aja langsung di rekomendasi kami minggu ini</p>
                            </div>
                            <div class="col-6 col-md-4"></div>
                        </div>
                        <div class="book-btn">
                        </div>
                    </div>
                    <!-- end banner-cell -->
                </div>
                <!-- end banner-text -->
            </div>
            <!-- end banner-static -->
        </div>
        <!-- end col -->
    </div>
    <!-- end container -->
</div>
<div id="about" class="about-main pad-top-100 pad-bottom-100" style="background-color: #e5e5e5;">
    <div class="container">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 style="color: black;" class="block-title color-white text-center m">Populer Minggu ini</h2>
                </div>
                <div class="team-box">
                    <div class="row">
                        @foreach($shopList as $sl)
                        <div class="col-md-3 col-sm-6">
                            <div class="sf-team">
                                <div class="thumb" style="border-top-left-radius:30px;border-top-right-radius:30px">
                                    <a href="/rekomendasi/{{$sl->id}}">
                                        <img style="border-top-left-radius:30px;border-top-right-radius:30px" height="200px" src="{{asset('../storage/assets_home/images/shopImage/'.$sl->shop_image)}}" alt="">
                                    </a>
                                </div>
                                <div class="text-col-1" style="border-bottom-left-radius:30px;border-bottom-right-radius:30px">
                                    <h3 style="color: white;float:left">{{$sl->shop_name}}</h3>
                                    <h4 style="color: white;float:right">{{$sl->shop_address}}</h4>
                                    <!-- <i class="fas fa-store"></i> -->
                                </div>
                            </div>

                        </div>
                        @endforeach
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    <!-- end container -->
</div>

<section id="footer">
    <div id="footer" class="footer-main">
        <!-- end footer-news -->
        <div class="footer-box pad-top-70">
            <div class="container">
                <div class="row">
                    <div class="footer-in-main">
                        <div class="footer-logo">
                            <div class="text-center">
                                <img src="{{asset('../storage/assets_home/images/LogoBunder.png')}}" width="250" height="250" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-box-a">
                                <h3>Tentang Kami</h3>
                                <p>Luwe dibuat atas dasar tugas final project binus malang, dengan tema kuliner.</p>
                                <ul class="socials-box footer-socials pull-left">
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-google-plus"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-github"></i></div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <!-- end footer-box-a -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-box-c">
                                <h3>Kontak Luwe</h3>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span>
                                        +62 81235 581122
                                    </span>
                                </p>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span><a href="#">kuliner.luwe@gmail.com</a></span>
                                </p>
                            </div>
                            <!-- end footer-box-c -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-box-d">
                                <h3>Jam Beroperasi</h3>
                                <ul>
                                    <li>
                                        <p>Senin - Sabtu </p>
                                        <span> 10.00 - 21.00</span>
                                    </li>
                                    <li>
                                        <p>Minggu </p>
                                        <span> 8.00 - 22.00</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- end footer-box-d -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end footer-in-main -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div id="copyright" class="copyright-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6 class="copy-title"> Copyright &copy; 2020 Luwe <a href="#" target="_blank"></a> </h6>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->


</section>

@endsection