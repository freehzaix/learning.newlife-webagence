<x-zfront>


    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="back-wrapper">
        <div class="back-wrapper-inner">
            <div class="back-login-page pt-120 pb-120">
                <div class="container">

                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>

                    <div class="login-right-form">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <!-- Email Address -->
                            <p>
                                <label>Adresse mail</label>
                                <input placeholder="Adresse mail" type="email" id="email" name="email" value="{{ old('email') }}">
                            </p>
                            <div class="flex items-center justify-end mt-4">
                                <button type="submit" id="button" name="submit">Lien de réinitialisation du mot de passe par e-mail</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-zfront>
