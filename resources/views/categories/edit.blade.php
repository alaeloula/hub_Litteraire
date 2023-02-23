<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('edit category') }}
        </h2>
    </x-slot>

    <form class="w-full max-w-sm" action="{{route('cats.update',['cat' =>$category->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="flex items-center border-b border-teal-500 py-2">
            <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="CATEGORY" aria-label="Full name" name="title" value="{{$category->title}}">
            @error('title')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
			{{$message}}
		</span>
            <!-- <div class="form-error">{{$message}}</div> -->
            @enderror
            <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
                ADD
            </button>
            <button class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded" type="button">
                Cancel
            </button>
        </div>
    </form>
</x-app-layout>