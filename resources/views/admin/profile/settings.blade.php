@extends('admin.layouts.admin')
@section('title')
    {{ trans('main.Profile Settings') }}
@endsection
@section('content')
    <div class="col-8 ">
        <div class="card-header">
            {{ trans('main.Edit') }}  {{ trans('main.profile') }}
        </div>
        <div class="card-body bg-white rounded ">
            <form action="{{ route('admin.settings.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">{{ trans('main.name') }}</label>
                    <input type="text" class="form-control" value="{{ $admin->name }}" placeholder="Admin name"
                        name="name">

                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="oldPassword">{{ trans('main.old Password') }}</label>
                    <input type="password" class="form-control" placeholder="{{ trans('main.old Password') }}"
                        name="oldPassword">

                    @error('oldPassword')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="newPassword">{{ trans('main.new Password') }}</label>
                    <input type="password" class="form-control" placeholder="{{ trans('main.new Password') }}"
                        name="newPassword">

                    @error('newPassword')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">{{ trans('main.Image') }}</label>
                    <input type="file" class="form-control " placeholder="admin Image" name="image">

                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group text-center">
                    <button class="btn btn-primary mt-3" type="submit">{{ trans('main.update') }}</button>
                </div>

            </form>
        </div>
    </div>
@endsection
