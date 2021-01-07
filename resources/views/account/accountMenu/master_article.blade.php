@extends('layout/admin')
@section('title','Article')

@section('menu')
<h1 class="h3 mb-4 text-gray-800">Article Master</h1>
<div class="row">
    <div class="col-lg-12">
        <!-- <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahArticle">Tambah Rekomendasi</a> -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User Name</th>
                    <th scope="col">User Comment</th>
                    <th scope="col">User Instagram Link</th>
                    <th scope="col">Article Upload Date</th>
                    <th scope="col">Gallery Setting</th>
                </tr>
            </thead>
            <tbody>
                @foreach($article as $arc)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$arc->user->name}}</td>
                    <td>{{$arc->user_comment}}</td>
                    <td>{{$arc->user_instagram}}</td>
                    <td>{{$arc->created_at}}</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#article" class="badge badge-pill badge-warning">User Detail</a>
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
<div class="modal fade" id="tambahArticle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Add Article
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Preview Gallery -->
<div class="modal fade" id="article" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <div class="modal-body">
                <h1>COMMING SOON</h1>
            </div>
            <div class="col-md-12 description">
                <!-- deskripsi -->
            </div>
        </div>
    </div>
</div>
@endsection