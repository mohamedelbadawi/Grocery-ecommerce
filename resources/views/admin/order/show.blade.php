@extends('admin.layouts.admin')
@section('title')
    order details
@endsection
@section('content')
    <div class="col-8 ">
        <div class="card-header">
            Order details
        </div>
        <div class="card-body bg-white rounded ">
            <form action="{{ route('admin.order.update', $order->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">order id</label>
                    <input type="text" class="form-control" placeholder="order id" value="{{ $order->id }}"
                        name="id" disabled>

                    @error('id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">User name</label>
                    <input type="text" class="form-control" placeholder="user name" value="{{ $order->user->name }}"
                        name="name" disabled>

                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" placeholder="price" name="price"
                        value="{{ $order->total }}" disabled>

                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>name</th>
                                        <th>category</th>
                                        <th>quantity</th>
                                        <th>price</th>
                                        <th>subtotal</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($order->products as $product)
                                        <tr>
                                            <td><img src="{{ asset($product->product->images->first()->image) }}"
                                                    style="width: 60px;" alt=""></td>
                                            <td>{{ $product->product->name }}</td>
                                            <td>{{ $product->product->category->name }}</td>
                                            <td>{{ $product->quantity }}</td>
                                            <td>{{ $product->product->price }}</td>
                                            <td>{{ $product->getSubtotal() }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm mr-2" data-toggle="modal"
                                                    data-target="#Modal-{{ $product->id }}">Edit</a>

                                                <a class="btn btn-danger btn-sm mr-2"
                                                    href="{{ route('admin.product.delete', $product->id) }}"
                                                    data-toggle="modal"
                                                    data-target="#deleteModal-{{ $product->id }}">delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <h3>Status : {{ $order->status }}</h3>
                </div>





        </div>
    </div>
@endsection
