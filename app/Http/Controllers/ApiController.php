<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;


class ApiController extends Controller
{

    public function getAll()
    {
        $tarefaBD = Tarefa::all();
        return response()->json(['tarefas' => $tarefaBD]);
    }

    public function getId($id)
    {
        if (Tarefa::where('id', $id)->exists()) {
            $tarefaBD = Tarefa::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($tarefaBD, 200);
        } else {
            return response()->json([
                "message" => "Tarefa não encontrada"
            ], 404);
        }
    }

    public function create(Request $request)
    {
        $tarefa = new Tarefa;
        $tarefa->nome = $request->nome;
        $tarefa->descricao = $request->descricao;
        $tarefa->status = $request->status;
        $tarefa->save();

        return response()->json([
            "message" => "Tarefa criada com sucesso!"
        ], 201);
    }

    public function update(Request $request, $id)
    {
        if (Tarefa::where('id', $id)->exists()) {
            $tarefa = Tarefa::find($id);
            $tarefa->nome = is_null($request->nome) ? $tarefa->nome : $request->nome;
            $tarefa->descricao = is_null($request->descricao) ? $tarefa->descricao : $request->descricao;
            $tarefa->status = is_null($request->status) ? $tarefa->status : $request->status;
            $tarefa->save();

            return response()->json([
                "message" => "Tarefa alterada com sucesso!."
            ], 201);
        } else {
            return response()->json([
                "message" => "Tarefa não encontrada."
            ], 404);
        }
    }

    public function destroy($id)
    {
        if (Tarefa::where('id', $id)->exists()) {
            $tarefa = Tarefa::find($id);
            $tarefa->delete();

            return response()->json([
                "message" => "Tarefa excluída"
            ], 202);
        } else {
            return response()->json([
                "message" => "Tarefa não encontrada."
            ], 404);
        }
    }
}
