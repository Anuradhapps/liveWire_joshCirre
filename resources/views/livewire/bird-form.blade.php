<div>
    <form wire:submit='submit' class="max-w-md mx-auto p-6 bg-white shadow-md rounded-md space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700">Bird Name</label>
            <input wire:model='bird_count' type="number" min="1" max="100"
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                placeholder="Enter bird name">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Bird Description</label>
            <textarea wire:model='notes' cols="30" rows="4"
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                placeholder="Describe the bird"></textarea>
        </div>

        <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition">
            Add a New Bird Entry
        </button>
    </form>

</div>
