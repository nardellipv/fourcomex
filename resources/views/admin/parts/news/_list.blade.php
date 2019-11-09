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
                <h4 class="m-t-0 header-title">Listado de noticias</h4>
                <p class="text-muted font-14 m-b-30">
                    Listado de noticias dentro del blog
                </p>

                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Título</th>
                        <th>Cuerpo</th>
                        <th>Estado</th>
                        <th>Fecha publicacón</th>
                        <th>Acción</th>
                    </tr>
                    </thead>


                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{!! Str::limit($post->body, 75) !!}</td>
                            @if($post->status == 'ACTIVE')
                                <td><span class="badge badge-success">{{ $post->status }}</span></td>
                            @else
                                <td><span class="badge badge-danger">{{ $post->status }}</span></td>
                            @endif
                            <td>{{ $post->created_at->format('d/m/Y') }}</td>
                            <td>
                                <div class="btn-group btn-group-justified m-b-10">
                                    <a href="{{ route('edit.news', $post) }}" class="btn btn-primary waves-effect waves-light" role="button">Editar</a>
                                    @if($post->status == 'ACTIVE')
                                        <a href="{{ route('desactive.news', $post) }}" class="btn btn-warning waves-effect waves-light" role="button">Desactivar</a>
                                    @else
                                        <a href="{{ route('active.news', $post) }}" class="btn btn-warning waves-effect waves-light" role="button">Activar</a>
                                    @endif
                                    <a href="{{ route('destroy.news', $post) }}" class="btn btn-danger waves-effect waves-light" role="button">Eliminar</a>
                                </div>
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