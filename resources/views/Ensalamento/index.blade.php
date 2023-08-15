<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/style.css', 'resources/js/script.js'])
    <title>Ensalamento</title>
</head>

<body>
    <div class="header">
        <a href="{{ route('menu') }}">
            <img src="{{ Vite::asset('resources/img/Unifil.png') }}" alt="Logo">
        </a>

    </div>

    <div class="main-header">
        <h1>Ensalamento</h1>
        <button class="start-ensalamento" id="btn-gerar-ensalamento">Gerar</button>
    </div>

    <div class="content-alert-box-ensalamento" id="alert-box">
        <div class="main-content-alert-box">
            <h3>Gostaria realmente de gerar um Ensalamento?</h3>
            <div class="alert-box-btn">
                <a href="{{ route('ensalamentoGerar') }}">
                    <button>Sim</button>
                </a>
                <a href="{{ route('ensalamentoIndex') }}">
                    <button>Não</button>
                </a>
            </div>
        </div>
    </div>

    <div class="container-index-ensalamento">
        @foreach ($Ensalamentos as $Ensalamento)
            <div class="content-ensalamento">
                <div class="content-header">
                    <h3>{{ $Ensalamento->sala_de_aula->NomeSala }}</h3>
                </div>
                <div class="content-info">
                    <h3>{{ $Ensalamento->u_c->NomeUC }}</h3>
                    <h3>19:00 - 20:30</h3>
                    <div class="content-more-info">
                        <p>Professor</p>
                        <p>Quantidade de Alunos: {{ $Ensalamento->u_c->qtdAlunos }}</p>
                        <p>Capacidade da Sala: {{ $Ensalamento->sala_de_aula->Capacidade }}</p>
                    </div>
                    <div class="content-btn">
                        <a href="{{ route('ensalamentoEdit', ['id' => $Ensalamento->idEnsalamento]) }}">
                            <button id="pen-ensalamento">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                    <path d="M13.5 6.5l4 4"></path>
                                </svg>
                            </button>
                        </a>
                        <button class="more-info-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" class="arrow-down" width="32" height="32"
                                viewBox="0 0 1024 1024">
                                <path fill="currentColor"
                                    d="M831.872 340.864L512 652.672L192.128 340.864a30.592 30.592 0 0 0-42.752 0a29.12 29.12 0 0 0 0 41.6L489.664 714.24a32 32 0 0 0 44.672 0l340.288-331.712a29.12 29.12 0 0 0 0-41.728a30.592 30.592 0 0 0-42.752 0z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class='arrow-up'
                                viewBox="0 0 1024 1024">
                                <path fill="currentColor"
                                    d="m488.832 344.32l-339.84 356.672a32 32 0 0 0 0 44.16l.384.384a29.44 29.44 0 0 0 42.688 0l320-335.872l319.872 335.872a29.44 29.44 0 0 0 42.688 0l.384-.384a32 32 0 0 0 0-44.16L535.168 344.32a32 32 0 0 0-46.336 0z" />
                            </svg>
                        </button>
                        <button id="trash-ensalamento">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash-filled"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M20 6a1 1 0 0 1 .117 1.993l-.117 .007h-.081l-.919 11a3 3 0 0 1 -2.824 2.995l-.176 .005h-8c-1.598 0 -2.904 -1.249 -2.992 -2.75l-.005 -.167l-.923 -11.083h-.08a1 1 0 0 1 -.117 -1.993l.117 -.007h16z"
                                    stroke-width="0" fill="currentColor"></path>
                                <path
                                    d="M14 2a2 2 0 0 1 2 2a1 1 0 0 1 -1.993 .117l-.007 -.117h-4l-.007 .117a1 1 0 0 1 -1.993 -.117a2 2 0 0 1 1.85 -1.995l.15 -.005h4z"
                                    stroke-width="0" fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="content-alert-box" id="alert-box">
                <div class="main-content-alert-box">
                    <h3>Gostaria realmente de excluir?</h3>
                    <div class="alert-box-btn">
                        <form action="{{ route('ensalamentoDestroy', ['id' => $Ensalamento->idEnsalamento]) }}"
                            method="POST">
                            @csrf
                            @method('delete')
                            <button>Sim</button>
                        </form>
                        <a href="{{ route('ensalamentoIndex') }}">
                            <button>Não</button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div>
        <a href="{{ route('ensalamentoCreate') }}">
            <button id="bt-create">Criar</button>
        </a>
    </div>

    <div class="back-to-menu">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="44" height="44"
            viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
        </svg>
        <a href="{{ route('menu') }}" class="float"></a>
    </div>

    @foreach ($Ensalamentos as $Ensalamento)
        <div class="content-alert-box" id="alert-box">
            <div class="main-content-alert-box">
                <h3>Gostaria realmente de excluir?</h3>
                <div class="alert-box-btn">
                    <form action="{{ route('ensalamentoDestroy', ['id' => $Ensalamento->idEnsalamento]) }}"
                        method="POST">
                        @csrf
                        @method('delete')
                        <button>Sim</button>
                    </form>
                    <a href="{{ route('ensalamentoIndex') }}">
                        <button>Não</button>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</body>

</html>
