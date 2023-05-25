<x-guest-layout>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <x-slot name="logo">
                    <x-register-card-logo />
                </x-slot>
                <x-validation-errors class="mb-4" />
    
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
    
                <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
                    @csrf

                    <div class="wrap-input100 validate-input m-b-23">
                        <x-label for="name" value="{{ __('Nom') }}" class="label-input100" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="username" class="input100" />
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-23">
                        <x-label for="email" value="{{ __('E-mail') }}" class="label-input100" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" class="input100" />
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <x-label for="password" value="{{ __('Mot de Passe') }}" class="label-input100" />
                        <x-input id="password" type="password" name="password" required autocomplete="new-password" class="input100" />
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="label-input100"/>
                        <x-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="input100" />
                    </div>
                                      
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif
                    
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <x-button class="login100-form-btn">
                                {{ __("S'Inscrire") }}
                            </x-button>
                        </div>
                    </div>
    
                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('login') }}" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Déjà enregistré?') }}
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
