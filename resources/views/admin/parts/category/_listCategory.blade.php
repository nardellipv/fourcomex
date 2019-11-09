@extends('layouts.admin')

@section('style')
    <!-- DataTables -->
    <link href="{{ asset('styleAdmin/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('styleAdmin/assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <!-- Responsive datatable examples -->
    <link href="{{ asset('styleAdmin/assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <!-- Multi Item Selection examples -->
    <link href="{{ asset('styleAdmin/assets/plugins/datatables/select.bootstrap4.min.css') }}" rel="stylesheet"
          type="text/css"/>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title">Listado de categorías</h4>
                <p class="text-muted font-14 m-b-30">
                    Listado de categorias y descripciones en el sitio web
                </p>

                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Proveedor</th>
                        <th>Acción</th>
                    </tr>
                    </thead>


                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{!! Str::limit($category->description, 70) !!}</td>
                            <td>{{ $category->provider->name }}</td>
                            <td>
                                <a href="{{ route('edit.category', $category) }}"
                                   class="btn btn-icon waves-effect waves-light btn-info m-b-5"> <i
                                            class="fa fa-file-text-o"></i> </a>
                                <a href="{{ route('delete.category', $category) }}"
                                   class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i
                                            class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('styleAdmin/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('styleAdmin/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('styleAdmin/assets/plugins/datatables/dataTables.select.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            // Default Datatable
            $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf']
            });

            // Key Tables

            $('#key-table').DataTable({
                keys: true
            });

            // Responsive Datatable
            $('#responsive-datatable').DataTable();

            // Multi Selection Datatable
            $('#selection-datatable').DataTable({
                select: {
                    style: 'multi'
                }
            });

            table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        });

    </script>
@endsection