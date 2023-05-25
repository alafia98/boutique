<x-guest-layout>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <x-slot name="logo">
                    <x-authentication-card-logo />
                </x-slot>
                <x-validation-errors class="mb-4" />
    
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
    
                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                    @csrf
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                        <x-label for="email" value="{{ __('E-mail') }}" class="label-input100" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" class="input100" />
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
    
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <x-label for="password" value="{{ __('Mot de Passe') }}" class="label-input100" />
                        <x-input id="password" type="password" name="password" required autocomplete="current-password" class="input100" />
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>
                    
                    <div class="text-right p-t-8 p-b-31">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Mot de passe oublié?') }}
                            </a>
                        @endif
                    </div>
                    
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <x-button class="login100-form-btn">
                                {{ __('Se Connecter') }}
                            </x-button>
                        </div>
                    </div>
    
                    <div class="txt1 text-center p-t-54 p-b-20">
                        <span>
                            Ou inscrivez-vous en utilisant
                    </span>
                        <a href="{{route('register')}}" class="txt2">
                            S'Inscrire
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>