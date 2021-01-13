@extends('layout/main')
@section('title','Home')

@section('container')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!-- Banner -->
<div id="banner" class="banner_detail full-screen-mode parallax">
    <div class="container pr">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- end banner-static -->
        </div>
        <!-- end col -->
    </div>
    <!-- end container -->
</div>

<div id="about" class="about-main pad-top-100 pad-bottom-100" style="background-color: #e5e5e5;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 style="color: black;margin-top:-50px" class="block-title color-white text-center m">{{$shopList->shop_name}}</h2>
                <div><img width="1200px" height="400px" src="{{asset('../storage/assets_home/images/shopImage/'.$shopList->shop_image)}}" alt=""></div>
            </div>
            <!-- end col -->
        </div>
        <div class="row">
            <div class="slider_wrap col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div style="margin-top:20px;" class="banner_slider">
                    @foreach($shopList->productlists as $PL)
                    <img width="1000px" height="500px" src="{{asset('../storage/assets_home/images/productImage/'.$PL->product_image)}}" alt="">
                    @endforeach
                </div>
                <div style="margin-top:5px;" class="thumbnail_slider_area">
                    <div class="container_slider">
                        <div class="row thumbnail_slider">
                            @foreach($shopList->productlists as $PL)
                            <div class="col">
                                <img width="120px" height="100px" src="{{asset('../storage/assets_home/images/productImage/'.$PL->product_image)}}" alt="">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 15px;text-align:center" class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <h1 style="font-size:35px;font-weight:700">Tentang Tempat Ini</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil accusantium excepturi accusamus! Nisi
                    repellat quo reprehenderit in dolores, beatae, cumque sapiente maxime eos est dolor quibusdam omnis reiciendis
                    mollitia placeat? Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio vel dolores voluptates impedit
                    optio harum alias, voluptatum, deserunt laborum officiis at eos sit. Rerum ipsum laudantium dolore esse voluptas officiis?</p>
                <h1 style="color: black;font-weight:600;font-size:35;padding-top:20px">JADWAL BUKA</h1>
                <h4>Hari : <span style="color:red">{{$shopList->shop_dayopen}}</span></h4>
                <h4>Jam : <span style="color:red">{{$shopList->shop_timeopen}}</span></h4>
                <h4>Keterangan : <span style="color:red">{{$shopList->shop_desc}}</span></h4>
            </div>
        </div>
        <!-- end row -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="text-align: center;">Gambar</th>
                    <th scope="col"></th>
                    <th scope="col">Nama Menu</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($shopList->productlists as $PL)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td colspan="2">
                        <a data-toggle="modal" data-target="#detailproduct{{$PL->id}}" href="">
                            <img width="120px" height="100px" src="{{asset('../storage/assets_home/images/productImage/'.$PL->product_image)}}" alt="">
                        </a>
                    </td>
                    <td>{{$PL->product_name}}</td>
                    <td>{{$PL->product_price}}</td>
                    <td>{{$PL->product_description}}</td>
                </tr>
                <div class="modal fade" id="detailproduct{{$PL->id}}" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$PL->product_name}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img width="565px" height="450px" src="{{asset('../storage/assets_home/images/productImage/'.$PL->product_image)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
        <!-- Menu Table -->
    </div>
    <button type="button" data-toggle="modal" data-target="#order" class="btn btn-primary btn-lg btn-block">Block level button</button>
    <div class="modal fade" id="order" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Gallery Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/order" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group" hidden>
                            <label for="user_id" style="font-size:16px;color:black;font-weight:700">user id</label>
                            <input class="form-control" type="text" name="user_id" id="user_id" placeholder="Order" value="{{Auth::user()->id}}">
                        </div>
                        <div class="form-group">
                            <label for="order_desc" style="font-size:16px;color:black;font-weight:700">Order Description</label>
                            <textarea class="form-control" id="order_desc" name="order_desc" placeholder="Type Your Order Here" rows="6"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="order_type" style="font-size:16px;color:black;font-weight:700">Order Type[Pickup/Delivery]</label>
                            <select id="order_type" name="order_type" class="form-control">
                                <option selected>Choose..</option>
                                <option value="Pickup">Pickup</option>
                                <option value="Delivery">Delivery</option>
                            </select>
                            <!-- <input class="form-control" type="text" name="order_type" id="order_type" placeholder="Type"> -->
                        </div>
                        <div class="form-group">
                            <label for="order_payment" style="font-size:16px;color:black;font-weight:700">Payment Method[Cash/Digital]</label>
                            <select id="order_payment" name="order_payment" class="form-control">
                                <option selected>Choose..</option>
                                <option value="Cash">Cash</option>
                                <option value="Digital Wallet">Digital Wallet</option>
                            </select>
                            <!-- <input class="form-control" type="text" name="order_payment" id="order_payment" placeholder="Payment Method"> -->
                        </div>
                        <div class="form-group">
                            <label for="order_address" style="font-size:16px;color:black;font-weight:700">Address</label>
                            <input class="form-control" type="text" name="order_address" id="order_address" placeholder="Address">
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Order</button>
                    </form>
                </div>
            </div>
        </div>
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