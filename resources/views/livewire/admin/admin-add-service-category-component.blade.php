<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-fw fa-list-alt"></i> Nouvelle catégorie de service</h1>
            <a href="{{ route('admin.service_categories') }}" class="btn bg-gradient-info btn-sm btn-icon-split">
                <span class="icon text-white">
                    {{-- <i class="fas fa-check"></i> --}}
                    <i class="fas fa-list"></i>
                </span>
                <span class="text text-white">Liste des catégories</span>
            </a>
        </div>

        @if (Session::has('message'))
            <div class="alert alert-success" role="alert"> {{ Session::get('message') }}</div>
        @endif

        <!-- DataTables Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center text-capitalize">Formulair d'ajout d'une catégorie de service</h6>
        </div>
        <div class="card-body">
            <form class="form-horizontal" wire:submit.prevent="createNewCategory">
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
            </form>
        </div>
    </div>

</div>
