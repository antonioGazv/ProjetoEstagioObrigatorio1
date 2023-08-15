<?xml version="1.0" standalone="no"?>
<!DOCTYPE html svg PUBLIC "-//W3C//DTD SVG 20010904//EN">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('style\UsuarioStyle/css/styleCreateUsuario.css') }}" >
    <title>Usuario / Criar</title>
</head>

<body>
    <div class="header">
        <img src="{{ asset('img/Unifil.png') }}" alt="Logo">
    </div>
    <h1>Registrar Usuario</h1>
    <div class="container">
        <form action="{{ route('userStore') }}" method="POST">
            @csrf
            <label for="">Nome Usuario</label>
            <input type="text" name="NomeUsuario" class="inp-create-user" autocomplete="off">
            <label for="">CPF Usuario</label>
            <input type="number" name="CPF" class="inp-create-user">
            <label for="">Matricula Usuario</label>
            <input type="number" name="Matricula" class="inp-create-user">
            <button class="btn-create-user">Enviar Dados</button>
        </form>
    </div>
</body>

</html>
