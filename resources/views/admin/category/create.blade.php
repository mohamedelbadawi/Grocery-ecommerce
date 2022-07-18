@extends('admin.layouts.admin')
@section('title')
    {{trans('main.Add Category')}}
@endsection
@section('content')
    <div class="col-8 ">
        <div class="card-header">
            {{trans('main.Add Category')}}
        </div>
        <div class="card-body bg-white rounded ">
            <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">{{ trans('main.Arabic Category name') }}</label>
                    <input type="text" class="form-control" placeholder="{{trans('main.name')}}" name="name_ar">

                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">{{ trans('main.English Category name') }}</label>
                    <input type="text" class="form-control" placeholder="{{trans('main.name')}}" name="name_en">

                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">{{trans('main.Image')}}</label>
                    <input type="file" class="form-control " placeholder="category name" name="image">

                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-primary mt-3" type="submit">{{trans('main.Add')}}</button>
                </div>

            </form>
        </div>
    </div>
@endsection
