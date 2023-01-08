<div>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-fw fa-user"></i> Edition Profile fournisseur</h1>
        </div>

        @if (Session::has('message'))
            <div class="alert alert-success font-weight-bold" role="alert"><i class="fas fa-check-circle fa-lg"></i>&nbsp;{{ Session::get('message') }} <a href="{{ route('provider.profile') }}">Voir les modifs sur mon profile</a></div>
        @endif

        <!-- DataTables Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center text-capitalize">Editer mon profile fournisseur</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" wire:submit.prevent="UpdateProfile">
                        @csrf
                        <div class="form-group row d-flex justify-content-center">
                            <label for="newimage" class="font-weight-bold text-dark col-sm-3">Photo de profile :</label>
                            <div class="col-sm-7">
                                <input class="form-control-file" type="file" name="newimage" id="newimage" wire:model="newimage">
                                @error('newimage', 'image')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                                @if ($newimage)
                                    <img src="{{ $newimage->temporaryUrl() }}" width="220" class="mt-2">
                                @elseif ($image)
                                    <img src="{{ asset('images/providers') }}/{{ $image }}" alt="Ma photo de profile" width="220" class="mt-2">
                                @else
                                    <img src="{{ asset('images/providers/default.jpg') }}" alt="Ma photo de profile" width="220" class="mt-2">
                                @endif
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-center">
                            <label for="about" class="font-weight-bold text-dark col-sm-3">Description :</label>
                            <div class="col-sm-7">
                                <textarea class="form-control" type="text" name="about" id="about" wire:model="about" cols="30" rows="10" placeholder="Décrivez votre activité en quelques lignes..."></textarea>
                                @error('about')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-center">
                            <label for="service_category_id" class="font-weight-bold text-dark col-sm-3">Catégorie:</label>
                            <div class="col-sm-7">
                                <select class="form-control" type="text" name="service_category_id" id="service_category_id" wire:model="service_category_id">
                                    @foreach ($service_categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('service_category_id')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-center">
                            <label for="city" class="font-weight-bold text-dark col-sm-3">Ville:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" name="city" id="city" wire:model="city">
                                @error('city')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-center">
                            <label for="service_locations" class="font-weight-bold text-dark col-sm-3">Adresse Atelier:</label>
                            <div class="col-sm-7">
                                <input class="form-control" type="text" name="service_locations" id="service_locations" wire:model="service_locations">
                                @error('service_locations')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-center">
                            <label disabled class="col-sm-3"></label>
                            <div class="col-sm-7">
                                <button type="submit" class="btn bg-gradient-success btn-icon-split">
                                    <span class="icon text-white">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text text-white">Mettre à jour</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
