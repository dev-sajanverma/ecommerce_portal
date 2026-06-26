@extends('vendor.includes.main')

@push('title')
    <title>Dashboard - Add</title>
@endpush

@section('content')
    <div class="container-fluid px-3 px-sm-4">
        <div class="card p-4 mt-4">
            <div class="row g-4 align-items-center">

                <div class="col-xl-8 col-md-7 order-2 order-md-1">
                    <h5 class="mb-3">Add Product</h5>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" class="form-control" placeholder="Watch">
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Price</label>
                            <input type="text" class="form-control" placeholder="100">
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Category</label>
                            <select class="form-select">
                                <option selected>Select Category</option>
                                <option value="1">Electronics</option>
                                <option value="2">Grocery</option>
                                <option value="3">Furniture</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Stock quantity</label>
                            <input type="text" class="form-control" placeholder="1">
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Product Description</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <div class="col-12 mt-2">
                            <button class="btn btn-primary w-100 w-md-auto px-4">Add Product</button>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-5 text-center order-1 order-md-2 mb-4 mb-md-0">
                    <img src="{{ asset('dashboard/assets/img/1.jpg') }}" class="img-fluid rounded mb-3"
                        style="width: 150px; height: 150px; object-fit: cover;" alt="Product Image">
                    <div>
                        <label class="form-label btn btn-primary m-0" for="image">Choose Image</label>
                        <input type="file" class="form-control d-none" id="image">
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
