<div>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-fw fa-user"></i> Profile fournisseur</h1>
        </div>

        @if (Session::has('message'))
            <div class="alert alert-success font-weight-bold" role="alert"><i class="fas fa-check-circle fa-lg"></i>&nbsp;{{ Session::get('message') }} <a href="{{ route("admin.service_categories") }}">Voir dans la liste des catégories</a></div>
        @endif

        <!-- DataTables Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center text-capitalize">Mon profile</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    @if ($provider->image)
                        <img src="{{asset('images/providers')}}/{{$provider->image ?? 'default.jpg'}}" alt="{{Auth::user()->name}}" width="260">
                    @else
                        <img src="{{asset('images/providers/default.jpg')}}" alt="{{Auth::user()->name}}" width="100">
                    @endif
                </div>
                <div class="col-md-8">
                    <h3>Nom: {{Auth::user()->name}} </h3>
                    <p> {{$provider->about}} </p>
                    <p><b>Email: </b> {{Auth::user()->email}} </p>
                    <p><b>Contact: </b> {{Auth::user()->phone}} </p>
                    <p><b>Ville: </b> {{$provider->city}} </p>
                    <p><b>Adresse Atelier: </b> {{$provider->service_locations}} </p>
                    <p><b>Catégorie de service: </b>
                        @if ($provider->service_category_id)
                            {{$provider->category->name}}
                        @endif
                    </p>
                    <a href="{{ route('provider.edit_profile') }}" class="btn bg-gradient-info btn-sm btn-icon-split mt-3">
                        <span class="icon text-white">
                            <i class="fas fa-edit"></i>
                        </span>
                        <span class="text text-white">Editer mon profile</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
