<div style="text-align: center">
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
    <label for="mensaje">Mensaje</label>
    <input type="text" class="form-control" id="mensaje" wire:model="mensaje">
    <small>{{ $mensaje }}</small>

</div>
