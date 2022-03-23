@extends('layouts.app')


@section('section')
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9 mt-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block">
                            <img src="{{ asset('images/brgyrecords.png') }}" class="" style="width:470px;height:470px;">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                </div>
                                @if( $errors->any() )
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li class="text-danger">{{ $error }}</li>
                                        @endforeach
                                    </ul>

                                @endif
                                @include('shared.notification')
                                <form class="user" method="POST" action="{{ route('login.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                               id="exampleInputEmail" aria-describedby="emailHelp"
                                               placeholder="Enter Email Address..." name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                               id="exampleInputPassword" placeholder="Password" name="password">
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                    <hr>

                                </form>

                                <div class="text-center">
                                    <a class="small" href="{{ route('register.index') }}">Create an Account</a>

                                </div>
                                <div class="text-center">
{{--                                    <a class="small" href="{{ url('/qr-scanner')}}">QR Code Scanner</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
