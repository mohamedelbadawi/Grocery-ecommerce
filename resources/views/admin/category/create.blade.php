@extends('admin.layouts.admin')
@section('title')
    Create Category
@endsection
@section('content')
    <div class="col-8 ">
        <div class="card-header">
            Create Category
        </div>
        <div class="card-body bg-white rounded ">
            <form action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Category name</label>
                    <input type="text" class="form-control" placeholder="category name" name="name">

                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">image</label>
                    <input type="file" class="form-control " placeholder="category name" name="image">

                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-primary mt-3" type="submit">Add</button>
                </div>

            </form>
        </div>
    </div>
@endsection
