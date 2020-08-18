@extends('layouts.app')

@section('content')

    <div class="container mx-auto flex flex-wrap py-6">
        <div class="w-3/4 flex flex-col items-center px-3 mx-auto">
            <div class="flex flex-col shadow my-4">
                <img src="https://www.audi.nl/content/dam/nemo/models/a5/rs-5-sportback/my-2020/1920x1080-gallery/1920x1080-5104_3-4-Front.jpg?downsize=1920px:*" alt="Audi RS-5 Sportback 2020">
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
            </div>
        </div>
    </div>


@endsection
