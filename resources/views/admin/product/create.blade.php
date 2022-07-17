@extends('admin.layouts.admin')
@section('title')
    create Product
@endsection
@section('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css"
        crossorigin="anonymous">
@endsection
@section('content')
    <div class="col-8 ">
        <div class="card-header">
            Create Product
        </div>
        <div class="card-body bg-white rounded ">
            <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
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
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select name="category_id" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">InActive</option>
                    </select>
                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="featured">featured</label>
                    <select name="featured" class="form-control">

                        <option value="1">Yes</option>
                        <option value="0">No</option>

                    </select>
                    @error('featured')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="images" class="form-label">Images</label>
                    <input type="file" id="images" multiple name="images[]" class="form-control">
                    @error('images')
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
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.5.0/js/fileinput.min.js"
        integrity="sha512-C9i+UD9eIMt4Ufev7lkMzz1r7OV8hbAoklKepJW0X6nwu8+ZNV9lXceWAx7pU1RmksTb1VmaLDaopCsJFWSsKQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $("#images").fileinput({

            theme: 'fa',

            uploadUrl: "",
            removeUrl: "",

            allowedFileExtensions: ['jpg', 'png'],

            overwriteInitial: false,

            maxFileSize: 2000,

            maxFilesNum: 5,


        });
    </script>
@endsection
