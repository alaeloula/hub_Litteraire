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
                        <a href="{{route('cats.edit',$category['id'])}}"><button class="btn btn-primary"> edit</button></a>
                        <form action="{{route('cats.destroy',$category['id'])}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit"> delete</button>
                    </form>
                    </div>
                

            </div>
        </div>
    </div>
</x-app-layout>