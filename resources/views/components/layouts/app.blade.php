<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaraFlux</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-50 text-gray-900">

    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        <header class="bg-white shadow p-4">
            <h1 class="text-xl font-bold">LaraFlux</h1>
        </header>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-gray-200 text-center p-4">
            &copy; {{ date('Y') }} LaraFlux
        </footer>
    </div>

    @livewireScripts
</body>
</html>
