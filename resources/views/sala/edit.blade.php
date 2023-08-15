<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/style.css', 'resources/js/app.js'])
    <title>Sala | Editar</title>
</head>

<body>
    <div class="header">
        <a href="{{ route('menu') }}">
            <img src="{{ Vite::asset('resources/img/Unifil.png') }}" alt="Logo">
        </a>
    </div>

    <div class="main-header">
        <h1>Editar Sala</h1>
        <a href="{{ route('salaIndex')}}">
            <button class="btn-comeback">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1"></path>
                 </svg>
            </button>
        </a>
    </div>
    
    <div class="container-edit-create">
        <form action="{{ route('salaUpdate', ['id' => $Salas->idSala]) }}" method="POST" class="form-edit-create">
            @csrf
            @method('PUT')
            <label for="">Nome da Sala</label>
            <input type="text" name="NomeSala" value="{{ $Salas->NomeSala }}" class="inp-create-user" autocomplete="off">
            <label for="">Capacidade</label>
            <input type="text" name="Capacidade" value="{{ $Salas->Capacidade }}" class="inp-create-user" autocomplete="off">
            <label for="">Categoria</label>
            <input type="text" name="Categoria" value="{{ $Salas->Categoria }}" class="inp-create-user">
            <label for="">Disponibilidade</label>
            <select name="Disponivel" class="select-edit-create">
                <option value="{{ $Salas->Disponivel }}" selected hidden>{{ $Salas->Disponivel }}</option>
                <option value="1">Disponível</option>
                <option value="0">Ocupado</option>
            </select>
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
