<div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">
    <h1 class="text-3xl font-bold mb-6">🚀 Welcome to LaraFlux</h1>

    <div class="bg-white p-6 rounded-xl shadow-md w-96">
        <label class="block text-sm font-medium text-gray-700 mb-2">Enter your name:</label>
        
        <!-- Input powered by Flux -->
        <input 
            type="text" 
            wire:model.live="name"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-indigo-400"
            placeholder="Type here..."
        />

        <div class="mt-4 text-lg text-gray-800">
            @if($name)
                👋 Hello, <span class="font-semibold text-indigo-600">{{ $name }}</span>!
            @else
                Please enter your name above.
            @endif
        </div>
    </div>
</div>
