@extends('layout/admin')
@section('title','Gallery')

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
<h1 class="h3 mb-4 text-gray-800">Gallery Master</h1>
<div class="row">
    <div class="col-lg-12">
        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addGallery">Add New Gallery Image</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gallery Item Name</th>
                    <th scope="col">Gallery Image</th>
                    <th scope="col">Gallery Description</th>
                    <th scope="col">Gallery Setting</th>
                </tr>
            </thead>
            <tbody>
                @foreach($gallery as $gal)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$gal->gallery_item_name}}</td>
                    <td>{{$gal->gallery_image}}</td>
                    <td>{{$gal->gallery_deskripsi}}</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#gal{{$gal->id}}" class="badge badge-pill badge-warning">Preview Image</a>
                        <a href="" class="badge badge-pill badge-success">Edit</a>
                        <a href="" class="badge badge-pill badge-danger" onclick="return confirm('yakin??')">Delete</a>
                    </td>
                </tr>
                <div class="modal fade" id="gal{{$gal->id}}" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$gal->gallery_item_name}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- <img src="{{asset('../storage/assets_home/images/gallery/'.$gal->gallery_image)}}" alt="" /> -->
                                <!-- <h1>COMMING SOON</h1> -->
                                <img width="465px" height="450px" src="{{asset('../storage/assets_home/images/gallery/'.$gal->gallery_image)}}" alt="">
                            </div>
                            <div class="col-md-12 description">
                                <!-- <h4>{{$gal->gallery_deskripsi}}</h4> -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Modal add Gallery -->
<div class="modal fade" id="addGallery" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Gallery Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/gallery" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="gallery_name" style="font-size:16px;color:black;font-weight:700">Image Name</label>
                        <input class="form-control" type="text" name="gallery_name" id="gallery_name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="gallery_image" style="font-size:16px;color:black;font-weight:700">Gallery Image</label>
                        <input class="form-control" type="file" name="gallery_image" id="gallery_image" placeholder="Image">
                    </div>
                    <div class="form-group">
                        <label for="gallery_desc" style="font-size:16px;color:black;font-weight:700">Gallery Description</label>
                        <input class="form-control" type="text" name="gallery_desc" id="gallery_desc" placeholder="Description">
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Preview Gallery -->

@endsection