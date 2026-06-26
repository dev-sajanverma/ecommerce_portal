@extends('vendor.layouts.main')

@push('title')
    <title>Admin- Login</title>
@endpush

@section('content')
    <section class="min-vh-100 d-flex align-items-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-11 col-12">
                    <div class="row g-4 align-items-center">

                        <div class="col-md-6 text-center">
                            <img src="{{ asset('dashboard/assets/img/admin.png') }}" class="img-fluid rounded mt-4"
                                alt="Login Banner">
                        </div>

                        <div class="col-md-6">
                            <div class="p-2">

                                <form action="">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Username</label>
                                            <input type="text" class="form-control" placeholder="John Doe">
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" placeholder="******">
                                        </div>
                                    </div>

                                    <button class="btn btn-primary w-100 mt-2" type="submit">Login</button>


                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
