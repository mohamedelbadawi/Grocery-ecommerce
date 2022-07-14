@extends('admin.layouts.admin')
@section('title')
    Orders
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Orders</h6>
            {{-- <a class="btn btn-primary" href="{{ route('admin.product.create') }}"> Add Product</a> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>order Id</th>
                            <th>products</th>
                            <th>total</th>
                            <th>address</th>
                            <th>status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($orders as $order)
                            <tr>

                                <td>{{ $order->user->name }}</td>

                                <td>{{ $order->id }}</td>
                                <td>

                                    @foreach ($order->products as $product)
                                        ({{ $product->quantity }} => {{ $product->product->name }})
                                        ,
                                    @endforeach
                                </td>

                                <td>{{ $order->total }}</td>
                                <td>{{ $order->address->city }}, {{ $order->address->street }}</td>
                                <td>
                                    {{ $order->status }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm mr-2"
                                        href="{{ route('admin.order.edit', $order->id) }}">Edit</a>

                                    <a class="btn btn-danger btn-sm mr-2"
                                        href="{{ route('admin.product.delete', $order->id) }}">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{ $orders->links() }}
@endsection
