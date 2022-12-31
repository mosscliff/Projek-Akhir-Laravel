<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container mt-5">
        @if(session('status'))
        <div class="alert alert-success mt-5">
            {{ session('status') }}
        </div>
    @endif
    </div>
    <div class="container">

        <header class="row">
            @include('crud-rokok')
        </header>
        <header class="row">
            @include('crud-kendaraan')
        </header>
    </div>
</body>

    </div>
</body>
</x-app-layout>
