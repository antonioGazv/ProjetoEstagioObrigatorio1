<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style\UsuarioStyle/css/styleIndexUsuario.css') }}">
    <title>Usuario / Dados</title>
</head>

<body>
    <div class="header">
        <img src="{{ asset('img/Unifil.png') }}" alt="Logo">
    </div>

    <h1>Dados dos Usuarios</h1>
    <div class="container">
        <table class="table-user">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">CPF</th>
                    <th scope="col">NOME</th>
                    <th scope="col">MATRICULA</th>
                    <th scope="col">☺</th>
                    <th scope="col">☻</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr class="tr-data">
                        <td>{{ $usuario->idUsuario }}</td>
                        <td>{{ $usuario->CPF }}</td>
                        <td>{{ $usuario->NomeUsuario }}</td>
                        <td>{{ $usuario->Matricula }}</td>
                        <td><a class='btn btn-primary' href="{{ route('userEdit', ['id' => $usuario->idUsuario]) }}">
                                <svg id='pen'xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                    <path
                                        d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                </svg>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('userDestroy', ['id' => $usuario->idUsuario]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="icons"><svg id="trash"
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div >
        <a href="{{ route('userCreate') }}">
            <button id="bt-create">Criar</button>
        </a>
    </div>
</body>

</html>
