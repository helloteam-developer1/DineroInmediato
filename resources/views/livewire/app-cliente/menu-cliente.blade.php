<div>
  <li class="nav-item">
    <div class="dropdown">
      <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        <img class="m-1" src="{{ asset('img/assets/aplicacionCliente/Grupo 262.png')}}" alt=""> 
        &nbsp;&nbsp;&nbsp;Notificaciones 
        @if($not>0)
            {{$not}}
        @endif
        
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
       @if(!empty($notificacion))
       @foreach ($notificacion as $n)
        <li>
          <a href="{{url('cliente-notificaciones',$n->id_notf)}}">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">{{$n->titulo_notf}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$n->sub_notf}}</h6>
                <p class="card-text">
                  {{Str::limit($n->cuerpo,40,'...')}}
                </p>
              </div>
            </div>
          </a>
        </li>
       @endforeach
       <li>
        <a href="{{route('cliente-notificaciones',0)}}" class="btn btn-secondary">Ver todas las notificaciones.</a>
       </li>
       @else
       <li>
        <div class="card" style="width: 18rem;">                      
          <p>No tienes notificación</p>
          <hr />
          <a href="{{route('cliente-notificaciones',0)}}" class="btn btn-secondary">Ver todas las notificaciones.</a>
        </div>
       </li>
       @endif
      </ul>
    </div>
    
  </li>
</div>

                    