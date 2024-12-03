<x-zfront>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!--================= back wrapper Start Here =================-->
    <div class="back-wrapper">
        <div class="back-wrapper-inner">
            <div class="back-login-page back-signup-page pt-120 pb-120">
                <div class="container">
                    <div class="row align-center">
                        <div class="col-lg-6">
                            <div class="login-left-content">
                                <h1>Créer un compte gratuit.</h1>
                                <p>Découvrez notre plateforme de formation en ligne, conçue pour vous offrir des compétences pratiques à votre rythme, avec des cours interactifs et accessibles partout.</p>
                                <img src="assets/images/login/2.png" alt="login">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="login-right-form">
                                <form action="{{ route('register.post') }}" method="POST">
                                    @csrf
                                    
                                    <p>
                                        <label>Nom de famille</label>
                                        <input placeholder="Nom de famille" type="text" id="nom" name="nom">
                                    </p>
                                    <p>
                                        <label>Prénom</label>
                                        <input placeholder="Prénom" type="text" id="prenom" name="prenom">
                                    </p>
                                    <p>
                                        <label>Adresse mail</label>
                                        <input placeholder="Adresse mail" type="email" id="email" name="email">
                                    </p>
                                    <p>
                                        <label>Mot de passe</label>
                                        <input placeholder="Mot de passe" type="password" id="pass" name="password">
                                    </p>
                                    
                                    <button type="submit" id="button" name="submit">S'inscrire maintenant</button>
                                    <em class="signup">Déjà membre? <a href="{{ route('login') }}">Se connecter</a></em>
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
