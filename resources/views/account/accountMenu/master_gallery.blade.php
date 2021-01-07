@extends('layout/admin')
@section('title','Gallery')

@section('menu')
<h1 class="h3 mb-4 text-gray-800">Gallery Master</h1>
<div class="row">
    <div class="col-lg-12">
        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahRekomendasi">Tambah Rekomendasi</a>
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
                        <a href="#" data-toggle="modal" data-target="#gal" class="badge badge-pill badge-warning">Preview</a>
                        <a href="" class="badge badge-pill badge-success">Edit</a>
                        <a href="" class="badge badge-pill badge-danger" onclick="return confirm('yakin??')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Modal add Gallery -->
<div class="modal fade" id="tambahRekomendasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Add Gallery
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Preview Gallery -->
<div class="modal fade" id="gal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <div class="modal-body">
                <!-- <img src="{{asset('../storage/assets_home/images/gallery/'.$gal->gallery_image)}}" alt="" /> -->
                <h1>COMMING SOON</h1>
            </div>
            <div class="col-md-12 description">
                <!-- <h4>{{$gal->gallery_deskripsi}}</h4> -->
            </div>
        </div>
    </div>
</div>
@endsection