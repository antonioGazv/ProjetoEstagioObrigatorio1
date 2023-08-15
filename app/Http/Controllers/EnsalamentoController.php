<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\APIEnsalamentoController;
use App\Models\Ensalamento;
use App\Models\SalaDeAula;
use App\Models\UC;
use Illuminate\Http\Request;

class EnsalamentoController extends Controller
{
    /**
     * 
     */
    public function gerar()
    {

        $controller = new APIEnsalamentoController;
        $ensalamento = json_decode($controller->gerar());
        // print_r($ensalamento);
        // die();

        return redirect('/ensalamento');
    }

    public function mostrarEnsalamento()
    {
        // $Ensalamentos = Ensalamento::with('UC', 'SalaDeAula')->get();
        // $UCs = UC::all();
        // $Salas = SalaDeAula::all();

        // return view('ensalamento.index', ['Ensalamentos' => $Ensalamentos, 'UCs' => $UCs, 'Salas' => $Salas]);

        $controller = new APIEnsalamentoController;
        $resultado = json_decode($controller->mostrarEnsalamento());

        // print_r($resultado);
        // die();

        return view('ensalamento.index', ['Ensalamentos' => $resultado->Ensalamentos, 'UCs' => $resultado->UCs, 'Salas' => $resultado->Salas]);
    }

    public function criar()
    {
        return view('ensalamento.create');
    }

    public function store(Request $request)
    {
        $controller = new APIEnsalamentoController;
        $ensalamento = json_decode($controller->store($request));

        return redirect('/ensalamento');

        // print_r($ensalamento);
        // die();

    }

    public function editar($id)
    {
        $ensalamento = Ensalamento::with('UC', 'SalaDeAula')->where('idEnsalamento', $id)->first();

        if (!empty($ensalamento)) {
            return view('ensalamento.edit', ['ensalamento' => $ensalamento]);
        } else {
            return redirect()->route('ensalamentoIndex');
        }
    }



    public function update(Request $request, $id)
    {
        $controller = new APIEnsalamentoController;
        $ensalamento = json_decode($controller->update($request, $id), true);
        Ensalamento::where('idEnsalamento', $id)->update($ensalamento);
        return redirect('/ensalamento');
    }

    public function destroy($id){
        Ensalamento::where('idEnsalamento', $id)->delete();
        return redirect()->route('ensalamentoIndex');
    }
}
