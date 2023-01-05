<div>
    <div class="col-md-6">
        <ul class="visible-xs visible-sm">
            <li class="text-left">
                <a href="tel:+911234567890"><i class="fa fa-phone"></i> +91-1234567890</a>
            </li>
            @if (Session::has('common'))
                <li class="text-right">
                    <a href="{{route('home.change_location')}}">
                        <i class="fa fa-map-marker"></i> {{Session::get('city')}}, {{Session::get('common')}}, {{Session::get('neighborhood')}}
                    </a>
                </li>
            @elseif (!Session::has('common'))
                <li class="text-right">
                    <a href="{{route('home.change_location')}}">
                        <i class="fa fa-map-marker"></i> {{Session::get('city')}}, {{Session::get('neighborhood')}}
                    </a>
                </li>
            @else
            <li class="text-right">
                <a href="{{route('home.change_location')}}">
                    <i class="fa fa-map-marker"></i> Côte D'Ivoire, Abidjan
                </a>
            </li>
            @endif
        </ul>

        <ul class="visible-md visible-lg text-right">
            <li><i class="fa fa-comment"></i> Live Chat</li>
            @if (Session::has('common'))
            <li class="text-right">
                <a href="{{route('home.change_location')}}">
                    <i class="fa fa-map-marker"></i> {{Session::get('city')}}, {{Session::get('common')}}, {{Session::get('neighborhood')}}
                </a>
            </li>
            @elseif (!Session::has('common'))
                <li class="text-right">
                    <a href="{{route('home.change_location')}}">
                        <i class="fa fa-map-marker"></i> {{Session::get('city')}}, {{Session::get('neighborhood')}}
                    </a>
                </li>
            @else
            <li class="text-right">
                <a href="{{route('home.change_location')}}">
                    <i class="fa fa-map-marker"></i> Côte D'Ivoire, Abidjan
                </a>
            </li>
            @endif
        </ul>
    </div>
</div>
