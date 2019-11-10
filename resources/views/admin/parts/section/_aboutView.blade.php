@extends('layouts.admin')

@section('style')
    <link href="{{ asset('styleAdmin/assets/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet"
          type="text/css"/>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card-box">
                <form method="post" action="{{ route('add.about') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title" class="col-form-label">Título</label>
                        <input type="text" class="form-control" name="title" id="title"
                               placeholder="Título Sobre Nosotros">
                    </div>

                    <div class="form-group">
                        <label>Texto</label>
                        <textarea name="text" id="description"></textarea>
                    </div>

                    <div class="card-box">
                        <div class="form-group">
                            <label>Imagen</label>
                            <input type="file" name="photo" class="dropify"
                                   data-max-file-size="1M"/>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info btn btn-block">Agregar descripción</button>
                </form>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-10 offset-1">
            <div class="card-box">
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th>Imágen</th>
                        <th>Título</th>
                        <th>Texto</th>
                        <th>Accion</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($views as $view)
                        <tr>
                            <th style="width: 30%"><img src="{{ asset('images/section/600x316-' .$view->picture) }}" width="85%"> </th>
                            <td>{{ $view->title }}</td>
                            <td>{!! Str::limit($view->text, 30) !!}</td>
                            <td>
                                <a href="{{ route('edit.about', $view) }}"
                                   class="btn btn-icon waves-effect waves-light btn-info m-b-5"> <i
                                            class="fa fa-file-text-o"></i> </a>
                                <a href="{{ route('delete.about', $view) }}"
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
    <script src="{{ asset('styleAdmin/assets/plugins/fileuploads/js/dropify.min.js') }}"></script>
    <script type="text/javascript">
        $('.dropify').dropify({
            messages: {
                'default': 'Arrastre la imagen hasta el recuadro o haga click acá',
                'replace': 'Arrastre la imagen hasta el recuadro o haga click acá',
                'remove': 'Borrar',
                'error': 'Ooops, algo paso.'
            },
            error: {
                'fileSize': 'The file size is too big (1M max).'
            }
        });
    </script>

    <script src="https://cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('description');
    </script>
@endsection