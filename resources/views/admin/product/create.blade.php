@extends('admin.layouts.admin')
@section('title')
    {{ trans('main.Add Product') }}
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
            {{ trans('main.Add Product') }}
        </div>
        <div class="card-body bg-white rounded ">
            <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">{{ trans('main.English Product name') }}</label>
                    <input type="text" class="form-control" placeholder="{{ trans('main.English Product name') }}"
                        name="name_en">

                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="name">{{ trans('main.Arabic Product name') }}</label>
                    <input type="text" class="form-control" placeholder="{{ trans('main.Arabic Product name') }}"
                        name="name_ar">

                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price">{{ trans('main.price') }}</label>
                    <input type="number" class="form-control" placeholder="{{ trans('main.price') }}" name="price">

                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price">{{ trans('main.stock') }}</label>
                    <input type="number" class="form-control" placeholder="{{ trans('main.stock') }}" name="stock">

                    @error('stock')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description"> {{ trans('main.English Description') }}</label>
                    <textarea style="resize: none" name="description_en" id="" cols="80" rows="10">

                </textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">{{ trans('main.Arabic Description') }}</label>
                    <textarea style="resize: none" name="description_ar" id="" cols="80" rows="10">

                </textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="category_id">{{ trans('main.Category') }}</label>
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
                    <label for="status">{{ trans('main.status') }}</label>
                    <select name="status" class="form-control">
                        <option value="1">{{ trans('main.Active') }}</option>
                        <option value="0">{{ trans('main.InActive') }}</option>
                    </select>
                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="featured">{{ trans('main.featured') }}</label>
                    <select name="featured" class="form-control">

                        <option value="1">{{ trans('main.Yes') }}</option>
                        <option value="0">{{ trans('main.No') }}</option>

                    </select>
                    @error('featured')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="images" class="form-label">{{ trans('main.Images') }}</label>
                    <input type="file" id="images" multiple name="images[]" class="form-control">
                    @error('images')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group text-center">
                    <button class="btn btn-primary mt-3" type="submit">{{ trans('main.Add') }}</button>
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
