<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>
<body>
    <header>
        <h1>Product Management System</h1>
        <nav>
            <a href="{{ url('/products') }}">Home</a>
            <a href="{{ url('/products/create') }}">Add Product</a>
        </nav>
        <hr>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <hr>
        <p>&copy; {{ date('Y') }} Product Management System</p>
    </footer>
</body>
</html>
