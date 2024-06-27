<x-layout>
    <x-slot name="titolo">
        Contatti
    </x-slot>
    <x-header>
        Contatti
    </x-header>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 shadow" method="POST" action="{{route('invio.contatto')}}">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome dell'utente</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email dell'utente</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="info" class="form-label">Informazioni</label>
                        <textarea class="form-control" name="info" id="info"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Contattaci</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>