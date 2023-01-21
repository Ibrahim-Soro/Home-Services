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
            <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-fw fa-comments"></i> Messages</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center text-capitalize">Tous les messages disponibles</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nom et prénom</th>
                    <th>Adresse mail</th>
                    <th>Contact</th>
                    <th>Message</th>
                    <th>Date de réception</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>
                            <a href="tel:{{ $contact->phone }}">
                                {{ $contact->phone }}
                            </a>
                        </td>
                        <td>{{ $contact->message }}</td>
                        <td> Reçu le {{ date('d/m/Y à H:i', strtotime($contact->created_at)) }}</td>
                        <td>
                            <a href="mailto:{{ $contact->email }}" title="Répondre" class="btn btn-sm bg-gradient-success btn-circle ml-2">
                                <i class="fas fa-paper-plane text-white"></i>
                            </a>
                        </td>
                    @endforeach

                </tbody>
            </table>
            {{ $contacts->links() }}
            </div>
        </div>
    </div>

</div>
