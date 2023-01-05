<div>
    <section class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                @if ($slides)

                    @foreach ($slides as $slide)
                        <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                            data-saveperformance="off" data-title="Slide">
                            <img src="{{ asset('images/slide') }}/{{$slide->image}}" alt="{{$slide->title}}" data-bgposition="center center"
                                data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                                data-bgfitend="100" data-bgpositionend="right center">
                        </li>
                    @endforeach
                @else
                    <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="{{ asset('assets/img/slide/1.jpg') }}" alt="fullslide1" data-bgposition="center center"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                            data-bgfitend="100" data-bgpositionend="right center">
                    </li>
                    <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="{{ asset('assets/img/slide/2.jpg') }}" alt="fullslide1" data-bgposition="top center"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                            data-bgfitend="100" data-bgpositionend="right center">
                    </li>
                @endif
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
        <div class="filter-title">
            <div class="title-header">
                <h2 style="color:#fff;">RESERVEZ UN SERVICE</h2>
                <p class="lead">Réservez un service à un tarif très abordable,</p>
            </div>
            <div class="filter-header">
                <form id="sform" action="{{ route('searchService')}}" method="post">
                     @csrf
                    <input type="text" id="q" name="q" required="required" placeholder="Quelle prestation souhaitez-vous ?"
                        class="input-large typeahead" autocomplete="off">
                    <input type="submit" name="submit" value="Rechercher">
                </form>
            </div>
        </div>
    </section>
    {{-- Carousel --}}

    <section class="content-central">
        <div class="content_info content_resalt">
            <div class="container" style="margin-top: 40px;">
                <div class="row">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul id="sponsors" class="tooltip-hover">
                            @foreach ($service_categories as $category)
                                <li data-toggle="tooltip" title="{{ $category->name }}" data-original-title="{{ $category->name }}">
                                    <a href="{{ route('home.services_by_category', ['category_slug' => $category->slug]) }}">
                                        <img src="{{ asset('images/categories') }}/{{$category->image}}" alt="{{$category->name}}">
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="semiboxshadow text-center">
            <img src="{{ asset('assets/img/img-theme/shp.png') }}" class="img-responsive" alt="">
        </div>
        <div class="content_info">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="titles">
                            <h2>Meilleurs <span>Services</span></h2>
                            <i class="fa fa-briefcase"></i>
                            <hr class="tall">
                        </div>
                    </div>
                    <div class="portfolioContainer" style="margin-top: -50px;">
                        @foreach ($featured_service as $service)
                            <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="{{route('home.service_details', ['service_slug'=>$service->slug])}}">
                                    <div class="img-hover">
                                        <img src="{{ asset('images/services/thumbnails') }}/{{$service->thumbnail}} " alt="{{$service->name}}"
                                            class="img-responsive">
                                    </div>
                                    <div class="info-gallery">
                                        <h3>{{$service->name}}</h3>
                                        <hr class="separator">
                                        <p>{{$service->name}}</p>
                                        <div class="content-btn"><a href="{{route('home.service_details', ['service_slug'=>$service->slug])}}"
                                                class="btn btn-primary">Réservez maintenant</a></div>
                                        <div class="price"><b><small>Dès</small>  {{ number_format($service->price, '0', '', ' ')}} Fcfa</b></div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="content-btn d-flex justify-content-center" style="padding: 5px; margin-bottom:2rem; display:flex; justify-content:center">
                        <a href="#{{-- {{route("home.all_services")}} --}}"
                        class="btn btn-primary">voir tous nos services</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_info">
            <div class="bg-dark color-white border-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="services-lines-info">
                                <h2 class="text-uppercase">UN SERVICE DE QUALITé DIVERSIFIé</h2>
                                <p class="lead">
                                    Réservez les meilleurs services en un seul clic.
                                    <span class="line"></span>
                                </p>

                                <p>Retrouvez une variété de nos services à domicile.</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <ul class="services-lines">
                                @foreach ($featured_services_categories as $category)
                                    <li>
                                        <a href="{{route('home.services_by_category', ['category_slug'=>$category->slug])}}">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="{{ asset('images/categories') }}/{{$category->image}}"></i>
                                                <h5>{{$category->name}}</h5>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="titles">
                        <h2><span>Service</span> Electroménager</h2>
                        <i class="fa fa-plane"></i>
                        <hr class="tall">
                    </div>
                </div>
            </div>
            <div id="boxes-carousel">
                @foreach ($all_services as $service)
                    <div>
                        <a class="g-list" href="{{route('home.service_details',['service_slug'=>$service->slug])}}">
                            <div class="img-hover">
                                <img src="{{ asset('images/services/thumbnails') }}/{{$service->image}}" alt="{{$service->name}}" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>{{$service->name}}</h3>
                                <hr class="separator">
                                <p>{{$service->tagline}}</p>
                                <div class="content-btn"><a href="{{route('home.service_details',['service_slug'=>$service->slug])}}"
                                        class="btn btn-primary">Réservez maintenant</a></div>
                                <div class="price"><b>Dès {{ number_format($service->price, '0', '', ' ')}} Fcfa</b></div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Main content --}}
</div>


@push('scripts')
<script type="text/javascript">
    var path = "{{route('autocomplete')}}";
    $('input.typeahead').typeahead({
        source: function (query, process) {
            return $.get(path,{query:query}, function (data) {
                return process(data);
            });
        }
    });
</script>
@endpush


