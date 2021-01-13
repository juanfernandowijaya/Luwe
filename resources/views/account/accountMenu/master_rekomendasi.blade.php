@extends('layout/admin')
@section('title','Rekomendasi')

@section('menu')
<h1 class="h3 mb-4 text-gray-800">Rekomendasi Master</h1>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="row">
    <div class="col-lg-12">
        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahRekomendasi">Tambah Rekomendasi</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Gambar Produk</th>
                    <th scope="col">Deskripsi Produk</th>
                    <th scope="col">Link Produk</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rekomendasi as $reko)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$reko->nama_rekomendasi}}</td>
                    <td>{{$reko->gambar_rekomendasi}}</td>
                    <td>{{$reko->deskripsi_rekomendasi}}</td>
                    <td>{{$reko->link_rekomendasi}}</td>
                    <td>
                        <a href="" class="badge badge-pill badge-success">Edit</a>
                        <a href="" class="badge badge-pill badge-danger" onclick="return confirm('yakin??')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Modal add Rekomendasi -->
<div class="modal fade" id="tambahRekomendasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-size: 25px;color:black;font-weight:700">Tambah Rekomendasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/rekomendasi" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="recommendation_name" style="font-size:16px;color:black;font-weight:700">Recommendation Name</label>
                        <input class="form-control" type="text" name="recommendation_name" id="recommendation_name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="recommendation_image" style="font-size:16px;color:black;font-weight:700">Recommendation Image</label>
                        <input class="form-control" type="file" name="recommendation_image" id="recommendation_image" placeholder="Image">
                    </div>
                    <div class="form-group">
                        <label for="recommendation_desc" style="font-size:16px;color:black;font-weight:700">Recommendation Description</label>
                        <input class="form-control" type="text" name="recommendation_desc" id="recommendation_desc" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label for="recommendation_link" style="font-size:16px;color:black;font-weight:700">Recommendation Link</label>
                        <input class="form-control" type="text" name="recommendation_link" id="recommendation_link" placeholder="Link">
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>
@endsection