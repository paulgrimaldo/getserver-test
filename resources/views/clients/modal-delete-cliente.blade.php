<div class="modal fade" id="modal-delete-cliente-{{$cliente->id}}" role="dialog"
     aria-labelledby="modal-delete-cliente-{{$cliente->id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmar eliminaci&oacute;n</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Los datos ser&aacute;n eliminados
            </div>
            <form id="form-delete-{{$cliente->id}}" role="form" action="{{route('clientes.destroy',$cliente->id)}}"
                  method="POST">
                @csrf
                {{method_field('DELETE')}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button onclick="event.preventDefault(); document.getElementById('form-delete-{{$cliente->id}}').submit();"
                            type="submit" class="btn btn-primary">Confirmar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
