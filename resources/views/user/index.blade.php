@extends('user.layouts.main')

@push('title')
    <title>Dashboard - User</title>
@endpush

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>

        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="card bg-info text-white mb-4">
                    <div class="card-body mx-auto">
                        <img src="{{ asset('dashboard/assets/img/user.png') }}" style="width:97px" alt="">
                    </div>
                    <div>
                        <h5 class="text-center text-dark">John Doe</h5>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6">
                <div class="card bg-info text-white mb-4">
                    <div class="card-body">
                        <h5 class="text-dark">Billing Address</h5>
                        <span class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. A ut vel quidem
                            pariatur nemo?</span>
                        <br>
                        <span class="text-dark"><strong>Email</strong> : John@email.com</span><br>
                        <span class="text-dark"><strong>Phone</strong> : +91 7575757589 </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="d-flex align-items-center gap-2">
                    <h4>Recent Order</h4>
                    <a href="{{ url('user-history') }}" class="text-decoration-none ms-auto btn btn-dark btn-sm">View
                        All</a>
                </div>

                <div class=" mb-4 mt-3">

                    <table id="datatablesSimple">
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
                                    <span class="badge rounded-pill text-bg-warning p-2">Prosseing</span>
                                    <a href="{{ url('user/details') }}" class="text-decoration-none">view details</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">001</th>
                                <td>21-03-2026</td>
                                <td>100</td>
                                <td>
                                    <span class="badge rounded-pill text-bg-success p-2">On The Way</span>
                                    <a href="{{ url('user/details') }}" class="text-decoration-none">view details</a>

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">001</th>
                                <td>21-03-2026</td>
                                <td>100</td>
                                <td>
                                    <span class="badge rounded-pill text-bg-primary p-2">Success</span>
                                    <a href="{{ url('user/details') }}" class="text-decoration-none">view details</a>

                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
