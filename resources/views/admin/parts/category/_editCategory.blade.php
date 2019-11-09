@extends('layouts.admin')

@section('style')
    <link href="{{ asset('styleAdmin/assets/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet"
          type="text/css"/>
@endsection

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Editar Categoría</h4>

                <form method="post" action="{{ route('update.category', $content) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nombre" class="col-form-label">Nombre</label>
                        <input type="text" class="form-control" name="name" id="nombre" placeholder="Nombre"
                               value="{{ $content->name }}">
                    </div>

                    <div class="form-group">
                        <label>Descripción</label>
                        <textarea name="description" id="description">{{ $content->description }}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Proveedores</label>
                                <select class="form-control select2" name="provider_id" required>
                                    <option value="{{ $content->provider->id }}">{{ $content->provider->name }}</option>
                                    <option disabled>-------------------------</option>
                                    @foreach($providers as $provider)
                                        <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-box">
                                <div class="form-group">
                                    <label>Imagen de la cateogría</label>
                                    <input type="file" name="photo" class="dropify"
                                           data-default-file="{{ asset('images/category/170x140-'. $content->photo) }}"
                                           data-max-file-size="1M" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info btn btn-block">Actualizar Categoría</button>
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
        CKEDITOR.replace('description');
    </script>
@endsection