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
<h1 class="h3 mb-4 text-gray-800">User Control Master</h1>
<div class="row">
    <div class="col-lg-12">
        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahRekomendasi">Tambah Rekomendasi</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User Name</th>
                    <th scope="col">User Authority</th>
                    <th scope="col">User Image</th>
                    <th scope="col">User Email</th>
                    <th scope="col">User Registered Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $us)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$us->name}}</td>
                    <td>{{$us->getRoleNames()}}</td>
                    <td>{{$us->image}}</td>
                    <td>{{$us->email}}</td>
                    <td>{{$us->created_at}}</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#admin{{$us->id}}" class="badge badge-pill badge-warning">Preview User</a>
                        <a href="" class="badge badge-pill badge-success">Edit</a>
                        <a href="" class="badge badge-pill badge-danger" onclick="return confirm('yakin??')">Delete</a>
                    </td>
                </tr>

                <!-- Modal Preview User -->
                <div class="modal fade" id="admin{{$us->id}}" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Change Authority</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="/admin/usersetting" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">User Name</label>
                                        <input type="username" class="form-control" id="username" name="username" value="{{$us->name}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">User Name</label>
                                        <input type="userid" class="form-control" id="userid" name="userid" value="{{$us->id}}" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Current Authority</label>
                                        <input type="authority" class="form-control" id="authority" name="authority" value="{{$us->getRoleNames()}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputState">Change Authority</label>
                                        <select id="inputState" name="inputState" class="form-control">
                                            <option value="0">Choose..</option>
                                            <option value="1">Admin</option>
                                            <option value="2">User</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Change</button>
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
                Tambah Gallery Disini
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


@endsection