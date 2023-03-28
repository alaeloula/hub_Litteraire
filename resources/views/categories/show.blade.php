<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('show category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">
                    <a href="">{{ $category->title }}</a>
                    <div class="flex gap-4">

                    <form action="{{route('cats.destroy',$category['id'])}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="bg-red-600 px-3 py-2 rounded" type="submit"> delete</button>
                    </form>
                    <a href="{{route('cats.edit',$category['id'])}}">
                        <button class="bg-amber-400 px-3 py-2 rounded"> edit <i class="fa-solid fa-trash"></i></button>
                    </a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>