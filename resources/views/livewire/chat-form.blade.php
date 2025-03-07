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
            <!-- Mensaje enviado-->
            <div class="message sent mb-3">
                <div class="d-flex justify-content-end">
                    <div class="message-box bg-primary text-white p-2 rounded-3" style="max-width: 50%;">
                        Hola, ¿cómo estás? hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola
                        hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola
                        hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola
                    </div>
                </div>
            </div>
            <!-- Mensaje recibido-->
            <div class="message received mb-3">
                <div class="d-flex justify-content-start" style="max-width: 50%;">
                    <div class="message-box bg-secondary text-white p-2 rounded-3">
                        ¡Hola! Todo bien, ¿y tú?
                    </div>
                </div>
            </div>
            <!-- Mensaje enviado-->
            <div class="message sent mb-3">
                <div class="d-flex justify-content-end">
                    <div class="message-box bg-primary text-white p-2 rounded-3" style="max-width: 50%;">
                        Bien, gracias. ¿Qué has hecho hoy?
                    </div>
                </div>
            </div>
            <!-- Mensaje recibido-->
            <div class="message received mb-3">
                <div class="d-flex justify-content-start" style="max-width: 50%;">
                    <div class="message-box bg-secondary text-white p-2 rounded-3">
                        Hola, ¿cómo estás? hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola
                        hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola
                        hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola
                    </div>
                </div>
            </div>
            <!-- Fin de los mensajes -->
        </div>
    </div>

    <!-- Input de mensaje y botón de enviar -->
    <div class="form-group">
        <div class="d-flex">
            <textarea type="text" class="form-control me-2 textarea-custom" id="nombre" wire:model="nombre"
                placeholder="Escribe un mensaje..." ></textarea>
            <button class="btn btn-success">Enviar</button>
        </div>
    </div>

</div>

{{-- <script>
    document.getElementById('nombre').addEventListener('input', function(e) {
        @this.set('nombre', e.target.value);
    });

    window.livewire.on('mensajeRecibido', (mensaje) => {
        console.log(mensaje);
    });
</script> --}}
