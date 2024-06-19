<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Valkyrie - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="icon" href="assets/img/logo.png" type="image/png">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .floating {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    @yield('content')
    
    <script>
        const darkMode = localStorage.getItem('darkMode');

        if (darkMode === 'enabled') {
            document.documentElement.classList.add('dark');
        }

        const checkbox = document.querySelector('#toggle-mode');
        checkbox.addEventListener('click', function() {
            if (checkbox.checked) {
                document.documentElement.classList.add('dark');
                localStorage.setItem('darkMode', 'enabled');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.removeItem('darkMode');
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://unpkg.com/clipboard@2/dist/clipboard.min.js"></script>
    <script src="assets/js/canvas.js"></script>
    <script src="assets/js/clipboard.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>
