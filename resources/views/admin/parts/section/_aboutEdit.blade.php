@extends('layouts.admin')

@section('style')
    <link href="{{ asset('styleAdmin/assets/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet"
          type="text/css"/>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card-box">
                <form method="post" action="{{ route('update.about', $about) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="texto" class="col-form-label">Texto Slider</label>
                        <input type="text" class="form-control" name="title" id="texto" placeholder="Texto" value="{{ $about->title }}">
                    </div>

                    <div class="form-group">
                        <label>Texto</label>
                        <textarea name="text" id="description">{{ $about->text }}</textarea>
                    </div>

                    <div class="card-box">
                        <div class="form-group">
                            <label>Imagen Slider</label>
                            <input type="file" name="photo" class="dropify"
                                   data-default-file="{{ asset('images/section/600x316-' .$about->picture) }}"
                                   data-max-file-size="1M"/>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info btn btn-block">Editar Sobre Nosotros</button>
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