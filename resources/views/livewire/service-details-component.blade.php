<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_01_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>{{ $service->name }}</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li>/</li>
                        <li>Détails service</li>
                        <li>/</li>
                        <li>{{ $service->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="semiboxshadow text-center">
            {{-- <img src="img/img-theme/shp.png" class="img-responsive" alt=""> --}}
        </div>
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 single-blog">
                            <div class="post-item">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-header">
                                            <div class="post-format-icon post-format-standard"
                                                style="margin-top: -10px;">
                                                <i class="fa fa-image"></i>
                                            </div>
                                            <div class="post-info-wrap">
                                                <h2 class="post-title">
                                                    <span>{{ $service->name }}: <small>{{$service->category->name}}</small></span>
                                                </h2>
                                                <div class="post-meta" style="height: 10px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="single-carousel">
                                            <div class="img-hover">
                                                <img src="{{ asset('images/services')}}/{{$service->image}}" alt="{{$service->name}}"
                                                    class="img-responsive">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="post-content">
                                            <h3>{{ $service->name }}</h3>
                                            <p>{{ $service->description }}</p>
                                            <h4>Inclusion</h4>
                                            <ul class="list-styles">
                                                @foreach (explode('|',$service->inclusion) as $inclusion)
                                                    <li><i class="fa fa-plus"></i>{{ $inclusion }}</li>
                                                @endforeach
                                            </ul>
                                            <h4>Exclusion</h4>
                                            <ul class="list-styles">
                                                @foreach (explode("|", $service->exclusion) as $exclusion)
                                                    <li><i class="fa fa-minus"></i>{{$exclusion}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <aside class="widget" style="margin-top: 18px;">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Details réservation</div>
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td style="border-top: none;">Price</td>
                                                <td style="border-top: none;">{{ number_format($service->price, '0', '', ' ')}} Fcfa</td>
                                            </tr>
                                            <tr>
                                                <td>Prestation</td>
                                                <td>1</td>
                                            </tr>
                                            @php
                                                $total = $service->price;
                                            @endphp
                                            @if ($service->discount)
                                                @if ($service->discount_type == "fixed")
                                                    <tr>
                                                        <td>Remise</td>
                                                        <td>- {{number_format($service->discount, '0', '', ' ')}} Fcfa</td>
                                                    </tr>
                                                    @php $total = $total-$service->discount; @endphp
                                                @elseif ($service->discount_type == "percent")
                                                    <tr>
                                                        <td>Remise</td>
                                                        <td>- {{$service->discount}} %</td>
                                                    </tr>
                                                    @php $total = $total-($total*$service->discount/100); @endphp
                                                @endif
                                            @endif
                                            <tr>
                                                <td><b>Total</b></td>
                                                <td> <b>{{ number_format($total, '0', '', ' ')}} Fcfa</b></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="panel-footer">
                                        <form>
                                            <input type="submit" class="btn btn-primary" name="submit"
                                                value=" Réservez maintenent">
                                        </form>
                                    </div>
                                </div>
                            </aside>
                            <aside>
                                @if ($random_service)
                                    <h3>Services Relatifs</h3>
                                    <div class="col-md-12 col-sm-6 col-xs-12 bg-dark color-white padding-top-mini"
                                        style="max-width: 360px">
                                        <a href="{{ route('home.service_details', ['service_slug' => $random_service->slug])}}">
                                            <div class="img-hover">
                                                <img src="{{ asset('images/services/thumbnails')}}/{{$random_service->thumbnail}}" alt="{{$random_service->name}}"
                                                    class="img-responsive">
                                            </div>
                                            <div class="info-gallery">
                                                <h3>
                                                    {{$random_service->name}}
                                                </h3>
                                                <hr class="separator">
                                                <p>{{$random_service->name}}</p>
                                                <div class="content-btn">
                                                    <a href="{{ route('home.service_details', ['service_slug' => $random_service->slug])}}" class="btn btn-warning">Voir Détails</a>
                                                </div>
                                                <div class="price"><b>Dès {{ number_format($random_service->price,'0', '', ' ') }} Fcfa</b></div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
