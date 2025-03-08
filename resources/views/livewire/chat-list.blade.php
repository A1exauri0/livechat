<div class="card mb-3">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0"> Chats Activos</h5>
        <button wire:click="abrirModal" class="btn btn-danger">Chats Finalizados</button>
    </div>
    <div style="max-height: calc(87vh - 200px); overflow-y: auto;">
        <ul class="list-group">

            @for ($i = 0; $i < 20; $i++)
                <a href="#"
                    class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Dapibus ac facilisis in
                    <span class="badge bg-warning rounded-pill">Pendiente</span>
                </a>
            @endfor
        </ul>

    </div>
</div>
