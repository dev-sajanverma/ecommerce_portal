@extends('vendor.includes.main')

@push('title')
    <title>Dashboard - Users</title>
@endpush

@section('content')
    <div class="container-fluid px-3 px-sm-4">

        <div class="row mt-4">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                    <h4 class="mb-0 fs-5">Users</h4>
                    <a href="{{ url('#') }}" class="text-decoration-none btn btn-dark btn-sm">View All</a>
                </div>

                <div class="table-responsive mb-4 mt-3">
                    <table id="datatablesSimple" class="table align-middle">
                        <thead>
                            <tr>
                                <th>Sr.no</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="text-nowrap">Atul verma</td>
                                <td>Atul@email.com</td>
                                <td><span class="d-inline-block text-truncate" style="max-width: 200px;">Lorem ipsum dolor
                                        sit amet consectetur adipisicing elit.</span></td>
                                <td><a href="{{ url('vendor/order-details') }}"
                                        class="btn btn-sm btn-warning text-nowrap">View Details</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="text-nowrap">Atul verma</td>
                                <td>Atul@email.com</td>
                                <td><span class="d-inline-block text-truncate" style="max-width: 200px;">Lorem ipsum dolor
                                        sit amet consectetur adipisicing elit.</span></td>
                                <td><a href="{{ url('vendor/order-details') }}"
                                        class="btn btn-sm btn-warning text-nowrap">View Details</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="text-nowrap">Atul verma</td>
                                <td>Atul@email.com</td>
                                <td><span class="d-inline-block text-truncate" style="max-width: 200px;">Lorem ipsum dolor
                                        sit amet consectetur adipisicing elit.</span></td>
                                <td><a href="{{ url('vendor/order-details') }}"
                                        class="btn btn-sm btn-warning text-nowrap">View Details</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="text-nowrap">Atul verma</td>
                                <td>Atul@email.com</td>
                                <td><span class="d-inline-block text-truncate" style="max-width: 200px;">Lorem ipsum dolor
                                        sit amet consectetur adipisicing elit.</span></td>
                                <td><a href="{{ url('vendor/order-details') }}"
                                        class="btn btn-sm btn-warning text-nowrap">View Details</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="text-nowrap">Atul verma</td>
                                <td>Atul@email.com</td>
                                <td><span class="d-inline-block text-truncate" style="max-width: 200px;">Lorem ipsum dolor
                                        sit amet consectetur adipisicing elit.</span></td>
                                <td><a href="{{ url('vendor/order-details') }}"
                                        class="btn btn-sm btn-warning text-nowrap">View Details</a></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="text-nowrap">Atul verma</td>
                                <td>Atul@email.com</td>
                                <td><span class="d-inline-block text-truncate" style="max-width: 200px;">Lorem ipsum dolor
                                        sit amet consectetur adipisicing elit.</span></td>
                                <td><a href="{{ url('vendor/order-details') }}"
                                        class="btn btn-sm btn-warning text-nowrap">View Details</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
