<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Ensalamento;
use App\Models\SalaDeAula;
use App\Models\UC;
use Illuminate\Http\Request;

class APIEnsalamentoController extends Controller
{
    public function gerar()
    {
        Ensalamento::truncate();

        $maxRetries = 10;

        $idUCUsados = [];
        $idSalasUsados = [];

        for ($i = 0; $i < 10; $i++) {
            $retryCount = 0;
            $sala = SalaDeAula::whereNotIn('idSala', $idSalasUsados)->inRandomOrder()->first();
            $uc = UC::whereNotIn('idUC', $idUCUsados)->inRandomOrder()->first();

            while ($uc->qtdAlunos > $sala->Capacidade && $retryCount < $maxRetries) {
                $sala = SalaDeAula::whereNotIn('idSala', $idSalasUsados)->inRandomOrder()->first();
                $retryCount++;
                if ($retryCount == 10) {
                    $sala = SalaDeAula::whereNotIn('idSala', $idSalasUsados)->orderBy('Capacidade', 'desc')->first();
                }
            }

            $ensalamento = new Ensalamento();
            $ensalamento->idSala = $sala->idSala;
            $ensalamento->idUC = $uc->idUC;
            $ensalamento->save();

            $idUCUsados[] = $uc->idUC;
            $idSalasUsados[] = $sala->idSala;
        }
        return json_encode($ensalamento);
    }

    public function mostrarEnsalamento()
    {
        $Ensalamentos = Ensalamento::with('UC', 'SalaDeAula')->get();
        $UCs = UC::all();
        $Salas = SalaDeAula::all();

        return json_encode(['Ensalamentos' => $Ensalamentos, 'UCs' => $UCs, 'Salas' => $Salas]);
    }

    public function store(Request $request)
    {
        $ensalamento = Ensalamento::create([
            'idUC' => $request->input('idUC'),
            'idSala' => $request->input('idSala'),
        ]);
        return json_encode($ensalamento);
    }

    public function editar($id)
    {
        $Ensalamentos = Ensalamento::with('UC', 'SalaDeAula')->get();
        $UCs = UC::all();
        $Salas = SalaDeAula::all();

        $ensalamento = Ensalamento::where('idEnsalamento', $id)->first();
        if (!empty($ensalamento)) {
            return json_encode(['Ensalamentos' => $Ensalamentos, 'UCs' => $UCs, 'Salas' => $Salas]);
        } else {
            return redirect()->route('ensalamentoIndex');
        }
    }


    public function update(Request $request, $id)
    {
        $data = [
            'idUC' => $request->idUC,
            'idSala' => $request->idSala,
        ];
        return json_encode($data);
    }
}
