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
            <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-fw fa-address-book"></i> Fournisseurs</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center text-capitalize">Tous les fournisseurs disponibles</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Photo</th>
                    <th>Nom</th>
                    <th>Adresse mail</th>
                    <th>Contact</th>
                    <th>Ville</th>
                    <th>Service fournie</th>
                    <th>Adresse Atelier</th>
                    <th>Date d'inscription</th>
                </tr>
                </thead>

                <tbody>
                    @foreach($providers as $provider)
                    <tr>
                        <td>{{ $provider->id }}</td>
                        <td>
                            <img src="{{ asset('images/providers') }}/{{ $provider->image }}" alt="" width="60">
                        </td>
                        <td>{{ $provider->user->name }}</td>
                        <td>{{ $provider->user->email }}</td>
                        <td>
                            <a href="tel:{{ $provider->user->phone }}">
                                {{ $provider->user->phone }}
                            </a>
                        </td>
                        <td>{{ $provider->city }}</td>
                        <td> {{ $provider->category->name }}</td>
                        <td> {{ $provider->service_locations }}</td>
                        <td class="small">Le {{ date('d/m/Y à H:i', strtotime($provider->created_at)) }}</td>

                    @endforeach

                </tbody>
            </table>
            {{ $providers->links() }}
            </div>
        </div>
    </div>

</div>
