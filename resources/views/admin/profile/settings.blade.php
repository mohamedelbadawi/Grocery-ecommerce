@extends('admin.layouts.admin')
@section('title')
    Profile Settings
@endsection
@section('content')
    <div class="col-8 ">
        <div class="card-header">
            Edit {{ $admin->name }} profile
        </div>
        <div class="card-body bg-white rounded ">
            <form action="{{ route('admin.settings.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Admin name</label>
                    <input type="text" class="form-control" value="{{ $admin->name }}" placeholder="Admin name"
                        name="name">

                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="oldPassword">old Password</label>
                    <input type="password" class="form-control" placeholder="old password" name="oldPassword">

                    @error('oldPassword')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="newPassword">new Password</label>
                    <input type="password" class="form-control" placeholder="new password" name="newPassword">

                    @error('newPassword')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">image</label>
                    <input type="file" class="form-control " placeholder="admin Image" name="image">

                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group text-center">
                    <button class="btn btn-primary mt-3" type="submit">update</button>
                </div>

            </form>
        </div>
    </div>
@endsection
