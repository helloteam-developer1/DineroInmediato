<div>
   @foreach ($notificacion as $n)
   <div class="card" style="border: 2px #38A937 solid;">
        <div class="card-head">
            {{$n->id_notf}}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$n->titulo_notf}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$n->sub_notf}}</h6>
            <p class="card-text">{{$n->cuerpo}}</p>
            <img src="/img/assets/aplicacionCliente/ELIMINAR.svg" style="float:right; cursor:pointer;" onclick="openModal()"></img>
        </div>
    </div>
   @endforeach
   
</div>
