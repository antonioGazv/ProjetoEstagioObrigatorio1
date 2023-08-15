<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\APIUCController;
use App\Models\UC;
use Illuminate\Http\Request;

class UCController extends Controller
{
    public function index()
    {
        $UCs = UC::all();
        return view('UC.index', ['UCs' => $UCs]);
    }

    public function create()
    {
        return view('UC.create');
    }

    public function store(Request $request)
    {
        UC::create([
            'NomeUC' => $request->input('NomeUC'),
            'TipoUC' => $request->input('TipoUC'),
            'CargaHoraria' => $request->input('CargaHoraria'),
            'qtdAlunos' => $request->input('qtdAlunos'),
        ]);
        return redirect()->route('UCIndex');
    }

    public function edit($id)
    {
        $UCs = UC::where('idUC', $id)->first();
        if (!empty($UCs)) {
            return view('UC.edit', ['UCs' => $UCs]);
        } else {
            return redirect()->route('UCIndex');
        }
    }

    public function update(Request $request, $id){
        $data =[
            'NomeUC' => $request->NomeUC,
            'TipoUC' => $request->TipoUC,
            'CargaHoraria' => $request->CargaHoraria,
            'qtdAlunos' => $request->qtdAlunos,
        ];
        UC::where('idUC', $id)->update($data);
        return redirect()->route('UCIndex');
    }

    public function destroy($id){
        UC::where('idUC', $id)->delete();
        return redirect()->route('UCIndex');
    }
}
