<x-zfront>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!--================= back wrapper Start Here =================-->
    <div class="back-wrapper">
        <div class="back-wrapper-inner">
            <div class="back-login-page pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="login-left-content">
                                <h1>Connectez-vous maintenant.</h1>
                                <p>Si vous n'avez pas de compte, vous pouvez <a href="{{ route('register') }}">créer un compte!</a></p>
                                <img src="assets/images/login/2.png" alt="login">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="login-right-form">
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <p>
                                        <label>Adresse mail</label>
                                        <input placeholder="Adresse mail" type="email" id="email" name="email" value="{{ old('email') }}">
                                    </p>
                                    <p>
                                        <label>Mot de passe</label>
                                        <input placeholder="Mot de passe" type="password" id="pass" name="password">
                                    </p>
                                    <div class="back-check-box">
                                        <a href="{{ route('password.request') }}">Mot de passe oublié?</a>
                                    </div>
                                    <button type="submit" id="button" name="submit">Se connecter</button>
                                    <em class="signup">Nouveau sur la plateforme? <a href="{{ route('register') }}">Inscrivez-vous</a></em>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Back Wrapper End Here =================-->
</x-zfront>
