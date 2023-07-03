
<x-guest-layout>
    <p class="texto-solicita-verde" style="padding-bottom: 25px; padding-top:15px;">Recuperar contraseña</p>
        <center>
            @error('password')
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title center" id="staticBackdropLabel">Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                        </div>
                        <div class="modal-body">
                            {{$message}}
                        </div>
                    </div>
                    </div>
                </div>
                <script>
                    $( document ).ready(function() {
                        $('#staticBackdrop').modal('toggle')
                    });
                </script>
            @enderror
            @error('email')
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title center" id="staticBackdropLabel">Email</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                        </div>
                        <div class="modal-body">
                            {{$message}}
                        </div>
                    </div>
                    </div>
                </div>
                <script>
                    $( document ).ready(function() {
                        $('#staticBackdrop').modal('toggle')
                    });
                </script>
            @enderror
            @error('password')
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title center" id="staticBackdropLabel">Token</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                        </div>
                        <div class="modal-body">
                            {{$message}}
                        </div>
                    </div>
                    </div>
                </div>
                <script>
                    $( document ).ready(function() {
                        $('#staticBackdrop').modal('toggle')
                    });
                </script>
            @enderror

            <div class="row mb-5 w-75">
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
                        
                        <center><button class="btn btn-verde btn-md" style="margin-top: 30px; ">Cambiar password</button></center>
                    </form>
                </div>
                <div class="col-2"></div>
            </div>
        </center>
</x-guest-layout>