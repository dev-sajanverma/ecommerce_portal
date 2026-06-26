@extends('vendor.layouts.main')

@push('title')
    <title>Vendor- Login</title>
@endpush

@section('content')
    <section class="min-vh-100 d-flex align-items-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-11 col-12">
                    <div class="row g-4 align-items-center">

                        <div class="col-md-6 text-center">
                            <img src="{{ asset('dashboard/assets/img/register.jpg') }}" class="img-fluid rounded"
                                alt="Login Banner">
                        </div>

                        <div class="col-md-6">
                            <div class="p-2">
                                <h3 class="mb-3 fs-4">Vendor Login</h3>
                                <form action="">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Phone Number</label>
                                            <input type="tel" class="form-control" placeholder="+91">
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" placeholder="******">
                                        </div>
                                    </div>

                                    <button class="btn btn-primary w-100 mt-2" type="submit">Login</button>

                                    <div class="text-center mt-3 small">
                                        Don't have an account? <a href="{{ url('/vendor/signup') }}"
                                            class="text-decoration-none fw-bold">Signup</a>
                                    </div>

                                    <div class="text-center mt-2 small">
                                        <a href="{{ url('vendor/forgot') }}"
                                            class="text-decoration-none text-muted">Forgotten password?</a>
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
