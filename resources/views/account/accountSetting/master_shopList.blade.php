@extends('layout/admin')
@section('title','Admin User Setting')

@section('menu')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<h1 class="h3 mb-4 text-gray-800">Shop Control Master</h1>
<div class="row">
    <div class="col-lg-12">
        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahRekomendasi">Add Shop</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Shop Name</th>
                    <th scope="col">Shop Address</th>
                    <th scope="col">Shop Contact</th>
                    <th scope="col">Shop Registered Date</th>
                    <th scope="col">Setting</th>
                </tr>
            </thead>
            <tbody>
                @foreach($shop as $sh)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$sh->shop_name}}</td>
                    <td>{{$sh->shop_address}}</td>
                    <td>{{$sh->shop_contact}}</td>
                    <td>{{$sh->created_at}}</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#product{{$sh->id}}" class="badge badge-pill badge-warning">Show Product</a>
                        <a href="" class="badge badge-pill badge-success">Edit</a>
                        <a href="" class="badge badge-pill badge-danger" onclick="return confirm('yakin??')">Delete</a>

                        <!-- Modal View Product -->
                        <div class="modal fade" id="product{{$sh->id}}" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="product{{$sh->id}}">{{$sh->shop_name}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">Product Price</th>
                                                    <th scope="col">Product Description</th>
                                                    <th scope="col">Product Stock</th>
                                                    <th scope="col">Product Upload Date</th>
                                                    <th scope="col">Setting</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($sh->productlists as $pl)
                                                <tr>
                                                    <th scope="row">{{$loop->iteration}}</th>
                                                    <td>{{$pl->product_name}}</td>
                                                    <td>{{$pl->product_price}}</td>
                                                    <td>{{$pl->product_description}}</td>
                                                    <td>{{$pl->product_stock}}</td>
                                                    <td>{{$pl->created_at}}</td>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#image{{$pl->id}}" class="badge badge-pill badge-warning">View Image</a>
                                                        <!-- Modal Product Image -->
                                                        <div class="modal fade" id="image{{$pl->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel"><span style="color: black;font-size: 20;font-weight:800 ">{{$pl->product_name}}</span></h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="autoplay">
                                                                            @foreach($pl->productimages as $image)
                                                                            <div>
                                                                                <img width="400px" height="400px" src="{{asset('../storage/assets_home/images/productImage/'.$image->product_image)}}" alt="..">
                                                                            </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection