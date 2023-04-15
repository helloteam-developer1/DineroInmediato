<div>
    <form action="{{route('login.store')}}" method="POST">
        @csrf
        <p class="texto-solicita-verde Medium Carot">Inicio de sesión</p>
        <input name="credencial" type="text" placeholder="Correo electrónico o teléfono" class="form-control Carot ExtraLight" >
        @error('credencial')
            <p class="error-message">{{ $message }}</p>
        @enderror
        <br />
        <input name="password" type="password" placeholder="Contraseña" class="form-control Carot ExtraLight"  >
        @error('password')
            <p class="error-message">{{ $message }}</p>
        @enderror
        <center><p class="text-green Carot Sans" style="padding-top:20px; padding-bottom:20px;">¿Olvidaste tu contraseña?. <a href="{{route('recover1')}}" class="vinculo" style=" text-decoration: underline; ">Haz clic aquí para recuperarla</a></p></center>
        <div>
            <a  class="btn btn-verde btn-md btn-block" href="{{route('home')}}" style="float: left;">Regresar</a>
            <button  class="btn btn-naranja btn-md " style="float: right; background:#da8b0c
            ;" type="submit">Continuar</button>
        </div>
    </form>
</div>
