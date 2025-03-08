<div>
    <!-- Modal -->
    @if ($isOpen)
        <div class="modal fade show d-block" style="background: rgba(0,0,0,0.5);" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Chats Finalizados</h5>
                        <button type="button" class="btn-close" wire:click="closeModal"></button>
                    </div>
                    <div class="modal-body">
                        <div style="max-height: calc(90vh - 200px); overflow-y: auto;">
                            <ul class="list-group">
                                @for ($i = 0; $i < 20; $i++)
                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                        Dapibus ac facilisis in
                                        <span class="badge bg-danger rounded-pill">Finalizado</span>
                                    </a>
                                @endfor
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" wire:click="closeModal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
    @endif
</div>
