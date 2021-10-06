@extends('layouts.auth.head')

@section('content')
<x-guest-layout>
<div class="page-header">
    <div class="page-header-image" style="background-image:url(assets/images/login-background.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card">
                <div class="card-plain1">
                    <form class="form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="header">
                            <div class="logo-container">
                                <img class="form-logo" src="assets/images/logo.png" alt="">
                               {{--  <h5>Sign Up</h5> --}}
                            </div>

                          {{--   <span>Register a new membership</span> --}}
                        </div>
                        <div class="content">
                            <x-jet-label for="name" value="{{ __('Full Name') }}" />
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Firstname Lastname" name="name" :value="old('name')" required autofocus autocomplete="name">
                                <span class="input-group-addon">
                                    <i class="zmdi zmdi-account-circle"></i>
                                </span>
                            </div>
                            <x-jet-label for="business_type" value="{{ __('Business Type') }}" />
                            <div class="input-group">
                                <input type="text" id="business_type" class="form-control" placeholder="Business Type" name="business_type" :value="old('business_type')" required autocomplete="business_type">
                                <span class="input-group-addon">
                                    <i class="zmdi zmdi-email"></i>
                                </span>
                            </div>
                            <x-jet-label for="email" value="{{ __('Email Address') }}" />
                            <div class="input-group">
                                <input type="email" id="email" class="form-control" placeholder="Email Address" name="email" :value="old('email')" required>
                                <span class="input-group-addon">
                                    <i class="zmdi zmdi-email"></i>
                                </span>
                            </div>
                            <x-jet-label for="physical_address" value="{{ __('Physical Address') }}" />
                            <div class="input-group">
                                <input type="text" id="physical_address" class="form-control" placeholder="Physical Address">
                                <span class="input-group-addon">
                                    <i class="zmdi zmdi-map"></i>
                                </span>
                            </div>
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <div class="input-group">
                                <input type="password" id="password" placeholder="Password" class="form-control" name="password" required autocomplete="new-password"/>
                                <span class="input-group-addon">
                                    <i class="zmdi zmdi-lock"></i>
                                </span>
                            </div>
                            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <div class="input-group">
                                <input type="password" id="password_confirmation" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password"/>
                                <span class="input-group-addon">
                                    <i class="zmdi zmdi-lock"></i>
                                </span>
                            </div>
                        </div>
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="checkbox">
                            <input id="terms" name="terms" type="checkbox">
                            <label for="terms">
                                    I read and agree to the <a href="javascript:void(0);">terms of usage</a>
                            </label>
                        </div>
                        @endif
                        <div class="footer text-center">
                            <button type="submit" class="btn l-cyan btn-square btn-lg btn-block waves-effect waves-light">SIGN UP</button>
                            <h6 class="m-t-20 text-gray-600"><a class="link" href="{{ route('login')}}">ALREADY REGISTERED?</a></h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <nav>
                <ul>
                    <li><a href="#" target="_blank">Contact Us</a></li>
                    <li><a href="#" target="_blank">About Us</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </nav>
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>,
                <span>Designed by <a href="https://manifestghana.com/" target="_blank">Manifest Multimedia</a></span>
            </div>
        </div>
    </footer>
</div>
</x-guest-layout>
@endsection
