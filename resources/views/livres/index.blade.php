<!-- <script src="https://cdn.tailwindcss.com"></script> -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('index') }}
        </h2>
    </x-slot>
    <div class="flex flex-col md:flex-row items-center justify-center space-y-4 md:space-y-0 md:space-x-4">
        <a href="{{route('livres.create')}}" class="py-2 px-4 text-gray-900 font-medium rounded-lg hover:bg-gray-200">add Livres</a>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


                <div class="bg-gray-100">


                    <h1 class="text-3xl font-bold mb-5">Liste des Livres</h1>
                    @foreach ($livres as $livre)
                    <div class="grid grid-cols-3 gap-6">
                        <div class="bg-white shadow-md rounded-md p-4">
                            <a href="{{route('livres.show',$livre['id'])}}">
                                <img src="{{ asset('images/' . $livre->image) }}" alt="livre 1" class="mb-4">
                                <h2 class="text-lg font-bold mb-2">{{ $livre->title }}</h2>
                                <p class="text-gray-700 text-base">Prix: 20€</p>
                                <h2 class="text-lg font-bold mb-2">{{ $livre->category->title }}</h2>
                                
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>

            <!-- <div class="p-6 text-gray-900">
                        <a href="{{route('livres.show',$livre['id'])}}">{{ $livre->title }}</a>
                    </div> -->

        </div>
    </div>
    
</x-app-layout>