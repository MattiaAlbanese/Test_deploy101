<x-layout>
    <x-slot name="titolo">
        Docenti
    </x-slot>
    <x-header>
        Chi siamo - Docenti
    </x-header>
    <div class="container my-5">
        <div class="row">
            @foreach ($insegnanti as $insegnante)
                <div class="col-12 col-md-3">
                    <x-card
                        id="{{$insegnante['id']}}"
                        name="{{$insegnante['name']}}"
                        surname="{{$insegnante['surname']}}"
                        age="{{$insegnante['age']}}"
                    />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>