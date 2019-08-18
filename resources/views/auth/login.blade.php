@extends('layouts.base')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card ">
            <div class="card-header card-header-rose card-header-icon">
                <h4 class="card-title text-center">Iniciar Sessión</h4>
            </div>
            <div class="card-body ">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleEmail" class="bmd-label-floating">Dirección de correo electrónico</label>
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="examplePass" class="bmd-label-floating">Contraseña</label>
                        <input  type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Recordar
                            <span class="form-check-sign">
                      <span class="check"></span>
                    </span>
                        </label>
                    </div>
                    <div class="card-footer ">
                        <button type="submit" class="btn btn-fill btn-rose">INGRESAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
