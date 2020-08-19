@extends('layouts.app')
@section('name', "> $post->name")
@section('content')

    <div class="container mx-auto flex flex-wrap py-6">
        <div class="w-3/4 flex flex-col items-center px-3 mx-auto">
            <a href="{{ route('index') }}" class="mr-auto uppercase text-gray-800 hover:text-black"><i class="far fa-long-arrow-alt-left"></i> Terug</a>
            <div class="flex flex-col shadow my-4">
                <img src="{{ url('/storage/thumbnails') }}/{{ $post->thumbnail }}" alt="Audi RS-5 Sportback 2020">
                <div class="bg-white flex flex-col justify-start p-6">
                    <p class="text-3xl font-bold pb-4">{{ $post->name }}</p>
                    <p class="text-sm pb-3">
                        Door <a href="{{ url('https://www.original-mike.com/over') }}" class="font-semibold hover:text-gray-800">{{ $post->user->name }}</a>,
                        {{ $post->created_at->format('m-d-Y H:i') }}
                    </p>
                    <p class="pb-6">{!! $post->body !!}</p>
                </div>
            </div>
        </div>
    </div>


@endsection
