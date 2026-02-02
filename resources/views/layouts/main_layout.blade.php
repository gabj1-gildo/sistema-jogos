<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PiraVôlei</title>

    {{-- Vite CSS & JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png"/>
</head>
<body class="d-flex flex-column min-vh-100">

    {{-- Conteúdo da página --}}
    @yield('content')

    {{-- Rodapé --}}
    <footer class="footer mt-auto py-4 bg-dark text-white shadow-lg">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-md-4 text-md-start mb-3 mb-md-0">
                    <span class="text-muted small">&copy; 2026 Sistema de Vôlei</span>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <p class="mb-0 fw-bold">
                        Desenvolvido por <span class="text-primary">Gildo Alves Batista Júnior</span>
                    </p>
                </div>
                {{-- Links opcionais --}}
                {{-- 
                <div class="col-md-4 text-md-end">
                    <a href="https://github.com/seu-usuario" target="_blank" class="text-white me-3 text-decoration-none">
                        <i class="bi bi-github"></i> GitHub
                    </a>
                    <a href="https://linkedin.com/in/seu-perfil" target="_blank" class="text-white text-decoration-none">
                        <i class="bi bi-linkedin"></i> LinkedIn
                    </a>
                </div> 
                --}}
            </div>
        </div>
    </footer>

</body>
</html>
