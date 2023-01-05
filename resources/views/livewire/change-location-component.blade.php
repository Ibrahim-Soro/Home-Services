<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_01_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Changement d'adresse</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{route('home')}}">Accueil</a></li>
                        <li>/</li>
                        <li>Changer d'adresse</li>
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
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <form wire:submit.prevent="ChangeLocation">
                            @csrf
                            <div class="col-md-8">
                                <h3>Chercher votre adresse</h3>
                                <p class="lead">
                                </p>
                                <input type="text" class="form-control" id="autocomplete" name="location"
                                    placeholder="Search Location....">
                                <div id="map" style="height: 400px;"></div>
                            </div>
                            <div class="col-md-4">
                                <aside class="addlocation">
                                    <h4>Votre adresse<input type="submit" class="btn btn-primary pull-right"
                                            name="submit" value="Ajouter votre adresse"></h4>
                                    <address>

                                        <div class="form-group">
                                            <label for="neighborhood" class="col-form-label">Quartier:</label>
                                            <input type="text" class="form-control" id="neighborhood" name="neighborhood" wire:model="neighborhood">
                                        </div>
                                        <div class="form-group">
                                            <label for="city" class="col-form-label">Ville:</label>
                                            <input type="text" class="form-control" id="city" name="city" wire:model="city">
                                        </div>
                                        <div class="form-group">
                                            <label for="common" class="col-form-label">Commune:</label>
                                            <input type="text" class="form-control" id="common" name="common" wire:model="common">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class="col-form-label">Pays:</label>
                                            <input type="text" class="form-control" id="country" name="country" wire:model="country">
                                        </div>
                                    </address>
                                </aside>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-twitter content_resalt border-top">
            <i class="fa fa-twitter icon-big"></i>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
