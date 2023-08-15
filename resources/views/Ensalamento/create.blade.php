<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ensalamento | Criar</title>
</head>
<body>
    <div class="header">
        <a href="{{ route('menu') }}">
            <img src="{{ Vite::asset('resources/img/Unifil.png') }}" alt="Logo">
        </a>
    </div>
    <h1>Criar Ensalamento</h1>
    <div class="container">
        <form action="{{ route('ensalamentoStore') }}" method="POST">
            @csrf
            <label for="">Id da UC</label>
            <input type="text" name="idUC" class="inp-create-user" autocomplete="off">
            <label for="">Id da Sala</label>
            <input type="text" name="idSala" class="inp-create-user" autocomplete="off">
            <button class="btn-create-user">Enviar Dados</button>
        </form>
    </div>
    <div class="back-to-menu">
        <a href="{{ route('menu') }}" class="float">
            Inicio
        </a>
    </div>
</body>
</html>