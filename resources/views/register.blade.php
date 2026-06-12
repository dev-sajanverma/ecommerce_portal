@extends('layout.main')
@push('title')
<title>Register Page</title>
@endpush
@section('content')

<div class="container-fluid p-lg-3 p-2 bg-light">
    <h1 class="text-center"> <i class="fa-solid fa-user"></i>User Register</h1>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/images/register.jpg') }}" class=" img-fluid mt-3" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <form action="">
                                <div class="mt-3">
                                    <div class="form-text mb-2">Please enter your mobile number</div>
                                    <input type="tel" class="form-control" placeholder="+91">
                                </div>
                                <a href="{{url('/register1')}}" class="btn text-center form-control btn-primary mt-3" type="submit">Continue</a>
                                <div class="text-center p-2 py-2">
                                    Have an account? <a href="{{url('/login')}}" class=" text-decoration-none">Login</a>

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