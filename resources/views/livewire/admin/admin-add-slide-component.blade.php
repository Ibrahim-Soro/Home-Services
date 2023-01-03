<div>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-fw fa-images"></i> Nouveau slide</h1>
            <a href="{{ route('admin.slide') }}" class="btn bg-gradient-info btn-sm btn-icon-split">
                <span class="icon text-white">
                    <i class="fas fa-images"></i>
                </span>
                <span class="text text-white">Liste des slides</span>
            </a>
        </div>

        @if (Session::has('message'))
            <div class="alert alert-success font-weight-bold" role="alert"><i class="fas fa-check-circle fa-lg"></i>&nbsp;{{ Session::get('message') }} <a href="{{ route("admin.slide") }}">Voir dans la liste des slides</a></div>
        @endif

        <!-- DataTables Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center text-capitalize">Formulaire d'ajout d'un slide</h6>
        </div>
        <div class="card-body">
            <form class="form-horizontal" wire:submit.prevent="addNewSlide">
                @csrf
                <div class="form-group row d-flex justify-content-center">
                    <label for="title" class="font-weight-bold text-dark col-sm-3">Titre du slide :</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="title" id="title" wire:model="title">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group row d-flex justify-content-center">
                    <label for="status" class="font-weight-bold text-dark col-sm-3">Statut :</label>
                    <div class="col-sm-7">
                        <select class="form-control" type="text" name="status" id="status" wire:model="status">
                            <option value="0">Inactif</option>
                            <option value="1">Actif</option>
                        </select>
                        @error('status')
                            <p class="text-danger">{{ $message }}</p>
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
