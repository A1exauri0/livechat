<div class="container my-4">
    <!-- Cabecera del chat -->
    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0"> Chat en vivo con: {{ __('Nombre del Contacto') }}</h5>
        </div>
    </div>

    <!-- Área de mensajes -->
    <div class="card mb-3" style="height: 300px; overflow-y: scroll;">
        <div class="card-body">
            <!-- Mensajes -->
            <div class="message sent mb-3">
                <div class="d-flex justify-content-end">
                    <div class="message-box bg-primary text-white p-2 rounded-3">
                        Hola, ¿cómo estás?
                    </div>
                </div>
            </div>
            <div class="message received mb-3">
                <div class="d-flex justify-content-start">
                    <div class="message-box bg-light p-2 rounded-3">
                        ¡Hola! Todo bien, ¿y tú?
                    </div>
                </div>
            </div>
            <!-- Fin de los mensajes -->
        </div>
    </div>

    <!-- Input de mensaje y botón de enviar -->
    <div class="form-group">
        <div class="d-flex">
            <input type="text" class="form-control me-2" id="nombre" wire:model="nombre" placeholder="Escribe un mensaje...">
            <button class="btn btn-success">Enviar</button>
        </div>
    </div>

    <!-- Mostrar el nombre ingresado -->
    <small>{{ $nombre }}</small>
</div>

<script>
    document.getElementById('nombre').addEventListener('input', function(e) {
        @this.set('nombre', e.target.value);
    });

    window.livewire.on('mensajeRecibido', (mensaje) => {
        console.log(mensaje);
    });
</script>
