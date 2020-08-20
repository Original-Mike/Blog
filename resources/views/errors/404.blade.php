@extends('layouts.app')

@section('content')

    <div class="w-full max-w-xs mx-auto mb-12">
        <div class="bg-red-600">
            <p class="text-white p-20 text-center text-6xl">404</p>
        </div>
        <p class="py-5 text-center">Pagina niet gevonden</p>
        <div class="text-center">
            <a class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center" href="{{ route('index') }}">
                Terug naar Index
            </a>
        </div>
    </div>

@endsection
