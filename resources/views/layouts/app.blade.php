<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <script src="https://kit.fontawesome.com/bc5ce4f054.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1F2937', 
                        accent: '#4F46E5',
                        textPrimary: '#FFFFFF',
                    },
                    fontFamily: {
                        montserrat: ['Montserrat', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 font-montserrat">

<!-- Header -->
<header class="bg-primary text-textPrimary py-5">
    <div class="text-center">
        <h1 class="text-3xl font-bold tracking-tight sm:text-4xl">
            Product Management CRUD
        </h1>
    </div>
    
    <form class="flex justify-center mt-5" method="GET" action="{{ url('/products') }}">
        <input 
            type="text" 
            name="search" 
            value="{{ request('search') }}" 
            class="w-64 sm:w-80 md:w-96 py-2 px-3 rounded-l-md text-gray-700 placeholder-gray-400 focus:ring focus:ring-accent focus:outline-none"
            placeholder="Search Products">
        <button 
            type="submit" 
            class="bg-accent text-white px-4 py-2 rounded-r-md font-semibold hover:bg-indigo-600">
            Search
        </button>
    </form>
    <nav class="flex justify-center mt-5">
        <a href="{{ url('/products') }}" class="text-sm font-medium px-4 py-2 rounded-md bg-accent text-white hover:bg-indigo-600 mx-2">
            Home
        </a>
        <a href="{{ url('/products/create') }}" class="text-sm font-medium px-4 py-2 rounded-md bg-accent text-white hover:bg-indigo-600 mx-2">
            Add Product
        </a>
    </nav>
</header>

<!-- Main -->
<main class="p-5">
    @yield('content')
</main>

<!-- Footer -->
<footer class="bg-gray-800 text-textPrimary py-3 mt-10">
    <p class="text-center text-sm">
        &copy; {{ date('Y') }} Product Management Crud By Habibur Rahman Romel | All Rights Reserved
    </p>
</footer>
</body>
</html>
