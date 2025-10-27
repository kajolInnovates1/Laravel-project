<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product CRUD</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- DaisyUI CDN -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body class="flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="navbar bg-base-200 px-6 shadow-lg">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl" href="{{ route('products.index') }}">Product CRUD</a>
        </div>
        <div class="flex-none gap-2">
            <a class="btn btn-sm btn-primary" href="{{ route('products.create') }}">Add Product</a>
            <a class="btn btn-sm btn-secondary" href="{{ route('products.index') }}">View Products</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 container mx-auto p-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer footer-center p-4 bg-base-200 text-base-content">
        <div>
            <p>© 2025 Product CRUD by Kajol</p>
        </div>
    </footer>

</body>

</html>