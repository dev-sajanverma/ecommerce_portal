@extends('vendor.layouts.main')

@push('title')
    <title>Vendor- Forgot</title>
@endpush

@section('content')
    <section class="min-vh-100 d-flex align-items-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-11 col-12">
                    <div class="row g-4 align-items-center">

                        <div class="col-md-6 text-center">
                            <img src="{{ asset('dashboard/assets/img/register.jpg') }}" class="img-fluid rounded"
                                alt="Register">
                        </div>

                        <div class="col-md-6">
                            <div class="p-2">
                                <h3 class="mb-3 fs-4">Change Password</h3>
                                <form action="">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Phone Number</label>
                                            <input type="tel" class="form-control" placeholder="+91">
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label">New Password</label>
                                            <input type="password" class="form-control" placeholder="******">
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" placeholder="******">
                                        </div>
                                    </div>

                                    <button class="btn btn-primary w-100 mt-2" type="submit">Change Password</button>

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
