<x-zfront>

    <!--================= back wrapper Start Here =================-->
    <div class="back-wrapper">
        <div class="back-wrapper-inner">
            <!--================= Back Breadcrumbs Section Start Here =================-->
            <div class="back-breadcrumbs">
                <div class="breadcrumbs-wrap">
                    <img class="desktop" src="assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs">
                    <img class="mobile" src="assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="container">
                            <div class="breadcrumbs-text">
                                <h1 class="breadcrumbs-title">Nous contacter</h1>
                                <div class="back-nav">
                                    <ul>
                                        <li><a href="/">Accueil</a></li>
                                        <li>Contact</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Back Breadcrumbs Section End Here =================-->

            <div id="back-contact" class="back-contact-page pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!--================= Form Section Start Here =================-->
                            <div class="back-blog-form">
                                <div class="back-title-sec">
                                    <h2>Besoin d'une ligne directe ?</h2>
                                    <p class="mt-3">Grâce à nos formations adaptées aux besoins actuels, nous vous
                                        accompagnons dans l'acquisition de savoir-faire pratiques pour réussir dans les
                                        métiers du digital et du web.</p>
                                </div>
                                <div class="row pt-50">
                                    <div class="col-lg-4 back-address">
                                        <strong>Téléphone</strong><br>
                                        <a href="tel:+2250748404245"> (+225) 07 48 40 42 45 </a><br>
                                        <a href="tel:+2250747478255"> (+225) 07 47 47 82 55 </a><br>

                                        <strong class="pt-30">Adresse mail</strong><br>
                                        <a href="mailto:support@newlife-webagence.com">support@newlife-webagence.com</a>
                                    </div>
                                    <div class="col-lg-8">
                                        <div id="blog-form" class="blog-form">
                                            <div id="form-messages">
                                                @if (session('status'))
                                                    <h5>{{ session('status') }}</h5>
                                                @endif
                                            </div>
                                            <form id="contact-form" method="POST" action="/contact/store">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="back-input">
                                                            <input id="name" type="text" name="nom_prenom"
                                                                placeholder="Nom et prénom">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 pdl-5">
                                                        <div class="back-input">
                                                            <input id="email" type="email" name="email"
                                                                placeholder="Adresse mail">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="back-input">
                                                            <input id="subject" type="text" name="objet"
                                                                placeholder="L'objet du message">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 pdl-5">
                                                        <div class="back-input">
                                                            <input id="phone" type="text" name="telephone"
                                                                placeholder="Téléphone">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="back-textarea">
                                                            <textarea id="message" name="message" placeholder="Message"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <button type="submit" class="back-btn">Envoyer un message</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--================= Form Section End Here =================-->

                            <!--=================  Map Section Start Here =================-->
                            <div class="back-contacts pt-106">
                                <div class="back-image-maping">
                                    <img src="assets/images/contact/1.jpg" alt="Map">
                                    <div class="back-ripple back-tooltip1">
                                        <div class="box"><span>Abidjan</span></div>
                                    </div>
                                </div>
                            </div>
                            <!--================= Map Section End Here =================-->

                            <!--================= Address Section Start Here =================-->
                            <div class="back-address-area pt-120">
                                <div class="container">
                                    <div class="back__title__section text-center">
                                        <h6 class="back__subtitle">Notre bureau</h6>
                                        <h2 class="back__tittle"> Nous travaillons principalement en ligne. </h2>
                                    </div>
                                    <img class="back___shape" src="assets/images/contact/5.png" alt="shape">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="inner-locate">
                                                <img src="assets/images/contact/2.png" alt="icon">
                                                <h4>Abidjan, Côte d'ivoire.</h4>
                                                <p>Vous pouvez nous contacter par téléphone afin de d'obtenir un rendez-vous physique.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            {{-- <div class="inner-locate">
                                                <em>Main Office</em>
                                                <img class="pt-18" src="assets/images/contact/3.png" alt="icon">
                                                <h4>Australia</h4>
                                                <p>Bastionstraße 46, 404 Düsseldorf, Germany</p>
                                            </div> --}}
                                        </div>
                                        <div class="col-lg-4">
                                            {{-- <div class="inner-locate">
                                                <img src="assets/images/contact/4.png" alt="icon">
                                                <h4>United Kingdom</h4>
                                                <p>55/123 Norman Street, Sydney NSW 2000</p>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--================= Address Section End Here =================-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Back Wrapper End Here =================-->

</x-zfront>
