@extends('admin.layouts.admin')
@section('title')
    {{ $user->name }} orders
@endsection
@section('content')
    <div id="accordion">

        @forelse ($orders as $order)
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            Order {{ $loop->index + 1 }} ({{ $order->date() }})  
                        </button>
                        
                        {{$order->status}}
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
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

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <h3 class="text-center"> Total : {{ $order->total() }}</h3>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        @empty

            <h3 class="text-center">No Orders</h3>
        @endforelse

    </div>
@endsection
