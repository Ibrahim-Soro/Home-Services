<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_01_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>{{ $service_category->name }}</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li>/</li>
                        <li><a href="{{ route('home.service_categories') }}">Catégorie</a></li>
                        <li>/</li>
                        <li>{{ $service_category->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="container">
            <div class="row" style="margin-top: -30px;">
                <div class="titles">
                    <h2>Service <span><strong>{{ $service_category->name }}</strong></span></h2>
                    <i class="fa fa-plane"></i>
                    <hr class="tall">
                </div>
            </div>
        </div>
        <div class="content_info" style="margin-top: -70px;">
            <div>
                <div class="container">
                    <div class="portfolioContainer">
                        @if ($service_category->services->count() > 0)
                            @foreach ($service_category->services as $service)
                                <div class="col-xs-6 col-sm-4 col-md-3 nature hsgrids"
                                    style="padding-right: 5px;padding-left: 5px;">
                                    <a class="g-list" href="{{route('home.service_details', ['service_slug'=>$service->slug])}}">
                                        <div class="img-hover">
                                            <img src="{{ asset('images/services/thumbnails') }}/{{ $service->thumbnail }}" alt="{{ $service->name }}"
                                                class="img-responsive">
                                        </div>
                                        <div class="info-gallery">
                                            <h3>{{ $service->name }}</h3>
                                            <hr class="separator">
                                            <p>{{ $service->tagline }}</p>
                                            <div class="content-btn"><a href="{{route('home.service_details', ['service_slug'=>$service->slug])}}"
                                                    class="btn btn-primary">Réservez maintenant</a></div>
                                            <div class="price"><b>Dès {{ number_format($service->price,'0', '', ' ') }} Fcfa</b></div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="container">
                                <div class="row" style="margin-top: -30px;">
                                    <div class="titles">
                                        <h3>
                                            Oops Oops ! Aucun service de disponible pour la catégorie
                                            <span>
                                                <strong>
                                                     {{ $service_category->name }}
                                                </strong>
                                            </span>
                                        </h3>
                                        <a href="{{ route('home.service_categories') }}">Retour à la page précédente</a>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
