<div>
    <div class="container">
        <br />
        <h1 class="text-3xl font-bold text-datgencred text-center" style="color: #F5A733;">
            Tabla de amortización
        </h1>
        
        <br>
        <div class="d-flex justify-content-center">
            <div class="row g-3 ">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label fw-bold">De</label>
                </div>
                <div class="col-auto">
                    <input type="date" id="inputPassword6" class="form-control"
                        aria-describedby="passwordHelpInline" wire:model.debounce.900ms="fecha_inicio">
                </div>
                <div class="col-auto">
                    <img src="img/Grupo 166.png" alt="">
                </div>
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label fw-bold">a</label>
                </div>
                <div class="col-auto">
                    <input type="date" id="inputPassword6" class="form-control"
                        aria-describedby="passwordHelpInline" wire:model.debounce.900ms="fecha_termino">
                </div>
                <div class="col-auto">
                    <img src="img/Grupo 166.png" alt="">
                </div>
                <div class="col-auto">
                    <div class="input-group w-60">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                </path>
                            </svg>
                        </span>
                        <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar"
                            aria-describedby="basic-addon1" wire:model.debounce.900ms="busqueda">
                    </div>
                </div>
                <div class="col-auto">
                    <button type="button" class="btn btn-success" style="background: #4A9D22;">Buscar</button>
                </div>
            </div>
        </div>
        <br />
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="border text-center" scope="col">Número de crédito</th>
                        <th class="border text-center" scope="col"># de pagos</th>
                        <th class="border text-center" scope="col">Próximo pago</th>
                        <th class="border text-center" scope="col">Interés Anual (CAT informativo sin IVA)</th>
                        <th class="border text-center" scope="col">Pago a Capital</th> 
                        <th class="border text-center" scope="col">Intereses Ordinarios</th>
                        <th class="border text-center" scope="col">IVA interes Ordinarios</th>
                        <th class="border text-center" scope="col">Comisiones</th>
                        <th class="border text-center" scope="col">Pago total mensual</th>                         
                    </tr>
                </thead>
                <tbody>
                        @if ($tabla!=null)
                            @if ($tabla->count())
                                @foreach ($tabla as $t)
                                
                                    @php
                                        $total_interes_ordinario += $t->interes_ordinarios;
                                        $total_iva_io+= $t->iva_io;
                                        $total_comisiones+= $t->comisiones;
                                        $total_pago_m+= $t->pago_total_men;                     
                                    @endphp
                                    <tr>
                                        <th class="border text-center" scope="col">{{$t->num_credito}}</th>
                                        <th class="border text-center" scope="col">{{$t->numero_pagos}}</th>
                                        <th class="border text-center" scope="col" style="white-space: nowrap;">{{$t->prox_pago}}</th>
                                        <th class="border text-center" scope="col">{{$t->interes_anual}}</th>
                                        <th class="border text-center" scope="col">{{number_format($t->pag_capital)}}</th>
                                        <th class="border text-center" scope="col">{{number_format($t->interes_ordinarios)}}</th>
                                        <th class="border text-center" scope="col">{{$t->iva_io}}</th>
                                        <th class="border text-center" scope="col">{{number_format($t->comisiones)}}</th>
                                        <th class="border text-center" scope="col">{{number_format($t->pago_total_men)}}</th>
                                    </tr>
                                    
                                
                                @endforeach
                                <tr>
                                        <th class="border text-center" scope="col" colspan="5">Total</th>
                                        <th class="border text-center" scope="col">{{number_format($total_interes_ordinario)}}</th>
                                        <th class="border text-center" scope="col">{{number_format($total_iva_io)}}</th>
                                        <th class="border text-center" scope="col">{{number_format($total_comisiones)}}</th>
                                        <th class="border text-center" scope="col">{{number_format($total_pago_m)}}</th>
                                </tr>
                            @else
                            <tr>
                                <th class="border text-center" colspan="9">Sin registros.</th>
                            </tr>
                            @endif
                        @else
                            <tr>
                                <th class="border text-center" scope="col" colspan="9">Sin registros.</th>
                                
                            </tr>
                        @endif
                </tbody>
            </table>
        </div>
        <div class="row">

        </div>
    </div>

    <div class="container d-flex flex-row-reverse">
        <nav aria-label="Page navigation example">
            @if ($tabla!=null)
            {{$tabla->links('pagination::bootstrap-4')}}    
            @endif        
        </nav>
    </div>
</div>
