<x-layout>

    <x-slot name="titolo">
        Dettaglio Docente
    </x-slot>
    <x-header>
        {{$insegnante['name']}}
    </x-header>
    
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h5>Nome insegnante: {{$insegnante['name']}} {{$insegnante['surname']}}</h5>
                <p>Età: {{$insegnante['age']}}</p>
                <p>La materia che insegna è: {{$insegnante['subject']}}</p>
            </div>
        </div>
    </div>

</x-layout>