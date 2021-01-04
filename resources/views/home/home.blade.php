@extends('layout/main')
@section('title','Home')

@section('container')
<!-- Banner -->
<div id="banner" class="banner full-screen-mode parallax">
    <div class="container pr">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="banner-static">
                <div class="banner-text">
                    <div class="banner-cell">
                        <!---  <h1>Dinner with us <span class="typer" id="some-id" data-delay="200" data-delim=":"
                                    data-words="Friends:Family:Officemates" data-colors="red"></span><span
                                    class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>-->
                        <img src="{{asset('../storage/assets_home/images/LogoBunder.png')}}" width="450" height="450" alt="">
                        <p>Temukan kuliner terbaik di kota Malang</p>
                        <div class="book-btn">
                            <a href="#reservation" class="table-btn hvr-underline-from-center">Booking Kuliner
                                Favorit anda</a>
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

<div id="about" class="about-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title"> Luwe </h2>
                    <h3>APA ITU LUWE??</h3>
                    <p> Luwe.com adalah sebuah website yang menyediakan berbagai informasi tentang kuliner
                        terutama di kota Malang. Kami memberikan informasi rekomendasi kuliner di kota Malang
                        hingga yang paling jarang disorot, informasi promo dan diskon bagi kalian yang ingin
                        berhemat dan tempat oleh-oleh untuk kerabat di kampung halaman. Selain itu kami juga
                        menyediakan artikel tentang kuliner yang gak ketinggalan zaman.</p>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="about-images">
                        <img class="about-main" src="{{asset('../storage/assets_home/images/gambarhome1.png')}}" alt="About Main Image">
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<section id="rekomendasi">
    <div class="special-menu pad-top-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title color-white text-center m"> Rekomendasi Hari ini </h2>
                        <h3 class="rec_header block-title"> Rekomendasi kuliner tebaik hanya di luwe
                        </h3>
                    </div>
                    <div class="special-box">
                        <div id="owl-demo">
                            <!--looping menu-->
                            @foreach($rekomendasi as $reko)
                            <div class="item item-type-zoom">
                                <a href="{{$reko->link_rekomendasi}}" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            {{$reko->nama_rekomendasi}}
                                            <div class="line"></div>
                                            <div class="dit-line">{{$reko->deskripsi_rekomendasi}}</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="{{asset('../storage/assets_home/images/rekomendasi/'.$reko->gambar_rekomendasi)}}" alt="rekomendasi-menu">
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- end special-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end special-menu -->
</section>

<!--Promo-->
<section id="promo">
    <div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="promo_header">
                        <h2>Promo Dompet Digital</h2>
                        <p>Dompet Lapar, Perut Jangan. Promo Dompet Digital Menantimu</p>
                    </div>
                    <div class="team-box">
                        <div class="row">
                            @foreach($promo as $p)
                            <div class="col-md-3 col-sm-6">
                                <div class="sf-team">
                                    <div class="thumb">
                                        <a data-toggle="modal" data-target="#promo{{$p->id}}" href="#"><img src="{{asset('../storage/assets_home/images/promo/'.$p->gambar_promo)}}" alt=""></a>
                                    </div>
                                    <div class="text-col">
                                        <h3>{{$p->nama_promo}}</h3>
                                        <p>..</p>
                                    </div>
                                </div>

                            </div>
                            <div class="modal fade" id="promo{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="promo{{$p->id}}">{{$p->nama_promo}}
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h6>Syarat dan Ketentuan</h6>
                                            <li>{{$p->snk_promo}}</li>
                                            <h5>Kode Promo</h5>
                                            <ul>
                                                @foreach($p->kodepromos as $kp)
                                                <li>
                                                    <h4>
                                                        <span style="color:black;font-size:17px;font-weight:500">{{$kp->kode_promo}}</span>
                                                        <span style="color:black;font-size:18px;font-weight:600">Kuota</span>
                                                        <span> {{$kp->kuota}}</span>
                                                    </h4>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end team-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end team-main -->
</section>

<section id="gallery">
    <div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">

                        <h2 class="block-title text-center">
                            Galeri Menu Favorit
                        </h2>
                        <p class="title-caption text-center">Membeli kuliner di kota malang <span>Mudah</span> dengan
                            <span class="luwe01">Luwe</span>
                        </p>
                    </div>
                    <div class="gal-container clearfix">
                        @foreach ($gallery as $gal)
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#gal{{$gal->id}}">
                                    <img src="{{asset('../storage/assets_home/images/gallery/'.$gal->gallery_image)}}" alt="">
                                </a>
                                <div class="modal fade" id="gal{{$gal->id}}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="{{asset('../storage/assets_home/images/gallery/'.$gal->gallery_image)}}" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>{{$gal->gallery_deskripsi}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- end gal-container -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
</section>
<section id="Artikel">
    <div id="blog" class="blog-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="block-title text-center">
                        Artikel
                    </h2>
                    <div class="blog-box clearfix">
                        @foreach ($article as $art)
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                        <img src="{{asset('../storage/assets_home/images/UserImage/'.$art->user->image)}}" width="700" height="350" alt="" />
                                        <div class="overlay">
                                            <a href="{{$art->user_instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-dit">
                                        <h1>{{$art->user->name}}</h1>
                                        <p>{{$art->user_comment}}</p>
                                        <h4>{{$art->created_at}}</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        @endforeach
                    </div>
                    <!-- end blog-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

</section>
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