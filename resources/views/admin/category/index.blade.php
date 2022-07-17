@extends('admin.layouts.admin')
@section('title')
{{trans('main.Categories')}}
@endsection
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">{{trans('main.Categories')}}</h6>
            <a class="btn btn-primary" href="{{ route('admin.category.create') }}"> {{ trans('main.Add Category') }}</a>
        </div>
        <div class="card-body">
            <div>
                <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>{{ trans('main.Image') }}</th>
                            <th>{{ trans('main.name') }}</th>
                            <th>{{ trans('main.products count') }}</th>
                            <th>{{ trans('main.Actions') }}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td><img src="{{ asset($category->image) }}" style="width: 60px;" alt=""></td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->products_count }}</td>
                                <td>
                                    <a class="btn btn-success mr-2" href="">{{trans('main.view products')}}</a>
                                    <a class="btn btn-primary mr-2"
                                        href="{{ route('admin.category.edit', $category->id) }}">{{ trans('main.Edit') }}</a>

                                    <a class="btn btn-danger mr-2"
                                        href="{{ route('admin.category.delete', $category->id) }}">{{ trans('main.Delete') }}</a>
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
