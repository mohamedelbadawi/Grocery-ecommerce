@extends('admin.layouts.admin')
@section('title')
    Addresses
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">{{trans('main.addresses')}}</h6>

        </div>
        <div class="card-body">
            <div>
                <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>{{trans('main.user')}}</th>
                            <th>{{trans('main.City')}}</th>
                            <th>{{trans('main.street')}}</th>
                            <th>{{trans('main.building')}}</th>
                            <th>{{trans('main.Code')}}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($addresses as $address)
                            <tr>
                                <td>{{ $address->user->name }}</td>
                                <td>
                                    {{ $address->city }}
                                </td>

                                <td>{{ $address->street }}</td>
                                <td>{{ $address->building }}</td>
                                <td>{{ $address->code }}</td>
                                
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
