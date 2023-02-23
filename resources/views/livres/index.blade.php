<!-- <script src="https://cdn.tailwindcss.com"></script> -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('index') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($livres as $livre)
                    <div class="p-6 text-gray-900">
                        <a href="{{route('livres.show',$livre['id'])}}">{{ $livre->title }}</a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>