<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TarefasController extends Controller
{

    public function index(){
        $data = Http::get('http://127.0.0.1:8001/api/tarefas')->object();
        return view("tarefas.index", ['tarefas' => $data->tarefas]);
    }

    public function details($id) {
        $data = Http::get('http://127.0.0.1:8001/api/tarefas/'.$id)->object();
        return view('tarefas.details', ['tarefas'=> $data[0]]);        
    }

    public function create() {
        return view('tarefas.create');
    }

    public function store(Request $request) {
        Http::post('http://127.0.0.1:8001/api/tarefas/', [
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'status' => $request->status,
        ]);

        return redirect()->route('tarefas-index');
    }

    public function edit($id) {
        $data = Http::get('http://127.0.0.1:8001/api/tarefas/'.$id)->object();
        return view('tarefas.edit', ['tarefas'=> $data[0]]);
    }

    public function update(Request $request, $id) {
        Http::put('http://127.0.0.1:8001/api/tarefas/'.$id, [
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'status' => $request->status,
        ]);

        return redirect()->route('tarefas-index');
    }

    public function destroy($id) {
        Http::delete('http://127.0.0.1:8001/api/tarefas/'.$id);
        return redirect()->route('tarefas-index');
    }
}
