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
            <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-fw fa-list-alt"></i> Catégories de services</h1>
            <a href="{{ Route('admin.add_service_category') }}" class="btn bg-gradient-success btn-sm btn-icon-split">
                <span class="icon text-white">
                    {{-- <i class="fas fa-check"></i> --}}
                    <i class="fas fa-plus-square"></i>
                </span>
                <span class="text text-white">Nouvelle Catégorie</span>
            </a>
        </div>

        @if (Session::has('message'))
            <div class="alert alert-success font-weight-bold" role="alert"><i class="fas fa-check-circle fa-lg"></i>&nbsp;{{ Session::get('message') }}</div>
        @endif

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center text-capitalize">Toutes les catégories de services</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Nom de catégorie</th>
                    <th>Slug</th>
                    <th>En vedette</th>
                    <th>Date de création</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Nom de catégorie</th>
                    <th>Slug</th>
                    <th>En vedette</th>
                    <th>Date de création</th>
                    <th>Actions</th>
                </tr>
                </tfoot>
                <tbody>
                    @foreach($s_categories as $category)
                    <tr>
                    <td>{{ $category->id }}</td>
                    <td>
                        <img src="{{ asset('images/categories') }}/{{ $category->image }}" alt="{{ $category->name }}" width="60">
                    </td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>
                        @if ($category->featured)
                            Oui
                        @else
                            Non
                        @endif
                    </td>
                    <td>Créé le {{ date('d/m/Y à H:i', strtotime($category->created_at)) }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('admin.services_by_category', ['category_slug' => $category->slug]) }}" title="Voir les articles de {{ $category->name }} " class="btn btn-sm bg-gradient-success btn-circle">
                                <i class="fas fa-eye text-white"></i>
                            </a>
                            <a href="{{ route('admin.edit_service_category', ['category_id' => $category->id]) }}" title="Modifier" class="btn btn-sm bg-gradient-secondary btn-circle ml-2">
                                <i class="fas fa-edit text-white"></i>
                            </a>
                            <a href="#" title="Supprimer" class="btn btn-sm bg-gradient-danger btn-circle ml-2" onclick="confirm('Attention! Vous êtes sur le point de supprimer cette catégorie !') || event.stopImmediatePropagation()" wire:click.prevent="deleteServiceCategory({{ $category->id }})">
                                <i class="fas fa-trash text-white"></i>
                            </a>
                        </div>
                    </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $s_categories->links() }}
            </div>
        </div>
    </div>

</div>
