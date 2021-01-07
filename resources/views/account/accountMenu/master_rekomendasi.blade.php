@extends('layout/admin')
@section('title','Rekomendasi')

@section('menu')
<h1 class="h3 mb-4 text-gray-800">Rekomendasi Master</h1>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Rekomendasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Tambah Rekomendasi Disini
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection