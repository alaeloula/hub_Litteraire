<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('show category') }}
        </h2>
    </x-slot>


    <div class="bg-gray-100">
        <div class="container mx-auto py-10">
            <h1 class="text-3xl font-bold mb-5">Liste des Livres</h1>
            <div class="grid grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-md p-4">
                    <img src="https://picsum.photos/200" alt="livre 1" class="mb-4">
                    <h2 class="text-lg font-bold mb-2">{{ $livre->title }}</h2>
                    <p class="text-gray-700 text-base">Prix: 20€</p>
                    <a href="{{route('livres.edit',$livre['id'])}}"> <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">edit</button></a>
                    <form action="{{route('livres.destroy',$livre['id'])}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4" type="submit"> archiver</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>