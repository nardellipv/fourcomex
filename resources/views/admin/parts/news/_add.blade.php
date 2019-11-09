@extends('layouts.admin')

@section('style')
    <link href="{{ asset('styleAdmin/assets/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet"
          type="text/css"/>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                @include('admin.alerts.error')
                <h4 class="m-t-0 header-title">Agregar nueva News</h4>

                <form method="post" action="{{ route('addNew.news') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="titulo" class="col-form-label">Títluo</label>
                        <input type="text" class="form-control" name="title" id="titulo" placeholder="Título" value="{{ old('title') }}">
                    </div>

                    <div class="form-group">
                        <label>Cuerpo</label>
                        <textarea name="body" id="body" rows="4"
                                  cols="4">{{ old('body') }}</textarea>
                    </div>
                    <div class="col-md-8 offset-2">
                        <div class="card-box">
                            <div class="form-group">
                                <label>Imagen de la noticia</label>
                                <input type="file" name="photo" class="dropify"  data-max-file-size="1M" required />
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info btn btn-block">Actualizar Noticia</button>
                </form>
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
        CKEDITOR.replace('body');
    </script>
@endsection