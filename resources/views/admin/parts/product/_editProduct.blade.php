@extends('layouts.admin')

@section('style')
    <link href="{{ asset('styleAdmin/assets/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('styleAdmin/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet"/>

    <style>
        .dlk-radio input[type="radio"],
        .dlk-radio input[type="checkbox"] {
            margin-left: -99999px;
            display: none;
        }

        .dlk-radio input[type="radio"] + .fa,
        .dlk-radio input[type="checkbox"] + .fa {
            opacity: 0.15
        }

        .dlk-radio input[type="radio"]:checked + .fa,
        .dlk-radio input[type="checkbox"]:checked + .fa {
            opacity: 1
        }
    </style>
@endsection

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Editar Producto</h4>

                <form method="post" action="{{ route('update.product', $product) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nombre" class="col-form-label">Nombre</label>
                        <input type="text" class="form-control" name="name" id="nombre" placeholder="Nombre"
                               value="{{ $product->name }}">
                    </div>

                    <div class="form-group">
                        <label>Descripción</label>
                        <textarea name="description" id="description">{{ $product->description }}</textarea>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="card-box">
                                <div class="form-group">
                                    <label for="codigo" class="col-form-label">Código del Producto</label>
                                    <input type="text" class="form-control" name="cod" id="codigo"
                                           placeholder="Código Producto"
                                           value="{{ $product->cod }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card-box">
                                <div class="form-group">
                                    <label for="codigo" class="col-form-label">Seleccione una categoría</label>
                                    <select class="form-control" name="category_id">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }} -
                                                ({{ $category->provider->name }})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="card-box">
                                <div class="form-group">
                                    <label for="codigo" class="col-form-label">Dirección Web del Producto</label>
                                    <input type="text" class="form-control" name="link" id="codigo"
                                           placeholder="Dirección del producto"
                                           value="{{ $product->link }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card-box">
                                <div class="form-group">
                                    <label for="codigo" class="col-form-label">Mostrar en la pagina
                                        Principal</label><br>
                                    <label>No </label> <input type="checkbox" data-plugin="switchery"
                                                             data-color="#ffaa00" name="available"/> <label> Sí</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 offset-2">
                        <div class="card-box">
                            <div class="form-group">
                                <label>Imagen del Producto</label>
                                <input type="file" name="photo" class="dropify"
                                       data-default-file="{{ asset('images/product/370x277-' .$product->photo) }}"
                                       data-max-file-size="1M"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 offset-2">
                        <div class="card-box">
                            <div class="form-group">
                                <label>Imagen del producto en miniatura</label>
                                <input type='file' name='files[]' multiple/>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info btn btn-block">Actualizar Producto</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('styleAdmin/assets/plugins/fileuploads/js/dropify.min.js') }}"></script>
    <script src="{{ asset('styleAdmin/assets/plugins/switchery/switchery.min.js') }}"></script>

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