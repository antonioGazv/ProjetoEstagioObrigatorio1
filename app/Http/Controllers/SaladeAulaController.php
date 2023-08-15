<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\APISalaController;
use App\Models\SalaDeAula;
use Illuminate\Http\Request;

class SalaDeAulaController extends Controller
{
    public function index()
    {
        $Salas = SalaDeAula::all();
        return view('sala.index', ['Salas' => $Salas]);
    }

    public function create()
    {
        return view('sala.create');
    }

    public function store(Request $request)
    {
        SalaDeAula::create([
            'NomeSala' => $request->input('NomeSala'),
            'Capacidade' => $request->input('Capacidade'),
            'Categoria' => $request->input('Categoria'),
            'Disponivel' => $request->input('Disponivel'),
        ]);
        return redirect()->route('salaIndex');
    }

    public function edit($id)
    {
        $Salas = SalaDeAula::where('idSala', $id)->first();
        if (!empty($Salas)) {
            return view('sala.edit', ['Salas' => $Salas]);
        } else {
            return redirect()->route('salaIndex');
        }
    }

    public function update(Request $request, $id){
        $data =[
            'NomeSala' => $request->NomeSala,
            'Capacidade' => $request->Capacidade,
            'Categoria' => $request->Categoria,
            'Disponivel' => $request->Disponivel,
        ];
        SalaDeAula::where('idSala', $id)->update($data);
        return redirect()->route('salaIndex');
    }

    public function destroy($id){
        SalaDeAula::where('idSala', $id)->delete();
        return redirect()->route('salaIndex');
    }
}
