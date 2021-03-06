<div class="box">
    <div class="box-header margin-top-20">
        <h2>Modificar perfil</h2>
    </div>
    <div class="row margin-top-20 align-items">
        <label>Nombre</label>
        <input class="margin-left-10 form-control" type="text" name="name" value="{{$user->name}}">
    </div>
    <div class="row margin-top-20 align-items">
        <label>Apellidos</label>
        <input class="margin-left-10 form-control" type="text" name="surnames" value="{{$user->surname}}">
    </div>
    <div class="row margin-top-20 align-items">
        <label>Email</label>
        <input class="margin-left-10 form-control" type="email" name="email" value="{{$user->email}}">
    </div>
    <div class="form-check margin-top-20">
        <input type="checkbox" class="form-check-input" id="mailNotification">
        <label class="form-check-label" for="exampleCheck1">Activar notificaciones por email</label>
    </div>
    <div class="form-group text-center margin-top-20">
        <button class="btn btn-success btn-submit">Guardar</button>
    </div>
    <div class="form-group text-center margin-top-20">
        <span>
            <a class="btn btn-warning btn-submit"
            href="{{ route('profile/modify/password') }}">
            Cambiar contraseña
            </a>
        </span>
    </div>
</div>