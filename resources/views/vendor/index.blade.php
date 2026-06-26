@extends('vendor.includes.main')

@push('title')
    <title>Dashboard - Vendor</title>
@endpush

@section('content')
    <div class="container-fluid px-3 px-sm-4">
        <h1 class="mt-4 fs-2">Dashboard</h1>

        <div class="row g-3 mt-2">
            <div class="col-xl-4 col-sm-6 col-12">
                <div class="card bg-info text-white h-100">
                    <div class="card-body text-center">
                        <h5 class="text-dark">Total orders</h5>
                        <h2 class="text-dark mt-2 mb-0">15</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
                <div class="card bg-info text-white h-100">
                    <div class="card-body text-center">
                        <h5 class="text-dark">Total Sales</h5>
                        <h2 class="text-dark mt-2 mb-0">1500</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-12 col-12">
                <div class="card bg-info text-white h-100">
                    <div class="card-body text-center">
                        <h5 class="text-dark">Pending Orders</h5>
                    </div>
                    <div>
                        <h2 class="text-center text-dark mb-4">5</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                    <h4 class="mb-0 fs-5">Recent Order</h4>
                    <a href="{{ url('vendor/orders') }}" class="text-decoration-none btn btn-dark btn-sm">View All</a>
                </div>

                <div class="table-responsive mb-4 mt-3">
                    <table id="datatablesSimple" class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Order Id</th>
                                <th scope="col">Date</th>
                                <th scope="col">Total</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">001</th>
                                <td>21-03-2026</td>
                                <td>100</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                        <span class="badge rounded-pill text-bg-warning px-2 py-1">Processing</span>
                                        <a href="{{ url('vendor/order/details') }}" class="text-decoration-none small">view
                                            details</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">001</th>
                                <td>21-03-2026</td>
                                <td>100</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                        <span class="badge rounded-pill text-bg-success px-2 py-1">On The Way</span>
                                        <a href="{{ url('vendor/order/details') }}" class="text-decoration-none small">view
                                            details</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">001</th>
                                <td>21-03-2026</td>
                                <td>100</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                        <span class="badge rounded-pill text-bg-primary px-2 py-1">Success</span>
                                        <a href="{{ url('vendor/order/details') }}" class="text-decoration-none small">view
                                            details</a>
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
