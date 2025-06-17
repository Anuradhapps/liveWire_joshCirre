<div>

    <div
        class="  flex flex-col items-center justify-center min-h-screen bg-gradient-to-br from-blue-600 via-indigo-100 to-purple-100 text-gray-800">
        <h2 class="text-3xl font-bold mb-6 bg-amber-300 p-5 rounded-2xl"> {{ $count }}</h2>

        <div class="flex space-x-4">
            <button wire:click='decrement'
                class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded transition duration-300">
                -
            </button>

            <button wire:click='resetCount'
                class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 rounded transition duration-300">
                reset
            </button>

            <button wire:click='increment'
                class="bg-purple-500 hover:bg-purple-600 text-white font-semibold py-2 px-4 rounded transition duration-300">
                +
            </button>
            <input wire:model ='num' type="number" placeholder="Enter value"
                class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full" />

            <button wire:click='changeCount()'
                class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded transition duration-300">
                changeCount
            </button>
        </div>
    </div>

</div>
