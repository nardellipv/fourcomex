@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <form method="POST" action="{{ route('add.user') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="card-box">
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Nombre y Apellido</label>
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-box">
                                <div class="form-group">
                                    <label for="email" class="col-form-label">EMail</label>
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="card-box">
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Contraseña</label>
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-box">
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Confirmar Contraseña</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info btn btn-block">Crear Usuario</button>
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
                        <th>Nombre y Apellido</th>
                        <th>email</th>
                        <th>Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('edit.user', $user) }}"
                                   class="btn btn-icon waves-effect waves-light btn-info m-b-5"> <i
                                            class="fa fa-file-text-o"></i> </a>
                                <a href="{{ route('delete.user', $user) }}"
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