@extends('admin.layouts.admin')
@section('title')
    Products
@endsection


@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Products</h6>
            <a class="btn btn-primary" href="{{ route('admin.product.create') }}"> Add Product</a>
        </div>
        <div class="card-body">
            <div>
                <table class="table table-striped table-bordered" cellspacing="0" id="datatable">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>name</th>
                            <th>category</th>
                            <th>stock</th>
                            <th>price</th>
                            <th>status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($products as $product)
                            <tr>
                                <td><img src="{{ asset($product->images->first()->image) }}" style="width: 60px;"
                                        alt=""></td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>{{ $product->price }}</td>
                                <td class="{{ $product->status ? 'text-success' : 'text-danger' }}">
                                    {{ $product->status ? 'Active' : 'InActive' }}</td>
                                <td>
                                    <a class="btn btn-primary mr-2"
                                        href="{{ route('admin.product.edit', $product->id) }}">Edit</a>

                                    <a class="btn btn-danger mr-2"
                                        href="{{ route('admin.product.delete', $product->id) }}">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                paging: true,
                ordering: true,
                info: true,
                "pageLength": 10,
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
                    },
                    {

                        extend: 'copy',
                        text: 'Copy current page',
                        className: 'btn btn-primary',
                        messageTop: 'Done',
                        messageBottom: 'Done',
                        exportOptions: {
                            modifier: {
                                page: 'current'
                            }
                        }
                    }

                ]
            });
        });
    </script>
@endsection
