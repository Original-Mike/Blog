@extends('layouts.app')

@section('content')

    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Posts Section -->
        <div class="w-3/4 flex flex-col items-center px-3 mx-auto">

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a href="#">
                    <img src="https://www.audi.nl/content/dam/nemo/models/a5/rs-5-sportback/my-2020/1920x1080-gallery/1920x1080-5104_3-4-Front.jpg?downsize=1920px:*" alt="Audi RS-5 Sportback 2020">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <p class="text-3xl font-bold pb-4">De Audi RS 5 Sportback 2020</p>
                    <p class="text-sm pb-3">
                        Door <a href="{{ url('https://www.original-mike.com/over') }}" class="font-semibold hover:text-gray-800">Mike Rahawarin</a>, 04-05-2020
                    </p>
                    <p class="pb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis porta dui. Ut eu iaculis massa. Sed ornare ligula lacus, quis iaculis dui porta volutpat. In sit amet posuere magna..</p>
                    <div class="float-right">
                        <a href="#" class="uppercase text-gray-800 hover:text-black float-right">Verder lezen <i class="far fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </article>

        </div>

        <!-- Sidebar Section -->
{{--        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">--}}

{{--            <div class="w-full bg-white shadow flex flex-col my-4 p-6">--}}
{{--                <p class="text-xl font-semibold pb-5">About Us</p>--}}
{{--                <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>--}}
{{--                <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">--}}
{{--                    Get to know us--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="w-full bg-white shadow flex flex-col my-4 p-6">--}}
{{--                <p class="text-xl font-semibold pb-5">Instagram</p>--}}
{{--                <div class="grid grid-cols-3 gap-3">--}}
{{--                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=1">--}}
{{--                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=2">--}}
{{--                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=3">--}}
{{--                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=4">--}}
{{--                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=5">--}}
{{--                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=6">--}}
{{--                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=7">--}}
{{--                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=8">--}}
{{--                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=9">--}}
{{--                </div>--}}
{{--                <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">--}}
{{--                    <i class="fab fa-instagram mr-2"></i> Follow @dgrzyb--}}
{{--                </a>--}}
{{--            </div>--}}

{{--        </aside>--}}

    </div>


@endsection
