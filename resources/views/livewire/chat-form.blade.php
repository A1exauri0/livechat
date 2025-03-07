<div>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" wire:model="nombre">
        <small>{{ $nombre }}</small>
    </div>
</div>

<script>
    document.getElementById('nombre').addEventListener('input', function(e) {
        @this.set('nombre', e.target.value);
    });

    window.livewire.on('mensajeRecibido', (mensaje) => {
        console.log(mensaje);
    });
</script>
