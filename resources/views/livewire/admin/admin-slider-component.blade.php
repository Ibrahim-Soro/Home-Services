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
            <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-fw fa-images"></i> Tous les slides</h1>
            <a href="{{ route('admin.add_slide') }}" class="btn bg-gradient-success btn-sm btn-icon-split">
                <span class="icon text-white">
                    <i class="fas fa-plus-square"></i>
                </span>
                <span class="text text-white">Nouveau Slide</span>
            </a>
        </div>

        @if (Session::has('message'))
            <div class="alert alert-success font-weight-bold" role="alert"><i class="fas fa-check-circle fa-lg"></i>&nbsp;{{ Session::get('message') }}</div>
        @endif

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center text-capitalize">Tous les slides disponibles</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Titre</th>
                    <th>Statut</th>
                    <th>Date de création</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Titre</th>
                    <th>Statut</th>
                    <th>Date de création</th>
                    <th>Actions</th>
                </tr>
                </tfoot>
                <tbody>
                    @foreach($slides as $slide)
                    <tr>
                        <td>{{ $slide->id }}</td>
                        <td>
                            <img src="{{ asset('images/slide') }}/{{ $slide->image }}" alt="{{ $slide->title }}" width="80">
                        </td>
                        <td>{{ $slide->title }}</td>
                        <td>
                            @if ($slide->status == 1)
                                <p class="text-success font-weight-bold">Actif</p>
                            @else
                                <p class="text-danger font-weight-bold">Inactif</p>
                            @endif
                        </td>
                        <td>Créé le {{ date('d/m/Y à H:i', strtotime($slide->created_at)) }}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('admin.edit_slide', ['slide_id'=> $slide->id]) }}" title="Modifier" class="btn btn-sm bg-gradient-secondary btn-circle">
                                    <i class="fas fa-edit text-white"></i>
                                </a>
                                <a href="#" onclick="confirm('Êtes vous sûr de vouloir supprimer ce slide ?') || event.stopImmediatePropagation()" wire:click.prevenht="deleteSlide({{$slide->id}})" title="Supprimer" class="btn btn-sm bg-gradient-danger btn-circle ml-2">
                                    <i class="fas fa-trash text-white"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $slides->links() }}
            </div>
        </div>
    </div>
</div>
