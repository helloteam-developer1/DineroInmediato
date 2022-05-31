<div class="row-span-1 col-span-1 text-center calculadoraItemsDos hidden">
    <h1 class="text-center texto-solicita-verde texto-solicita-negro">Mensaje de Bienvenida</h1>
</div>

<div class="row-span-1 col-span-1 text-center calculadoraItemsDos hidden">
    <h3 class="texto-pequeno text-justify font-22">Necesitas un préstamo de emergencia, no te preocupes, nosotros
        te ayudamos. Para saber si eres candidato o no.</h3>
    <h3 class="titulo font-22">Ingresa tus datos en la siguiente calculadora.</h3>
</div>

<div class="row-span-1 col-span-1 text-center calculadoraItemsDos hidden mb-4">
    <input class="form-control" type="text" placeholder="Nombre">
</div>
<div class="row-span-1 col-span-1 text-center calculadoraItemsDos hidden mb-4">
    <input class="form-control" type="text" placeholder="Trabajo">
</div>
<div class="row-span-1 col-span-1 text-center calculadoraItemsDos hidden mb-4">
    <input id="ingresoMensual" class="form-control" type="number" placeholder="Cual es tu ingreso mensual?">
</div>
<div class="grid grid-cols-12 row-span-1 col-span-1 calculadoraItemsDos hidden">
    <div class=" col-span-6 ">
        <p>¿Tienes tarjeta de nomina?</p>
    </div>
    <div class="col-span-3">
        <input type="radio" id="op1" name="nomina" value="Si">
        <label for="op1">Si</label>
    </div>
    <div class="col-span-3">
        <input type="radio" id="op2" name="nomina" value="NO">
        <label for="op2">No</label>
    </div>

</div>

<div class="grid grid-cols-12 row-span-1 col-span-1 calculadoraItemsDos hidden">
    <div class=" col-span-6 ">
        <p>Cuentas con crédito Hipotecario?</p>
    </div>
    <div class="col-span-3">
        <input type="radio" id="op3" name="hipotecario" value="Si" class="hipotecario">
        <label for="op3">Si</label>
    </div>
    <div class="col-span-3">
        <input type="radio" name="hipotecario" value="No" id="op4" class="hipotecario">
        <label for="op4">No</label>
    </div>

</div>

    <br>
        <div class="text-center"> <a  onclick="calcular()" class="btn btn-calcular btn btn-verde px-5 calculadoraItemsDos hidden" style="font-size: 32px">Calcular </a> </div>
    <br>
