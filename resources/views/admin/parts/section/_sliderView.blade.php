@extends('layouts.admin')

@section('style')
    <link href="{{ asset('styleAdmin/assets/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet"
          type="text/css"/>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card-box">
                <form method="post" action="{{ route('add.slider') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="texto" class="col-form-label">Texto Slider</label>
                        <input type="text" class="form-control" name="title" id="texto" placeholder="Texto">
                    </div>

                    <div class="card-box">
                        <div class="form-group">
                            <label>Imagen Slider</label>
                            <input type="file" name="photo" class="dropify"
                                   data-max-file-size="1M"/>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info btn btn-block">Agregar Slider</button>
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
                        <th>Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sliders as $slider)
                        <tr>
                            <th style="width: 25%;"><img src="{{ asset('images/section/118X88-'.$slider->picture) }}"> </th>
                            <td>{{ $slider->title }}</td>
                            <td>
                                <a href="{{ route('edit.slider', $slider) }}"
                                   class="btn btn-icon waves-effect waves-light btn-info m-b-5"> <i
                                            class="fa fa-file-text-o"></i> </a>
                                <a href="{{ route('delete.slider', $slider) }}"
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
@endsection