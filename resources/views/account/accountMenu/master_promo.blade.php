@extends('layout/admin')
@section('title','Promo')

@section('menu')
<h1 class="h3 mb-4 text-gray-800">Promo Master</h1>
<div class="row">
    <div class="col-lg-12">
        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addPromo">Tambah Promo</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Gambar Produk</th>
                    <th scope="col">Deskripsi Produk</th>
                    <th scope="col">Link Produk</th>
                    <th scope="col">Setting</th>
                </tr>
            </thead>
            <tbody>
                @foreach($promo as $p)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$p->nama_promo}}</td>
                    <td>{{$p->gambar_promo}}</td>
                    <td>{{$p->deskripsi_promo}}</td>
                    <td>{{$p->snk_promo}}</td>
                    <td>
                        <a href="" class="badge badge-pill badge-success">Edit</a>
                        <a href="" class="badge badge-pill badge-danger" onclick="return confirm('yakin??')">Delete</a>
                    </td>
                </tr>
                @foreach($p->kodepromos as $kp)
                <tr>
                    <th colspan="2" scope="row"><span style="color:red;font-weight: 700;">{{$loop->parent->iteration}}.{{$loop->iteration}}</span></th>
                    <td colspan=" 2"> <span style="color:red;font-size:15px;font-weight:700"> {{$kp->kode_promo}}</span></td>
                    <td>{{$kp->kuota}}</td>
                    <td>
                        <a href="" class="badge badge-pill badge-success">Edit</a>
                        <a href="" class="badge badge-pill badge-danger" onclick="return confirm('yakin??')">Delete</a>
                    </td>
                </tr>
                @endforeach
                @endforeach
            </tbody>
        </table>

    </div>
</div>


<!-- Modal Add Promo -->
<div class="modal fade" id="addPromo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Rekomendasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Add Promo
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Add Kode Promo -->
@endsection