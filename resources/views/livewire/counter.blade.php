<div>
    {{--model : lier valeur d'un champ d'entrée et propriété d'une classe : bidirectionnel--}}
    <input wire:model="message" type="text">
    <p>{{ $message }}</p>

    <button wire:click="increment">{{ $counterValue }}</button>
</div>
