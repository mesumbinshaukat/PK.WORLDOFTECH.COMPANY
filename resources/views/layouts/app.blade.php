<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'World of Tech Pakistan')</title>
    <link rel="icon" type="image/png" href="{{ url('favicon.png') }}">
    
    <!-- Meta Tags -->
    @include('partials.seo-head')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        dark: {
                            950: '#020617',
                            900: '#0f172a',
                            800: '#1e293b',
                        },
                        neon: {
                            blue: '#3b82f6',
                            purple: '#8b5cf6',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        [x-cloak] { display: none !important; }
        .neon-border { transition: all 0.3s ease; }
        .neon-border:hover { box-shadow: 0 0 15px rgba(59, 130, 246, 0.5); border-color: #3b82f6; }
        .glass { background: rgba(15, 23, 42, 0.7); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.1); }
    </style>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-dark-950 text-gray-100 font-sans antialiased selection:bg-neon-blue selection:text-white" x-data="{ sidebarOpen: false }">

    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Mobile Sidebar -->
    @include('partials.sidebar')

    <!-- Main Content -->
    <main class="min-h-screen pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Scripts -->
    @stack('scripts')
</body>
</html>
