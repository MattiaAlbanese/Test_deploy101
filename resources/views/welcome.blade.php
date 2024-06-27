<x-layout>
    <x-slot name="titolo">
        Benvenuti
    </x-slot>
    <x-header>
        Benvenuti su Laravel
    </x-header>
    @if (session('emailSent'))
        <div class="alert alert-success">
            {{ session('emailSent') }}
        </div>
    @endif
    <div class="container my-5 min-vh-100">
        <div class="row justify-content-center">
            <div class="col-12">
                <img src="/media/venezia.jpg" alt="foto di venezia" class="img-fluid">
            </div>
        </div>
    </div>
</x-layout>