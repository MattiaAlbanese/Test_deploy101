<x-layout>

    <x-slot name="titolo">
        Dettaglio
    </x-slot>
    <x-header>
        {{$studente['name']}}
    </x-header>
    
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h5>Nome studente: {{$studente['name']}} {{$studente['surname']}}</h5>
                <p>Età: {{$studente['age']}}</p>
                <p>La materia che studia è: {{$studente['subject']}}</p>
            </div>
        </div>
    </div>

</x-layout>