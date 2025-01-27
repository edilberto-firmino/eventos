@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12" style="background-color: white;">
    <h1>Busque Móveis</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>

<div id="events-container" class="col-md-12">
    @if($search)
    <h2>Buscando por: {{ $search }}</h2>
    @else
    <h2>Catálogo</h2>
    <p class="subtitle">Nova Coleção</p>
    @endif
    <div id="cards-container" class="row d-flex justify-content-center g-3">
        @foreach($events as $event)
        <div class="col-md-4 col-lg-3"> <!-- Ajuste de largura do card conforme desejado -->
            <div class="card-body">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-fluid">
                <div class="card-body">
                    <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    @if(count($event->users) <= 1 )
                        <p class="card-participants"> {{ count($event->users) }} Orçamento</p>
                    @else
                        <p class="card-participants"> {{ count($event->users) }} Orçamentos</p>
                    @endif

                    <a href="/events/{{ $event->id }}" class="btn btn-primary">Saiba Mais</a>
                </div>
            </div>
        </div>
        @endforeach
        @if(count($events) == 0 && $search)
        <p>Não foi possível encontrar nenhum evento com {{ $search }}! <a href="/">Ver todos</a></p>
        @elseif(count($events) == 0)
        <p>Não há eventos disponíveis</p>
        @endif
    </div>
</div>


@endsection