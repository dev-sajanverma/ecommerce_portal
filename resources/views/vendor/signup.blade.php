@extends('vendor.layouts.main')

@push('title')
    <title>Vendor- Register</title>
@endpush

@section('content')
    <section class="min-vh-100 d-flex align-items-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-11 col-12">
                    <div class="row g-4 align-items-center">

                        <div class="col-md-6 text-center">
                            <img src="{{ asset('dashboard/assets/img/register.jpg') }}" class="img-fluid rounded"
                                alt="Register Banner">
                        </div>

                        <div class="col-md-6">
                            <div class="p-2">
                                <h3 class="mb-3 fs-4">Vendor Register</h3>
                                <form action="">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control" placeholder="John Doe">
                                        </div>

                                        <div class="col-md-6 col-12 mb-3">
                                            <label class="form-label">Phone Number</label>
                                            <input type="tel" class="form-control" placeholder="+91">
                                        </div>

                                        <div class="col-md-6 col-12 mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" placeholder="John@gmail.com">
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" placeholder="******">
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label">Address</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter your address"></textarea>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary w-100 mt-2" type="submit">Signup</button>

                                    <div class="text-center mt-3 small">
                                        Have an account? <a href="{{ url('/vendor/login') }}"
                                            class="text-decoration-none fw-bold">Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
