<div class="flex gap-5">
    <div>
        <input class="bg-transparent border-none" type="hidden" value="{{ $price * $count }}" readonly>
        <p>{{ $price * $count }} บาท</p>
    </div>
    <div>
        <input class="bg-transparent border-none" type="hidden" value="{{ $count }}" readonly>
        <div class="flex gap-2">
            <button type="button" wire:click="decrement" >-</button>
            <p>{{ $count }}</p>
            <button type="button" wire:click="increment">+</button>
        </div>
    </div>
</div>



