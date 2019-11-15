@if (count($errors) > 0)
    <div class="alert alert-danger" style="color: whitesmoke">
        <strong>Ohh!</strong> Por favor revise los siguientes errores.
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: whitesmoke"> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif