@extends('layouts.app')

@section('title', 'Adicionar Tarefa')

@section('content')
    <div class="container mt-5">
      <h2>Atualizar Tarefa</h2>
      <hr>
      <form action="{{route('tarefas-update', ['id' => $tarefas->id])}}", method="POST">
        @csrf
        @method('put')
        <div class="form-group mt-3">
          <label for="">Nome:</label>
          <input type="text" class="form-control" name="nome" value="{{$tarefas->nome}}" placeholder="Nome da Tarefa...">
        </div>
        <div class="form-group mt-3">
          <label for="">Descrição:</label>
          <input type="text" class="form-control" name="descricao" value="{{$tarefas->descricao}}" placeholder="Descrição da Tarefa...">
        </div>
        <div class="form-group mt-3">
          <label for="escolhe">Status:</label>
          <select class="form-control" name="status" id="escolha">
            <option value="{{$tarefas->status}}">Em andamento</option>
            <option value="Em andamento">Em andamento</option>
            <option value="Não iniciada">Não iniciada</option>
            <option value="Concluída">Concluída</option>
          </select>
        </div>
        <div class="form-group mt-3">
          <input type="submit" class="btn btn-success" value="Atualizar" mt-5>
        </div>
      </form>

    </div>
@endsection