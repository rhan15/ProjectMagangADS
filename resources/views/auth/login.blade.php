<x-guest-layout>
    
        <div class=""> 
            <img src="/images/Ilustrasi.png" alt="">
        </div>
    

    <x-jet-authentication-card>
        <x-slot name="logo">
            
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
  
        <div>
            <h3 class="">Login</h3>
        </div>

        <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
            @csrf
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-end">
                @if (Route::has('password.request'))
                    <a class="hover:text-gray-600 font-weight-bold pt-1" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div class="flex items-center justify-center mt-4 ">
                <x-jet-button class="font-weight-bolder">
                    {{ __('Login') }}
                </x-jet-button>
            </div>

            <div class="block">
                <label for="remember_me" class="flex items-center text-primary font-weight-bold pt-1">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="flex justify-center">
                <div class="flex-lg-row">
                    <ul>____________________</ul>
                </div>
                <div class="mt-2 pl-1 pr-1">OR</div>
                <div class="flex-lg-row">
                    <ul>____________________</ul>
                </div>
            </div>

            <div class="flex items-center justify-center mt-1 flex-1 px-6 py-2 border border-gray-300
            rounded-md font-bold text-md">
                    <a class="px-1 text-dark font-weight-bolder" href="{{ route('google.login') }}">
                        {{ __('Login with Google') }}
                    </a>
        </div>

            <div class="flex items-center justify-center mt-4">
                    Don't have an account?
                    <a class="hover:underline px-1 font-weight-bold" href="{{ route('register') }}">
                        {{ __('Sign Up') }}
                    </a>
            </div>
            
            
        </form>
    </x-jet-authentication-card>
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
  
        <div>
            <h3 class="">Login</h3>
        </div>

        <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
            @csrf
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-end">
                @if (Route::has('password.request'))
                    <a class="hover:text-gray-600 font-weight-bold pt-1" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div class="flex items-center justify-center mt-4 ">
                <x-jet-button class="font-weight-bolder">
                    {{ __('Login') }}
                </x-jet-button>
            </div>

            <div class="block">
                <label for="remember_me" class="flex items-center text-primary font-weight-bold pt-1">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="flex justify-center">
                <div class="flex-lg-row">
                    <ul>____________________</ul>
                </div>
                <div class="mt-2 pl-1 pr-1">OR</div>
                <div class="flex-lg-row">
                    <ul>____________________</ul>
                </div>
            </div>

            <div class="flex items-center justify-center mt-1 flex-1 px-6 py-2 border border-gray-300
            rounded-md font-bold text-md">
                    <a class="px-1 text-dark font-weight-bolder" href="{{ route('google.login') }}">
                        {{ __('Login with Google') }}
                    </a>
        </div>

            <div class="flex items-center justify-center mt-4">
                    Don't have an account?
                    <a class="hover:underline px-1 font-weight-bold" href="{{ route('register') }}">
                        {{ __('Sign Up') }}
                    </a>
            </div>
            
            
        </form>
    </x-jet-authentication-card> --}}
</x-guest-layout>







{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div >
        @if(session()->has('successMessage'))
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                <span>&times;</span>
                </button>
                <strong>{{ session('successMessage') }}</strong>
            </div>
        </div>
        @elseif(session()->has('errorMessage'))
        <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                <span>&times;</span>
                </button>
                <strong>{{ session('errorMessage') }}</strong>
            </div>
        </div>
        @endif
        @if (session('status'))
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                <span>&times;</span>
                </button>
                <strong>{{ session('status') }}</strong>
            </div>
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            <div class="text-center pb-8">
                <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Masuk</h2>
            </div>

            <div class="form-group">
                <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg @error('email') is-invalid @enderror"
                    id="email" type="email" name="email" :value="old('email')" autocomplete="off" required />
                @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <div class="d-flex justify-content-between mt-n5">
                    <label
                        class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                    <a href="{{ route('password.request') }}"
                        class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5"
                        id="kt_login_forgot">Lupa Password ?</a>
                </div>

                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg @error('password') is-invalid @enderror"
                    id="password" type="password" name="password" autocomplete="off" required />
                @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="text-center">
                <button type="submit"
                    class="btn btn-dark w-100 font-weight-bolder font-size-h6 px-8 py-4 my-3">Masuk</button>
            </div>

            <div class="text-gray-400 font-weight-bold fs-4 mt-2">Belum punya akun?
                <a href="{{ route('register') }} "target="_blank" rel="noopener noreferrer" class="link-primary font-weight-bolder">Buat Akun</a>
            </div>
        </form>
    </div>


    <div></div>
</body>
</html> --}}
