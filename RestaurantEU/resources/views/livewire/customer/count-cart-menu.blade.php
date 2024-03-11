<div class="flex gap-5">
    <div>
        <input class="bg-transparent border-none" type="hidden" value="{{ intval($price) * intval($count) }}" readonly>
        <p>{{ intval($price) * intval($count) }} บาท</p>
    </div>
    <div>
        <input class="bg-transparent border-none" type="hidden" value="{{ $count }}" readonly>
        <div class="flex gap-2 border border-black px-2">
            <button type="button" class="border-r border-black pr-1" wire:click="decrement" >-</button>
            <p>{{ $count }}</p>
            <button type="button" class="border-l border-black pl-1" wire:click="increment">+</button>
        </div>
    </div>
</div>



