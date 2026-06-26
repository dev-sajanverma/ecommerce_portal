@extends('admin.includes.main')

@push('title')
    <title>Dashboard - Add</title>
@endpush

@section('content')
    <div class="container-fluid px-3 px-sm-4">
        <div class="card p-4 mt-4">
            <div class="row g-4 align-items-center">

                <div class="col-xl-8 col-md-7 order-2 order-md-1">
                    <h5 class="mb-3">Add Category</h5>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label class="form-label">Category Name</label>
                            <input type="text" class="form-control" placeholder="Electronic">
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Commission (%)</label>
                            <input type="text" class="form-control" placeholder="20">
                        </div>

                        <div class="col-12 mt-2">
                            <button class="btn btn-primary w-100 w-md-auto px-4">Add Category</button>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
