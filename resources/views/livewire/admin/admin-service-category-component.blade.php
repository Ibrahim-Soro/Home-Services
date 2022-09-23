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
          <h1 class="h3 mb-2 text-gray-800">Service Categories</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
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
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                       <th>#</th>
                      <th>Image</th>
                      <th>Nom de catégorie</th>
                      <th>Slug</th>
                      <th>Date de création</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      @foreach($s_categories as $category)
                      <tr>
                        <td>{{ $category->id }}</td>
                        <td>
                            <img src="{{ asset('images/categories') }}/{{ $category->image }}" alt="">
                        </td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        {{-- <td>{{ date_format($category->created_at, "D M Y") }}</td> --}}
                        <td>Créé le {{ date('d/m/Y à H:i', strtotime($category->created_at)) }}</td>
                      </tr>
                      @endforeach

                  </tbody>
                </table>
                {{ $s_categories->links() }}
              </div>
            </div>
          </div>

</div>
