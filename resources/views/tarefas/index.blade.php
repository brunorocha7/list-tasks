@extends('layouts.app')

@section('title', 'Listagem Geral')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-10">
                <h2>Tarefas</h2>
            </div>
            <div class="col-sm-2">
                <a href="{{route('tarefas-create')}}" class="btn btn-success">Nova Tarefa</a>
            </div>
            <hr>
            <table class="table table-striped">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Título</th>
                      <th scope="col">Descrição</th>
                      <th scope="col">Status</th>
                      <th scope="col">Ação</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($tarefas as $tf)
                    <tr>
                      <th>{{$tf->id}}</th>
                      <td>{{$tf->nome}}</td>
                      <td>{{$tf->descricao}}</td>
                      <td>{{$tf->status}}</td>
                      <td>
                        <div class="d-flex">
                            <a href="{{route('tarefas-details', ['id' => $tf->id])}}" class="btn btn-info me-3">
                                <i class="bi bi-search"></i>
                            </a>
                            <a href="{{route('tarefas-edit', ['id' => $tf->id])}}" class="btn btn-warning me-3">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{route('tarefas-destroy', ['id' => $tf->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
            </table>

        </div>
    </div>
    
@endsection