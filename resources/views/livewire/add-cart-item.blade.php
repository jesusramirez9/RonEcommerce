<div x-data>


    <p class="text-gray-700 mb-4 mt-4"> <span class="text-lg font-semibold">Stock disponible: </span>{{ $quantity }}</p>
    <div class="flex">
        <div class="mr-4 bordradiu">
            <x-jet-secondary-button  class="btn_menmas" disabled x-bind:disabled="$wire.qty <= 1" wire:loading.attr="disabled"
                wire:target="decrement" wire:click="decrement">
                -
            </x-jet-secondary-button>
            <span class="mx-2 text-gray-700 qtydad">{{ $qty }}</span>
            <x-jet-secondary-button  class="btn_menmas" x-bind:disabled="$wire.qty >= $wire.quantity" wire:loading.attr="disabled"
                wire:target="increment" wire:click="increment">
                +
            </x-jet-secondary-button>
        </div>
        <div class="flex-1">
            <div class="itemcolbtnweb">
                <button class="text-white add_prod font-medium text-sm bg-blue-800 px-2 py-2 rounded-xl hover:bg-blue-700" x-bind:disabled="$wire.qty > $wire.quantity" wire:click="addItem" wire:loading.attr="disabled" wire:target="addItem"><i class="fa fa-shopping-cart mr-2"  ></i>Agregar a la bolsa</button>

                {{-- <x-button color="orange" x-bind:disabled="$wire.qty > $wire.quantity" class="w-full"
                    wire:click="addItem" wire:loading.attr="disabled" wire:target="addItem">
                    Agregar a la bolsa
                </x-button> --}}
            </div>
            <div  class="itemcolorbtn">
                <x-button color="orange" x-bind:disabled="$wire.qty > $wire.quantity" class="w-full"
                    wire:click="addItem" wire:loading.attr="disabled" wire:target="addItem">
                    Agregar
                </x-button>
            </div>
           
        </div>
    </div>
    <div class="mt-8 ">
        <p class="uppercase text-gray-400 font-normal">SKU:  {{$product->code}}</p> 
        <p class=" text-gray-400 font-normal">Categoría: <span class="uppercase"> {{$product->subcategory->name}}</span> </p> 
 
      </div>
</div>
