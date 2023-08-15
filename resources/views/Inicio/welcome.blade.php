<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/style.css', 'resources/js/app.js'])
    <title>Menu</title>
</head>

<body>

    <div class="header">
        <a href="{{ route('menu') }}">
            <img src="{{ Vite::asset('resources/img/Unifil.png') }}" alt="Logo">
        </a>
    </div>

    <div class="main-header">
        <h1>Início</h1>
    </div>

    <div class="container-open">
        <div class="main-container-open">
            <a href="{{route('salaIndex')}}">
                <button class="btn-open">Visualizar Salas/Laboratórios</button>
            </a>
            <a href="{{route('UCIndex')}}">
                <button class="btn-open">Visualizar Unidades Curriculares</button>
            </a>
            <a href="{{route('ensalamentoIndex')}}">
                <button class="btn-open">Visualizar Ensalamento</button>
            </a>
        </div>
    </div>
</body>

</html>
