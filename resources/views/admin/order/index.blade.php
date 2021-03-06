@extends('admin.layouts.admin')
@section('title')
    {{ trans('main.Orders') }}
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">{{ trans('main.Orders') }}</h6>
            {{-- <a class="btn btn-primary" href="{{ route('admin.product.create') }}"> Add Product</a> --}}
        </div>
        <div class="card-body">
            <div>
                <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>{{ trans('main.user') }}</th>
                            <th>{{ trans('main.order Id') }}</th>
                            <th>{{ trans('main.Products') }}</th>
                            <th>{{ trans('main.total') }}</th>
                            <th>{{ trans('main.address') }}</th>
                            <th>{{ trans('main.status') }}</th>
                            <th>{{ trans('main.Actions') }}</th>
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
                                        href="{{ route('admin.order.edit', $order->id) }}">{{ trans('main.Edit') }}</a>

                                    <a class="btn btn-danger btn-sm mr-2"
                                        href="{{ route('admin.order.delete', $order->id) }}">{{ trans('main.Delete') }}</a>
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
                "pageLength": 50,
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
