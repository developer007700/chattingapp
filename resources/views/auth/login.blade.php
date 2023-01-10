{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
    <meta name="keywords"
        content="chat, chat platform, discussion, video call, voice call, communication, conversation, messange, messanger, talk">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Chat | Login</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- Start css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- End css -->
</head>

<body class="vertical-layout">
    <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar authenticate-bg">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box login-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-head">
                                            <a href="{{ route('login') }}" class="logo"><img
                                                    src="{{ asset('assets/images/logo.svg') }}" class="img-fluid" alt="logo"></a>
                                        </div>
                                        <h4 class="text-primary my-4">Log in !</h4>
                                        <div class="form-group text-left">
                                            <input id="email" type="email"
                                                class="form-control @error('email') @enderror" name="email"
                                                value="{{ old('email') }}" autocomplete="email" autofocus
                                                placeholder="Email">

                                            @error('email')
                                            <span class="text-danger">
                                                <i>{{ $message }}</i>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group text-left">
                                            <input id="password" type="password"
                                                class="form-control @error('password') @enderror" name="password"
                                                autocomplete="current-password" placeholder="Password">

                                            @error('password')
                                            <span class="text-danger">
                                                <i>{{ $message }}</i>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-row mb-3">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-checkbox text-left">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember"
                                                            id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="forgot-psw">
                                                    @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block font-18">
                                            {{ __('Login') }}
                                        </button>
                                    </form>
                                    <p class="mb-0 mt-3">Don't have a account? <a href="{{ route('register') }}">Sign
                                            up</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Auth Box -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Container -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/detect.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <!-- End js -->
</body>

</html>