@extends('vendor.includes.main')

@push('title')
    <title>Dashboard - Orders</title>
@endpush

@section('content')
    <div class="container-fluid px-3 px-sm-4">

        <div class="row mt-4">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                    <h4 class="mb-0 fs-5">Orders</h4>
                    <a href="{{ url('#') }}" class="text-decoration-none btn btn-dark btn-sm">View All</a>
                </div>

                <div class="table-responsive mb-4 mt-3">
                    <table id="datatablesSimple" class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Order Id</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Total</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">001</th>
                                <td class="text-nowrap">Atul verma</td>
                                <td>100</td>
                                <td>
                                    <span class="badge rounded-pill text-bg-warning px-2 py-1">Processing</span>
                                </td>
                                <td>
                                    <div class="d-flex gap-1 flex-wrap">
                                        <a href="" class="btn btn-sm btn-primary text-nowrap">Shipped</a>
                                        <a href="" class="btn btn-sm btn-success text-nowrap">Delivered</a>
                                        <a href="{{ url('vendor/order-details') }}"
                                            class="btn btn-sm btn-warning text-nowrap">View Details</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">001</th>
                                <td class="text-nowrap">Atul verma</td>
                                <td>100</td>
                                <td>
                                    <span class="badge rounded-pill text-bg-warning px-2 py-1">Processing</span>
                                </td>
                                <td>
                                    <div class="d-flex gap-1 flex-wrap">
                                        <a href="" class="btn btn-sm btn-primary text-nowrap">Shipped</a>
                                        <a href="" class="btn btn-sm btn-success text-nowrap">Delivered</a>
                                        <a href="{{ url('vendor/order-details') }}"
                                            class="btn btn-sm btn-warning text-nowrap">View Details</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">001</th>
                                <td class="text-nowrap">Atul verma</td>
                                <td>100</td>
                                <td>
                                    <span class="badge rounded-pill text-bg-warning px-2 py-1">Processing</span>
                                </td>
                                <td>
                                    <div class="d-flex gap-1 flex-wrap">
                                        <a href="" class="btn btn-sm btn-primary text-nowrap">Shipped</a>
                                        <a href="" class="btn btn-sm btn-success text-nowrap">Delivered</a>
                                        <a href="{{ url('vendor/order-details') }}"
                                            class="btn btn-sm btn-warning text-nowrap">View Details</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">001</th>
                                <td class="text-nowrap">Atul verma</td>
                                <td>100</td>
                                <td>
                                    <span class="badge rounded-pill text-bg-warning px-2 py-1">Processing</span>
                                </td>
                                <td>
                                    <div class="d-flex gap-1 flex-wrap">
                                        <a href="" class="btn btn-sm btn-primary text-nowrap">Shipped</a>
                                        <a href="" class="btn btn-sm btn-success text-nowrap">Delivered</a>
                                        <a href="{{ url('vendor/order-details') }}"
                                            class="btn btn-sm btn-warning text-nowrap">View Details</a>
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
