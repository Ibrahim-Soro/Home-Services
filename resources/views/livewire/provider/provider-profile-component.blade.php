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
            <h6 class="m-0 font-weight-bold text-primary text-center text-capitalize">Modifier mon profile</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    @if ($provider->image)
                        <img src="{{asset('images/providers')}}/{{$provider->image ?? 'default.jpg'}}" alt="{{Auth::user()->name}}" width="100%">
                    @else
                        <img src="{{asset('images/providers/default.jpg')}}" alt="{{Auth::user()->name}}" width="100%">
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
                    <a href="#" class="btn bg-gradient-info btn-sm btn-icon-split mt-3">
                        <span class="icon text-white">
                            <i class="fas fa-edit"></i>
                        </span>
                        <span class="text text-white">Editer mon profile</span>
                    </a>
                </div>
            </div>
            {{-- <form class="form-horizontal" wire:submit.prevent="createNewCategory">
                @csrf
                <div class="form-group row d-flex justify-content-center">
                    <label for="name" class="font-weight-bold text-dark col-sm-3">Nom de catégorie :</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="name" id="name" wire:model="name" wire:keyup="generateSlug">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="slug" class="font-weight-bold text-dark col-sm-3">Slug de catégorie:</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="slug" id="slug" wire:model="slug">
                        @error('slug')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="image" class="font-weight-bold text-dark col-sm-3">Image :</label>
                    <div class="col-sm-7">
                        <input class="form-control-file" type="file" name="image" id="image" wire:model="image">
                        @error('image')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                        @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" alt="" width="60">
                        @endif
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label disabled class="col-sm-3"></label>
                    <div class="col-sm-7">
                        <button type="submit" class="btn bg-gradient-success btn-icon-split">
                            <span class="icon text-white">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text text-white">Enregistrer</span>
                        </button>
                    </div>
                </div>
            </form> --}}
        </div>
    </div>
</div>
