@extends('admin.layouts.admin')
@section('title')
    Categories
@endsection
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Categories</h6>
            <a  class="btn btn-primary" href="{{route('admin.category.create')}}" > Add Category</a>
        </div>
        <div class="card-body">
            <div >
                <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>name</th>
                            <th>products count</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td><img src="{{ asset($category->image) }}" style="width: 60px;" alt=""></td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->products->count() }}</td>
                                <td>
                                    <a class="btn btn-success mr-2" href="">view products</a>
                                    <a class="btn btn-primary mr-2"
                                        href="{{ route('admin.category.edit', $category->id) }}">Edit</a>

                                    <a class="btn btn-danger mr-2"
                                        href="{{ route('admin.category.delete', $category->id) }}">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        {{ $categories->links() }}
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                paging: true,
                ordering: true,
                info: true,
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'pdf',
                        className: 'btn btn-danger'
                    },
                    {
                        extend: 'excel',
                        className: 'btn btn-success'
                    },
                    {
                        extend: 'csv',
                        className: 'btn btn-primary'
                    }

                ]
            });
        });
    </script>
@endsection