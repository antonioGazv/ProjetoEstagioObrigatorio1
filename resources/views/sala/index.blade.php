<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/style.css', 'resources/js/app.js'])
    <title>Sala | Dados</title>
</head>

<body>
    <div class="header">
        <a href="{{ route('menu') }}">
            <img src="{{ Vite::asset('resources/img/Unifil.png') }}" alt="Logo">
        </a>
    </div>

    <div class="main-header">
        <h1>Salas de Aula</h1>
    </div>
    <div class="container-index">
        <table class="table-Sala">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">CAPACIDADE</th>
                    <th scope="col">CATEGORIA</th>
                    <th scope="col">DISPONIBILIDADE</th>
                    <th scope="col">☺</th>
                    <th scope="col">☻</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Salas as $Sala)
                    <tr class="tr-data">
                        <td>{{ $Sala->idSala }}</td>
                        <td>{{ $Sala->NomeSala }}</td>
                        <td>{{ $Sala->Capacidade }}</td>
                        <td>{{ $Sala->Categoria }}</td>
                        <td>{{ $Sala->Disponivel ? 'Disponível' : 'Ocupado' }}</td>

                        <td>
                            <a class='btn btn-primary' href="{{ route('salaEdit', ['id' => $Sala->idSala]) }}">
                                <svg id='pen'xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                    <path
                                        d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                </svg>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('salaDestroy', ['id' => $Sala->idSala]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="icons">
                                    <svg id="trash" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
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
    <div>
        <a href="{{ route('salaCreate') }}">
            <button id="bt-create">Criar</button>
        </a>
    </div>
    <div class="back-to-menu">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home back-menu" width="44" height="44"
            viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
        </svg>
        <a href="{{ route('menu') }}" class="float">
        </a>
    </div>

</body>

</html>
