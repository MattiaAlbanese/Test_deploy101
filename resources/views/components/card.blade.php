<div class="card w-50">
    <div class="card-body">
        <h5 class="card-title">{{ $name }} {{$surname}}</h5>
        <p class="card-text">Età: {{$age}}</p>
        @if(Route::currentRouteName() == 'studenti')
            <a href="{{route('dettaglio.studente', ['id' => $id])}}" class="btn btn-primary">Vai al dettaglio</a>
        @else
            <a href="{{route('dettaglio.docente', ['id' => $id])}}" class="btn btn-success">Vai al dettaglio</a>
        @endif
    </div>
</div>