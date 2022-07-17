@extends('admin.layouts.admin')
@section('title')
    {{ trans('main.Users') }}
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">{{ trans('main.Users') }}</h6>

        </div>
        <div class="card-body">
            <div>
                <table class="table table-striped table-bordered" cellspacing="0" id="datatable">
                    <thead>
                        <tr>
                            <th>{{ trans('main.Image') }}</th>
                            <th>{{ trans('main.name') }}</th>
                            <th>{{ trans('main.Email') }}</th>
                            <th>{{ trans('main.Orders count') }}</th>
                            <th>{{ trans('main.Actions') }}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td><img src="{{ asset($user->image) }}" style="width: 60px;" alt=""></td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->orders_count }}</td>

                                <td>

                                    <a class="btn btn-primary mr-2"
                                        href="{{ route('admin.user.orders', $user->id) }}">{{ trans('main.view orders') }}</a>

                                    <a class="btn btn-danger text-light mr-2" data-toggle="modal"
                                        data-target="#deleteModal-{{ $user->id }}">{{ trans('main.Delete') }}</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @foreach ($users as $user)
            <div class="modal fade" id="deleteModal-{{ $user->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{trans('main.Delete')}} {{ $user->name }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.user.delete', $user->id) }}" method="GET">
                                @csrf
                                <h4>{{trans('main.Are you want to delete')}} {{ $user->name }} ?</h4>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('main.Close')}}</button>
                                    <button type="submit" class="btn btn-danger">{{trans('main.Delete')}}</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
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
