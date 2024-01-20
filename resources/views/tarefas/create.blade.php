@extends('layouts.app')

@section('title', 'Adicionar Tarefa')

@section('content')
    <div class="container mt-5">
      <h2>Cadastre uma nova Tarefa</h2>
      <hr>
      <form action="{{route('tarefas-store')}}", method="POST">
        @csrf
        <div class="form-group mt-3">
          <label for="">Nome:</label>
          <input type="text" class="form-control" name="nome" placeholder="Nome da Tarefa...">
        </div>
        <div class="form-group mt-3">
          <label for="">Descrição:</label>
          <input type="text" class="form-control" name="descricao" placeholder="Descrição da Tarefa...">
        </div>
        <div class="form-group mt-3">
          <label for="escolhe">Status:</label>
          <select class="form-control" name="status" id="escolha">
            <option value="Pendente">Pendente</option>
            <option value="Concluída">Concluída</option>
            <option value="Cancelada">Cancelada</option>
          </select>
        </div>
        <div class="form-group mt-3">
          <input type="submit" class="btn btn-primary" value="Cadastrar" mt-5>
        </div>
      </form>

    </div>
@endsection