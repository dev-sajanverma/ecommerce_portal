@extends('user.layouts.main')

@push('title')
    <title>Order History</title>
@endpush

@section('content')
    <div class="container-fluid px-4">

        <div class="row">
            <div class="col-xl-12 col-md-12 mt-4">
                <div class="d-flex align-items-center gap-2">
                    <h4>Order History</h4>

                </div>
                <div>
                    <table class="table" id="datatablesSimple">
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
                                <td>100 (5products)</td>
                                <td>
                                    <span class="badge rounded-pill text-bg-warning p-2">Prosseing</span>
                                    <a href="{{ url('user/details') }}" class="text-decoration-none">view details</a>

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">001</th>
                                <td>21-03-2026</td>
                                <td>100 (5products)</td>
                                <td>
                                    <span class="badge rounded-pill text-bg-success p-2">On The Way</span>
                                    <a href="{{ url('user/details') }}" class="text-decoration-none">view details</a>

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">001</th>
                                <td>21-03-2026</td>
                                <td>100 (5products)</td>
                                <td>
                                    <span class="badge rounded-pill text-bg-primary p-2">Success</span>
                                    <a href="{{ url('user/details') }}" class="text-decoration-none">view details</a>

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">001</th>
                                <td>21-03-2026</td>
                                <td>100 (5products)</td>
                                <td>
                                    <span class="badge rounded-pill text-bg-primary p-2">Success</span>
                                    <a href="{{ url('user/details') }}" class="text-decoration-none">view details</a>

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">001</th>
                                <td>21-03-2026</td>
                                <td>100 (5products)</td>
                                <td>
                                    <span class="badge rounded-pill text-bg-primary p-2">Success</span>
                                    <a href="{{ url('user/details') }}" class="text-decoration-none">view details</a>

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">001</th>
                                <td>21-03-2026</td>
                                <td>100 (5products)</td>
                                <td>
                                    <span class="badge rounded-pill text-bg-primary p-2">Success</span>
                                    <a href="{{ url('user/details') }}" class="text-decoration-none">view details</a>

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">001</th>
                                <td>21-03-2026</td>
                                <td>100 (5products)</td>
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
