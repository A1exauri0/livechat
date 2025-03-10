<div class="container my-4">
    <!-- Cabecera del chat -->
    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0"> Chat en vivo con: {{ __('ChatBot') }}</h5>
        </div>
    </div>

    <!-- Área de mensajes -->
    <div class="card mb-3" style="height: 300px; overflow-y: scroll;">
        <div class="card-body">
            <!-- Mensaje enviado (Bot) -->
            <div class="message received mb-3">
                <div class="d-flex justify-content-start" style="max-width: 50%;">
                    <div class="message-box bg-secondary text-white p-2 rounded-3">
                        ¡Hola! Soy tu asistente virtual. ¿En qué puedo ayudarte hoy?
                    </div>
                </div>
            </div>

            <!-- Mensaje enviado (Bot) - Listado de categorías -->
            <div class="message received mb-3">
                <div class="d-flex justify-content-start" style="max-width: 50%;">
                    <div class="message-box bg-secondary text-white p-2 rounded-3">
                        Aquí tienes algunas categorías de preguntas que puedes hacer:
                        <br>
                        <b>1.</b> Productos
                        <br>
                        <b>2.</b> Soporte Técnico
                        <br>
                        <b>3.</b> Precios
                    </div>
                </div>
            </div>

            <!-- Mensaje enviado (Usuario) - Selección de categoría -->
            <div class="message sent mb-3">
                <div class="d-flex justify-content-end">
                    <div class="message-box bg-primary text-white p-2 rounded-3" style="max-width: 50%;">
                        Productos.
                    </div>
                </div>
            </div>

            <!-- Mensaje enviado (Bot) - Respuesta de productos -->
            <div class="message received mb-3">
                <div class="d-flex justify-content-start" style="max-width: 50%;">
                    <div class="message-box bg-secondary text-white p-2 rounded-3">
                        ¡Perfecto! ¿Qué tipo de producto te interesa?
                        <br>
                        <b>1.</b> Laptops
                        <br>
                        <b>2.</b> Teléfonos
                        <br>
                        <b>3.</b> Accesorios
                    </div>
                </div>
            </div>

            <!-- Mensaje enviado (Usuario) - Selección de producto -->
            <div class="message sent mb-3">
                <div class="d-flex justify-content-end">
                    <div class="message-box bg-primary text-white p-2 rounded-3" style="max-width: 50%;">
                        Me gustaría saber sobre **laptops**.
                    </div>
                </div>
            </div>

            <!-- Mensaje enviado (Bot) - Preguntas sobre laptops -->
            <div class="message received mb-3">
                <div class="d-flex justify-content-start" style="max-width: 50%;">
                    <div class="message-box bg-secondary text-white p-2 rounded-3">
                        Aquí tienes algunas preguntas que puedes hacer sobre nuestras laptops:
                        <br>
                        <b>1.</b> ¿Cuál es el precio de las laptops?
                        <br>
                        <b>2.</b> ¿Qué especificaciones tienen las laptops?
                        <br>
                        <b>3.</b> ¿Cuál es el modelo más reciente?
                    </div>
                </div>
            </div>

            <!-- Fin de la conversación -->
        </div>
    </div>

    <!-- Input de mensaje y botón de enviar (solo visual)-->
    <div class="form-group">
        <div class="d-flex">
            <textarea type="text" class="form-control me-2 textarea-custom" id="userMessage" placeholder="Escribe un mensaje..." disabled></textarea>
            <button class="btn btn-success" disabled>Enviar</button>
        </div>
    </div>
</div>
