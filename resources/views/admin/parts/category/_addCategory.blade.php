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
                <h4 class="m-t-0 header-title">Agregar nueva Cateogía</h4>

                <form method="post" action="{{ route('add.category') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nombre" class="col-form-label">Nombre</label>
                        <input type="text" class="form-control" name="name" id="nombre" placeholder="Nombre Categoría"
                               value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label>Descripción</label>
                        <textarea name="description" id="description">{{ old('description') }}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Proveedores</label>
                                <select class="form-control select2" name="provider_id" required>
                                    <option>Seleccionar Proveedor</option>
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
                                    <input type="file" name="photo" class="dropify" data-max-file-size="1M" required/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info btn btn-block">Agregar Categoría</button>
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