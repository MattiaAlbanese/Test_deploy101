<x-layout>
    <x-slot name="titolo">
        Studenti
    </x-slot>
    <x-header>
        Chi siamo - Studenti
    </x-header>
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($studenti as $studente)
            <div class="col-12 col-md-3">
                <x-card
                    id="{{$studente['id']}}"
                    name="{{$studente['name']}}"
                    surname="{{$studente['surname']}}"
                    age="{{$studente['age']}}"
                />
            </div>
            @endforeach
        </div>
    </div>
</x-layout>