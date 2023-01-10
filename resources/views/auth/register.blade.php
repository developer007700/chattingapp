{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
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
    <title>Chat | Register</title>
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
            <div class="auth-box register-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-head">
                                            <a href="{{ route('register') }}" class="logo"><img
                                                    src="{{ asset('assets/images/logo.svg') }}" class="img-fluid" alt="logo"></a>
                                        </div>
                                        <h4 class="text-primary my-4">Sign Up !</h4>
                                        <div class="form-group text-left">
                                            <input id="name" type="text" class="form-control @error('name') @enderror"
                                                name="name" value="{{ old('name') }}" autocomplete="name"
                                                placeholder="Username" autofocus>
                                            @error('name')
                                            <span class="text-danger">
                                                <i>{{ $message }}</i>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group text-left">
                                            <input id="email" type="email"
                                                class="form-control @error('email') @enderror" name="email"
                                                value="{{ old('email') }}" autocomplete="email" placeholder="Email">
                                            @error('email')
                                            <span class="text-danger">
                                                <i>{{ $message }}</i>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group text-left">
                                            <input id="password" type="password"
                                                class="form-control @error('password') @enderror" name="password"
                                                autocomplete="new-password" placeholder="Password">

                                            @error('password')
                                            <span class="text-danger">
                                                <i>{{ $message }}</i>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group text-left">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" autocomplete="new-password"
                                                placeholder="Re-Type Password">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block font-18">
                                            {{ __('Register') }}
                                        </button>
                                    </form>
                                    <p class="mb-0 mt-3">Already have an account? <a href="{{ route('login') }}">Log
                                            in</a></p>
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