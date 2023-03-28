<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('category') }}
        </h2>
    </x-slot>

    <div class="flex flex-col md:flex-row items-center justify-center space-y-4 md:space-y-0 md:space-x-4">
        <a href="{{route('cats.create')}}" class="py-2 px-4 text-gray-900 font-medium rounded-lg hover:bg-gray-200">add cats</a>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($cats as $cat)
                    <div class="p-6 text-gray-900">
                        <a href="{{route('cats.show', ['cat' => $cat['id'] ])}}">{{ $cat->title }}</a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>