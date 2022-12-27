<div>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-fw fa-list-alt"></i>&nbsp;Nouveau service</h1>
            <a href="{{ route('admin.all_services') }}" class="btn bg-gradient-info btn-sm btn-icon-split">
                <span class="icon text-white">
                    <i class="fas fa-list"></i>
                </span>
                <span class="text text-white">Voir tous les services</span>
            </a>
        </div>

        @if (Session::has('message'))
            <div class="alert alert-success font-weight-bold" role="alert"><i class="fas fa-check-circle fa-lg"></i>&nbsp;{{ Session::get('message') }} <a href="{{ route("admin.all_services") }}">Voir dans la liste des services</a></div>
        @endif

        <!-- DataTables Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center text-capitalize">Modification du service <i class="small">"{{ $this->name }}"</i></h6>
        </div>
        <div class="card-body">
            <form class="form-horizontal" wire:submit.prevent="updateService">
                @csrf
                {{-- Nom du service --}}
                <div class="form-group row d-flex justify-content-center">
                    <label for="name" class="font-weight-bold text-dark col-sm-3">Nom du service :</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="name" id="name" wire:model="name" wire:keyup="generateSlug">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                {{-- Slug du service --}}
                <div class="form-group row d-flex justify-content-center">
                    <label for="slug" class="font-weight-bold text-dark col-sm-3">Slug du service :</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="slug" id="slug" wire:model="slug">
                        @error('slug')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                {{-- Tagline --}}
                <div class="form-group row d-flex justify-content-center">
                    <label for="tagline" class="font-weight-bold text-dark col-sm-3">Tagline :</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="tagline" id="tagline" wire:model="tagline">
                        @error('tagline')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                {{-- Catégorie du service --}}
                <div class="form-group row d-flex justify-content-center">
                    <label for="service_category_id" class="font-weight-bold text-dark col-sm-3">Catégorie du service :</label>
                    <div class="col-sm-7">
                        <select name="service_category_id" id="service_category_id" class="form-control" wire:model="service_category_id">
                            <option value="">Sélectionnez une catégorie</option>
                            @foreach ($categories as $category)
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
                {{-- Prix --}}
                <div class="form-group row d-flex justify-content-center">
                    <label for="price" class="font-weight-bold text-dark col-sm-3">Prix :</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="price" id="price" wire:model="price">
                        @error('price')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                {{-- Remise --}}
                <div class="form-group row d-flex justify-content-center">
                    <label for="discount" class="font-weight-bold text-dark col-sm-3">Remise :</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="discount" id="discount" wire:model="discount">
                        @error('discount')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                {{-- Type de remise --}}
                <div class="form-group row d-flex justify-content-center">
                    <label for="discount_type" class="font-weight-bold text-dark col-sm-3">Type de remise :</label>
                    <div class="col-sm-7">
                        <select class="form-control" name="discount_type" id="discount_type" wire:model="discount_type">
                            <option value="">Sélectionnez le type de remise</option>
                            <option value="fixed">Remise fixe</option>
                            <option value="percent">Remise en pourcentage</option>
                        </select>
                        @error('discount_type')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                {{-- Description --}}
                <div class="form-group row d-flex justify-content-center">
                    <label for="description" class="font-weight-bold text-dark col-sm-3">Description :</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="description" id="description" rows="4" wire:model="description"></textarea>
                        @error('description')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                {{-- Inclusion --}}
                <div class="form-group row d-flex justify-content-center">
                    <label for="inclusion" class="font-weight-bold text-dark col-sm-3">Inclusion :</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="inclusion" id="inclusion" rows="4" wire:model="inclusion"></textarea>
                        @error('inclusion')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                {{-- Exclusion --}}
                <div class="form-group row d-flex justify-content-center">
                    <label for="exclusion" class="font-weight-bold text-dark col-sm-3">Exclusion :</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="exclusion" id="exclusion" rows="4" wire:model="exclusion"></textarea>
                        @error('exclusion')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="image" class="font-weight-bold text-dark col-sm-3">Image :</label>
                    <div class="col-sm-7">
                        <input class="form-control-file" type="file" name="image" id="image" wire:model="newimage">
                        @error('newimage')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                        @if ($newimage)
                            <img src="{{ $newimage->temporaryUrl() }}" alt="" width="60">
                        @else
                            <img src="{{ asset('images/services') }}/{{ $image }}" alt="" width="60">
                        @endif
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <label for="thumbnail" class="font-weight-bold text-dark col-sm-3">Thumbnail :</label>
                    <div class="col-sm-7">
                        <input class="form-control-file" type="file" name="thumbnail" id="thumbnail" wire:model="newthumbnail">
                        @error('newthumbnail')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                        @if ($newthumbnail)
                            <img src="{{ $newthumbnail->temporaryUrl() }}" alt="" width="60">
                        @else
                            <img src="{{ asset('images/services/thumbnails') }}/{{ $thumbnail }}" alt="" width="60">
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
                            <span class="text text-white">Mettre à jour</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
