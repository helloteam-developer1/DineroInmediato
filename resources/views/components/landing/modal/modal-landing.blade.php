<div>
    <style>
        .closeModal{
            font-size: 2rem;
        }
        .modal-title{
             font-size: 2.5rem;
        }
        .acept{
            background: #38A937;
            font-size: 28px
        }
        .modal-body{
            font-size: 22px;
        }
    </style>
  <!-- Modal -->
  <div class="modal fade" id="{{ $idm }}" tabindex="-1" aria-labelledby="{{ $idm }}Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title col-12 text-center" style="color: #459F47" id="{{ $idm }}Label">{!! $titulo !!}</h5>
          {{-- <button type="button" class="btn-close col-1  " data-bs-dismiss="modal" aria-label="Close"><strong class="closeModal">x</strong></button> --}}
        </div>
        <div class="modal-body text-justify p-5">
          {{ $contenido }}
        </div>
        <hr>
        <div class="text-center mb-3">
            <center>
                <button type="button" class="btn btn-secondary acept my-4 px-5" data-bs-dismiss="modal">Aceptar</button>
            </center>
        </div>
      </div>
    </div>
  </div>
</div>
