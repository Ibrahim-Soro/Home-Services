<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Contactez-Nous</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li>/</li>
                        <li>Contactez-nous</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="content-central">
        <div class="semiboxshadow text-center">
            <img src="img/img-theme/shp.png" class="img-responsive" alt="">
        </div>
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <aside>
                                <h4>Siège Social</h4>
                                <address>
                                    <strong>MihFalou | 1<sup>ère</sup> Plateforme de service à Domicile.</strong><br>
                                    <i class="fa fa-map-marker"></i><strong>Adresse: </strong>Côte D'Ivoire, Abidjan<br>
                                    <i class="fa fa-phone"></i><strong>Contact: </strong> +225 07 4976 3841
                                </address>
                                <address>
                                    <strong>MihFalou Emails</strong><br>
                                    <i class="fa fa-envelope"></i><strong>Email:</strong><a
                                        href="mailto:contact@surfsidemedia.in"> contact@mihfalou.com</a><br>
                                    <i class="fa fa-envelope"></i><strong>Email:</strong><a
                                        href="mailto:support@surfsidemedia.in"> support@mihfalou.com</a>
                                </address>
                            </aside>
                            <hr class="tall">
                        </div>
                        <div class="col-md-8">
                            <h3>Formulaire de contact</h3>
                            <p class="lead">
                            </p>
                            @if (Session::has('message'))
                                <div class="alert alert-success font-weight-bold" role="alert">
                                    <i class="fas fa-check-circle fa-lg"></i>&nbsp;{{ Session::get('message') }}
                                </div>
                            @endif
                            <form id="contactform" class="form-theme" method="post" wire:submit.prevent='SendMessage'>
                                @csrf
                                <input type="text" placeholder="Nom et prénom" name="name" id="name" required="" wire:model="name">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <input type="email" placeholder="Adresse mail" name="email" id="email" required="" wire:model="email">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <input type="text" placeholder="Contact" name="phone" id="phone" required="" wire:model="phone">
                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <textarea placeholder="Votre Message" name="message" id="message" required="" wire:model="message"></textarea>
                                @error('message')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <input type="submit" name="Submit" value="Envoyer le Message" class="btn btn-primary">
                            </form>
                            <div id="result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-twitter content_resalt border-top">
            <i class="fa fa-twitter icon-big"></i>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
