@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie o seu evento</h1>
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="image">Imagem da Coleção:</label>
      <input type="file" id="image" name="image" class="from-control-file" multiple required>
    </div>
    <div class="form-group">
      <label for="title">Titulo:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" required>
    </div>
    <div class="form-group">
      <label for="date">Data da Coleção:</label>
      <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <div class="form-group">
      <label for="title">Cidade:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" required>
    </div>
    <div class="form-group">
      <label for="title">Disponivel?</label>
      <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Link do vídeo do YouTube:</label>
      <input type="text" class="form-control" id="video_link" name="video_link" placeholder="Link do vídeo">
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
    </div>
    <div class="form-group">
      <label for="title">Tipo de Matérial:</label>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Fibra Sintética"> Fibra Sintética
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Corda Náutica"> Corda Náutica
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Fibra Junco"> Fibra Junco
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Vime Plastico"> Vime Plastico
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Palha Indiana"> Palha Indiana 
      </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form>
</div>

@endsection
