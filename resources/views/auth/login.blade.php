<x-guest-layout>
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
                    <a class="underline  hover:text-gray-600" href="{{ route('password.request') }}">
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
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-center mt-4 flex-1 px-6 py-2 border border-gray-300
            rounded-md font-bold text-md">
                    <a class="px-1 text-dark font-weight-bolder" href="{{ route('google.login') }}">
                        {{ __('Login with Google') }}
                    </a>
        </div>

            <div class="flex items-center justify-center mt-4">
                    Don't have an account?
                    <a class="hover:underline px-1" href="{{ route('register') }}">
                        {{ __('Sign Up') }}
                    </a>
            </div>
            
            
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
