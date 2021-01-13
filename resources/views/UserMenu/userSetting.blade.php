@extends('layout/admin')
@section('title','My Account')
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
<h1 style="font-size: 32px;font-weight:700;color:black" class="h3 mb-4">Ini User Setting</h1>
<div class="row">
    <div class="col-lg-8">
        <form action="/user/account" method="POST" class="was-validated" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}">
                </div>
            </div>
            <div class="form-group row" hidden>
                <label for="name_id" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_id" name="name_id" value="{{Auth::user()->id}}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Picture</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="{{asset('../storage/assets_home/images/UserImage/'.Auth::user()->image)}}" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image" value="Auth::user()->image">
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save Changesssssss</button>
        </form>
    </div>
</div>
@endsection