@extends('admin.layouts.admin')
@section('title')
    {{ trans('main.Edit') }} {{ $category->name }}
@endsection
@section('content')
    <div class="col-8 ">
        <div class="card-header">
            {{ trans('main.Edit') }} {{ $category->name }}
        </div>
        <div class="card-body bg-white rounded ">
            <form action="{{ route('admin.category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">{{ trans('main.name') }}</label>
                    <input type="text" class="form-control" value="{{ $category->name }}" placeholder="category name"
                        name="name">

                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">{{ trans('main.Image') }}</label>
                    <input type="file" class="form-control " placeholder="category name" name="image">

                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-primary mt-3" type="submit">{{trans('main.update')}}</button>
                </div>

            </form>
        </div>
    </div>
@endsection
