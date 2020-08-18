@extends('layouts.app')

@section('content')

    <div class="w-full max-w-2xl mx-auto">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-16 mb-4" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
            @CSRF
            @method('post')
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Naam
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Beschrijving
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="description"></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Body
                </label>
                <textarea id="editor" name="body" rows="40"></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Thumbnail
                </label>
                <input type="file" name="file" class="@error('file') is-invalid @enderror">
            </div>
            <div class="mb-4 float-right">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Plaatsen
                </button>
            </div>
        </form>
    </div>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endsection
