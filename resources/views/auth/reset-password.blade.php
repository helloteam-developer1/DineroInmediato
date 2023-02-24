
<x-guest-layout>
    <p class="texto-solicita-verde" style="padding-bottom: 25px; padding-top:15px;">Recuperar contraseña</p>
        <center>
            <x-auth-validation-errors  :errors="$errors" />
                @if(session('errors'))
                    <script>
                        alert(session('errors'));
                    </script>   
                @endif
        

            <div class="row" style="width:100%;">
                <div class="col-2"></div>
                <div class="col-8">
                    <form method="POST" action="{{ route('password.update') }}" >
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!-- Email Address -->
                        <div>
                            <x-input id="email" class="form-control" type="hidden" name="email" :value="old('email', $request->email)" required autofocus />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <input id="password" class="form-control"  placeholder="Contraseña nueva" type="password" name="password" required />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <input id="password_confirmation" class="form-control"  placeholder="Contraseña nueva"
                                                type="password"
                                                name="password_confirmation" required />
                        </div>
                        
                        <center><button class="btn btn-verde btn-md" style="margin-top: 30px; ">Envíar</button></center>
                    </form>
                </div>
                <div class="col-2"></div>
            </div>
        </center>
</x-guest-layout>