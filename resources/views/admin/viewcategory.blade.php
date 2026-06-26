@extends('admin.includes.main')

@push('title')
    <title>Dashboard - View</title>
@endpush

@section('content')
    <div class="container-fluid px-3 px-sm-4">
        <div class="row mt-4">
            <div class="col-12">
                <h5 class="mb-3">View Category</h5>

                <div class="table-responsive">
                    <table class="table align-middle" id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th scope="col">Category Name</th>
                                <th>Commission (%)</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>2</td>
                                <td>20</td>

                                <td>
                                    <div class="d-flex gap-1">
                                        <a href="{{ url('admin/edit-category') }}" class="btn btn-sm btn-primary">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href="" class="btn btn-sm btn-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
