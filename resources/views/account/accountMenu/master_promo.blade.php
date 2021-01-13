@extends('layout/admin')
@section('title','Promo')

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
                        <a href="" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#promo{{$p->id}}">Tambah Promo</a>
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
                <div class="modal fade" id="promo{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$p->nama_promo}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="/admin/promo/code" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="promo_code" style="font-size:16px;color:black;font-weight:700">Promo Code</label>
                                        <input class="form-control" type="text" name="promo_code" id="promo_code" placeholder="Code">
                                    </div>
                                    <div class="form-group">
                                        <label for="promo_quota" style="font-size:16px;color:black;font-weight:700">Promo Quota</label>
                                        <input class="form-control" type="text" name="promo_quota" id="promo_quota" placeholder="Quota">
                                    </div>
                                    <div class="form-group" hidden>
                                        <label for="promo_id" style="font-size:16px;color:black;font-weight:700">Promo id</label>
                                        <input class="form-control" type="text" name="promo_id" id="promo_id" placeholder="Name" value="{{$p->id}}">
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add New Code</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

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
                <h5 class="modal-title" id="exampleModalLabel">Add Promo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/promo" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="promo_name" style="font-size:16px;color:black;font-weight:700">Promo Name</label>
                        <input class="form-control" type="text" name="promo_name" id="promo_name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="promo_image" style="font-size:16px;color:black;font-weight:700">Promo Image</label>
                        <input class="form-control" type="file" name="promo_image" id="promo_image" placeholder="Image">
                    </div>
                    <div class="form-group">
                        <label for="promo_desc" style="font-size:16px;color:black;font-weight:700">Promo Description</label>
                        <input class="form-control" type="text" name="promo_desc" id="promo_desc" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label for="promo_snk" style="font-size:16px;color:black;font-weight:700">Promo Link</label>
                        <input class="form-control" type="text" name="promo_snk" id="promo_snk" placeholder="S&K">
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Add Kode Promo -->
@endsection