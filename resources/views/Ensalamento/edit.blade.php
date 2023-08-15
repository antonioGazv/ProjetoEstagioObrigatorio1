<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/style.css', 'resources/js/script.js'])
    <title>Ensalamento | Editar</title>
</head>
<body>
    <div class="header">
        <a href="{{ route('menu') }}">
            <img src="{{ Vite::asset('resources/img/Unifil.png') }}" alt="Logo">
        </a>
    </div>
    <h1>Editar Ensalamento</h1>
    <div class="container-edit-create">
        <form action="{{route('ensalamentoUpdate', ['id'=>$ensalamento->idEnsalamento]) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="">ID UC</label>
            <input type="text" name="idUC" value="{{ $ensalamento->uc->idUC }}" class="inp-create-user" autocomplete="off">
            <label for="">ID SALA</label>
            <input type="text" name="idSala" value="{{$ensalamento->saladeaula->idSala}}" class="inp-create-user" autocomplete="off">
            <button class="btn-create-user">Alterar Dados</button>
        </form>
    </div>
    <div class="back-to-menu">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
          </svg>
        <a href="{{ route('menu') }}" class="float">
            Inicio
        </a>
    </div>
</body>
</html>