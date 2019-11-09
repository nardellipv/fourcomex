@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Ohh!</strong> Por favor {{--{{ Auth::user()->name }}--}} revise los siguientes errores.
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif