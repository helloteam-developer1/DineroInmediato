<div>

  <!-- Modal -->
  <div class="modal fade" id="{{ $idm }}" tabindex="-1" aria-labelledby="{{ $idm }}Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title col-11 text-center" style="color: #459F47" id="{{ $idm }}Label">{{ $titulo }}</h5>
          <button type="button" class="btn-close col-1" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-justify p-5">
          {{ $contenido }}
        </div>
        <hr>
        <div class="text-center mb-3">
            <center>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Aceptar</button>
            </center>
        </div>
      </div>
    </div>
  </div>
</div>
