@extends('admin.layouts.admin')
@section('title')
    Edit {{ $order->id }} Order
@endsection

@section('content')
    <div class="col-8 ">
        <div class="card-header">
            edit Order
        </div>
        <div class="card-body bg-white rounded ">
            <form action="{{ route('admin.order.update',$order->id) }}" method="post" enctype="multipart/form-data">
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
                                                    href="{{ route('admin.product.delete', $product->id) }}" data-toggle="modal"
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
                    <label for="status">status</label>
                    <select name="status" class="form-control">
                        @foreach ($statuses as $status)
                            <option value="{{ $status }}" @if ($order->status == $status) selected @endif>
                                {{ $status }}</option>
                        @endforeach
                    </select>
                </div>



                <div class="form-group text-center">
                    <button class="btn btn-primary mt-3" type="submit">update</button>
                </div>

            </form>
        </div>
    </div>

    @foreach ($order->products as $product)
        {{-- edit modal --}}
        <div class="modal fade" id="Modal-{{ $product->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">update quantity</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.order.update.quantity', $product->id) }}" method="GET">
                            @csrf
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control" value="{{ $product->quantity }}"
                                    name="quantity">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save
                                    changes</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

        {{-- delete modal --}}
        <div class="modal fade" id="deleteModal-{{ $product->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">delete quantity</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.order.product.delete', $product->id) }}" method="GET">
                            @csrf
                            <h4>Are you want to delete {{$product->product->name}} ?</h4>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>



    @endforeach
@endsection
