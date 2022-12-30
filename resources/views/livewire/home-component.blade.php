<div>
    <section class="tp-banner-container">
        <div class="tp-banner">
            <ul>
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
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
        <div class="filter-title">
            <div class="title-header">
                <h2 style="color:#fff;">BOOK A SERVICE</h2>
                <p class="lead">Book a service at very affordable price, </p>
            </div>
            <div class="filter-header">
                <form id="sform" action="searchservices" method="post">
                    <input type="text" id="q" name="q" required="required" placeholder="What Services do you want?"
                        class="input-large typeahead" autocomplete="off">
                    <div class="d-flex justify-content">
                        <input type="submit" name="submit" value="Search">
                    </div>
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
                        <h2><span>Appliance</span>Services</h2>
                        <i class="fa fa-plane"></i>
                        <hr class="tall">
                    </div>
                </div>
            </div>
            <div id="boxes-carousel">
                <div>
                    <a class="g-list" href="service-details/ac-wet-servicing.html">
                        <div class="img-hover">
                            <img src="{{ asset('images/services/thumbnails/thumbnail.jpg') }}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>AC Wet Servicing</h3>
                            <hr class="separator">
                            <p>AC Wet Servicing</p>
                            <div class="content-btn"><a href="service-details/ac-wet-servicing.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>&#36;</span><b>From</b>200</div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="g-list" href="service-details/bedroom-deep-cleaning.html">
                        <div class="img-hover">
                            <img src="{{ asset('images/services/thumbnails/thumbnail.jpg') }}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>Bedroom Deep Cleaning</h3>
                            <hr class="separator">
                            <p>Bedroom Deep Cleaning</p>
                            <div class="content-btn"><a href="service-details/bedroom-deep-cleaning.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>&#36;</span><b>From</b>300</div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="g-list" href="service-details/dining-chair-shampooing.html">
                        <div class="img-hover">
                            <img src="{{ asset('images/services/thumbnails/thumbnail.jpg') }}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>Dining Chair Shampooing</h3>
                            <hr class="separator">
                            <p>Dining Chair Shampooing</p>
                            <div class="content-btn"><a href="service-details/dining-chair-shampooing.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>&#36;</span><b>From</b>400</div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="g-list" href="service-details/carpet-shampooing.html">
                        <div class="img-hover">
                            <img src="{{ asset('images/services/thumbnails/thumbnail.jpg') }}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>Carpet Shampooing</h3>
                            <hr class="separator">
                            <p>Carpet Shampooing</p>
                            <div class="content-btn"><a href="service-details/carpet-shampooing.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>&#36;</span><b>From</b>200</div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="g-list" href="service-details/fabric-sofa-shampooing.html">
                        <div class="img-hover">
                            <img src="{{ asset('images/services/thumbnails/thumbnail.jpg') }}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>Fabric Sofa Shampooing</h3>
                            <hr class="separator">
                            <p>Fabric Sofa Shampooing</p>
                            <div class="content-btn"><a href="service-details/fabric-sofa-shampooing.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>&#36;</span><b>From</b>211</div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="g-list" href="service-details/bathroom-deep-cleaning.html">
                        <div class="img-hover">
                            <img src="{{ asset('images/services/thumbnails/thumbnail.jpg') }}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>Bathroom Deep Cleaning</h3>
                            <hr class="separator">
                            <p>Bathroom Deep Cleaning</p>
                            <div class="content-btn"><a href="service-details/bathroom-deep-cleaning.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>&#36;</span><b>From</b>233</div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="g-list" href="service-details/floor-scrubbing-polishing.html">
                        <div class="img-hover">
                            <img src="{{ asset('images/services/thumbnails/thumbnail.jpg') }}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>Floor Scrubbing &amp; Polishing</h3>
                            <hr class="separator">
                            <p>Floor Scrubbing &amp; Polishing</p>
                            <div class="content-btn"><a href="service-details/floor-scrubbing-polishing.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>&#36;</span><b>From</b>411</div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="g-list" href="service-details/mattress-shampooing.html">
                        <div class="img-hover">
                            <img src="{{ asset('images/services/thumbnails/thumbnail.jpg') }}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>Mattress Shampooing</h3>
                            <hr class="separator">
                            <p>Mattress Shampooing</p>
                            <div class="content-btn"><a href="service-details/mattress-shampooing.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>&#36;</span><b>From</b>222</div>
                        </div>
                    </a>
                </div>
                <div>
                    <a class="g-list" href="service-details/kitchen-deep-cleaning.html">
                        <div class="img-hover">
                            <img src="{{ asset('images/services/thumbnails/thumbnail.jpg') }}" alt="" class="img-responsive">
                        </div>

                        <div class="info-gallery">
                            <h3>Kitchen Deep Cleaning</h3>
                            <hr class="separator">
                            <p>Kitchen Deep Cleaning</p>
                            <div class="content-btn"><a href="service-details/kitchen-deep-cleaning.html"
                                    class="btn btn-primary">Book Now</a></div>
                            <div class="price"><span>&#36;</span><b>From</b>111</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- Main content --}}
</div>
