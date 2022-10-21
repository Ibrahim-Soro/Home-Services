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
                    {{-- <td>{{ date_format($category->created_at, "D M Y") }}</td> --}}
                    <td>Créé le {{ date('d/m/Y à H:i', strtotime($category->created_at)) }}</td>
                    <td>
                        <a href="#" title="Modifier" class="btn bg-gradient-secondary btn-circle">
                            <i class="fas fa-edit text-white"></i>
                        </a>
                        <a href="#" title="Supprimer" class="btn bg-gradient-danger btn-circle ml-2">
                            <i class="fas fa-trash text-white"></i>
                        </a>
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
