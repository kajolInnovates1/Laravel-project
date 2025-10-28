<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title', 'Books')</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- DaisyUI quick support via CDN -->
    <link href="https://cdn.jsdelivr.net/gh/saadeghi/daisyui@1.14.0/dist/full.css" rel="stylesheet">

    <style>
        /* small container */
        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 1rem;
        }
    </style>
</head>

<body class="bg-base-200 min-h-screen flex flex-col">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto flex flex-wrap items-center justify-between py-4">
            <!-- Brand / Logo -->
            <a href="{{ route('books.index') }}" class="text-2xl font-bold text-green-700 hover:text-green-800 transition">
                MyBooks
            </a>

            <!-- Navigation Items -->
            <div class="flex items-center  gap-3">
                <a href="{{ route('books.create') }}"
                    class="btn btn-success hover:p-2 hover:rounded-2xl hover:text-white btn-sm hover:bg-green-600 transition duration-300">
                    Add Book
                </a>

                <a href="{{ route('books.index') }}"
                    class="btn btn-ghost btn-sm  hover:p-2 hover:rounded-2xl hover:text-white  hover:bg-green-600 transition duration-300">
                    View Books
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container flex-1 py-6">
        <!-- Success message -->
        @if(session('success'))
        <div class="alert alert-success shadow-lg mb-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4" />
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        </div>
        @endif

        <!-- Page specific content -->
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-white border-t mt-auto">
        <div class="container py-4 text-center text-sm text-gray-600">
            &copy; {{ date('Y') }} MyBooks. All rights reserved.
        </div>
    </footer>

</body>

</html>