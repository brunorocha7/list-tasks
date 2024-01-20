@extends('layouts.app')

@section('title', 'Adicionar Tarefa')

@section('content')
    <div class="container mt-5">
      <h2>Detalhes da Tarefa</h2>
      <hr>
        @method('put')
        <div class="form-group mt-3">
          <label for="">Nome:</label>
          <input type="text" class="form-control" name="nome" disabled value="{{$tarefas->nome}}" placeholder="Nome da Tarefa...">
        </div>
        <div class="form-group mt-3">
          <label for="">Descrição:</label>
          <input type="text" class="form-control" name="descricao" disabled value="{{$tarefas->descricao}}" placeholder="Descrição da Tarefa...">
        </div>
        <div class="form-group mt-3">
          <label for="escolhe">Status:</label>
          <select class="form-control" disabled name="status" id="escolha">
            <option value="{{$tarefas->status}}">Em andamento</option>
            <option value="Em andamento">Em andamento</option>
            <option value="Não iniciada">Não iniciada</option>
            <option value="Concluída">Concluída</option>
          </select>
        </div>
        <div class="form-group mt-3">
          <a href="{{route('tarefas-index')}}" class="btn btn-success"  mt-5>Voltar</a>
        </div>

    </div>
@endsection