@extends('admin.layouts.admin')
@section('title')
    create Product
@endsection

@section('content')
    <div class="col-8 ">
        <div class="card-header">
            Create Category
        </div>
        <div class="card-body bg-white rounded ">
            <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Product name</label>
                    <input type="text" class="form-control" placeholder="product name" name="name">

                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" placeholder="price" name="price">

                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price">stock</label>
                    <input type="number" class="form-control" placeholder="stock" name="stock">

                    @error('stock')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea style="resize: none" name="description" id="" cols="80" rows="10">

                </textarea>
                </div>

                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select name="category_id" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="name" class="form-label">Images</label>
                    <input type="file" name="images[]" class="form-control">
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
