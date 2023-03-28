<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('create') }}
        </h2>
    </x-slot>

    <!-- <form class="w-full max-w-sm" action="{{route('livres.store')}}" method="post">
        @csrf
        <div class="flex items-center border-b border-teal-500 py-2">
            <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="livres" aria-label="Full name" name="title">
            @error('title')
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                {{$message}}
            </span>



            <!-- <div class="form-error">{{$message}}</div> -->
    @enderror
    <input type="file" name="image" class="appearance-none bg-transparent border-none w-full text-gray-700 ml-10 py-1 px-2 leading-tight focus:outline-none ">
    <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded ml-10" type="submit">
        ADD
    </button>
    <button class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded" type="button">
        Cancel
    </button>
    </div>
    </form> -->















    <form action="{{route('livres.store')}}" method="post" enctype="multipart/form-data" class="w-full max-w-sm mx-auto">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="name">
                Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter book name" name="title">
        </div>
        @error('title')
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
            {{$message}}
        </span>
        @enderror

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="description">
                description
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" type="text" placeholder="Enter book name" name="description">
        </div>
        @error('description')
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
            {{$message}}
        </span>
        @enderror

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="category">
                Category
            </label>
            <div class="relative">

                <select id="category" name="category" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">Select a category</option>
                    @forEach($cats as $cat)
                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                    @endforeach
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M15.293 8.293a1 1 0 00-1.414-1.414L10 12.586 6.121 8.707a1 1 0 00-1.414 1.414l4.95 4.95a1 1 0 001.414 0l4.95-4.95a1 1 0 000-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="image">
                Image
            </label>
            <input type="file" name="image" id="image" class="hidden">
            <div class="flex items-center justify-between">
                <label for="image" class="flex-1 cursor-pointer bg-white rounded-md font-medium py-2 px-4 border border-gray-300 shadow-sm text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Select Image
                </label>
                <span class="ml-3" id="image-name"></span>
            </div>
        </div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Add Book
        </button>
    </form>

</x-app-layout>