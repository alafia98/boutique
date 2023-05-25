<x-guest-layout>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <x-slot name="logo">
                    <x-forgot-logo />
                </x-slot>
    
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <x-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('password.email') }}" class="login100-form validate-form">
                        @csrf
            
                        <div class="block">
                            <x-label for="email" value="{{ __('Email') }}" class="label-input100" />
                            <x-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" class="input100" />
                        </div>
            
                        <div class="flex items-center justify-end mt-4">
                            <x-button>
                                {{ __('Lien de réinitialisation du mot de passe par e-mail') }}
                            </x-button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</x-guest-layout>

{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
