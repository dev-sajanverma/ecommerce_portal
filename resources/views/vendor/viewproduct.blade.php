@extends('vendor.includes.main')

@push('title')
    <title>Dashboard - View</title>
@endpush

@section('content')
    <div class="container-fluid px-3 px-sm-4">
        <div class="row mt-4">
            <div class="col-12">
                <h5 class="mb-3">View Product</h5>

                <div class="table-responsive">
                    <table class="table align-middle" id="datatablesSimple">
                        <thead>
                            <tr>
                                <th scope="col">Products</th>
                                <th scope="col">Price</th>
                                <th scope="col">Category</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('assets/images/products/1.jpg') }}" class="img-fluid rounded"
                                            style="width: 50px; height: 50px; object-fit: cover;" alt="Product">
                                        <h6 class="mb-0 small fw-bold">Shoe</h6>
                                    </div>
                                </td>
                                <td>₹1000</td>
                                <td>2</td>
                                <td>56</td>
                                <td><span class="d-inline-block text-truncate" style="max-width: 150px;">Lorem ipsum dolor
                                        sit amet.</span></td>
                                <td>
                                    <div class="d-flex gap-1">
                                        <a href="{{ url('vendor/edit-product') }}" class="btn btn-sm btn-primary">
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
