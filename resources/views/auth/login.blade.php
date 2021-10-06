@extends('layouts.auth.head')

@section('content')

<div class="page-header">
    <div class="page-header-image" style="background-image:url(assets/images/login-background.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card">
                <div class="card-plain1">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="header">
                            <div class="logo-container">
                                <img class="form-logo" src="assets/images/logo.png" alt="">
                               {{--  <h5>Sign Up</h5> --}}
                            </div>

                          {{--   <span>Register a new membership</span> --}}
                        </div>
                        <div class="content">
                            <x-jet-label for="email" value="{{ __('Email Address') }}" />
                            <div class="input-group">
                                <input type="email" id="email" class="form-control" placeholder="Email Address" name="email" :value="old('email')" required>
                                <span class="input-group-addon">
                                    <i class="zmdi zmdi-email"></i>
                                </span>
                            </div>

                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <div class="input-group">
                                <input type="password" id="password" placeholder="Password" class="form-control" name="password" required autocomplete="new-password"/>
                                <span class="input-group-addon">
                                    <i class="zmdi zmdi-lock"></i>
                                </span>
                            </div>

                        </div>

                        <div class="footer text-center">
                            <button type="submit" class="btn l-cyan btn-square btn-lg btn-block waves-effect waves-light">SIGN IN</button>
                            <h6 class="m-t-20 text-gray-600">
                                @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                                @endif
                        </h6>
                        <h6 class="m-t-20 text-gray-600"><a class="link" href="{{ route('register')}}">NEW USER?</a></h6>
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
@endsection
