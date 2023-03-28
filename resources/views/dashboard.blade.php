<!-- <script src="https://cdn.tailwindcss.com"></script> -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    @if (Auth::user()->Roles->isNotEmpty() && Auth::user()->Roles->first()->name =='admin')



    <div class="flex flex-col md:flex-row items-center justify-center space-y-4 md:space-y-0 md:space-x-4">
        <a href="{{route('livres.index')}}" class="py-2 px-4 text-gray-900 font-medium rounded-lg hover:bg-gray-200">Livres</a>
        <a href="{{route('cats.index')}}" class="py-2 px-4 text-gray-900 font-medium rounded-lg hover:bg-gray-200">Catégories</a>
        <a href="{{route('gestion')}}" class="py-2 px-4 text-gray-900 font-medium rounded-lg hover:bg-gray-200">Utilisateurs</a>
    </div>

    @else

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="max-w-xl mx-auto">
            <h1 class="text-4xl sm:text-5xl font-bold leading-tight mb-8">Welcome to my site</h1>
            <p class="text-lg mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vel nibh euismod, viverra magna id, venenatis enim.</p>
            <a href="#" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Get started</a>
        </div>
    </main>
    <footer class="bg-gray-800 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-wrap justify-between">
            <div class="w-full sm:w-1/2 lg:w-1/4 mb-8">
                <h2 class="text-lg font-bold text-white mb-4">About</h2>
                <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vel nibh euismod, viverra magna id, venenatis enim.</p>
            </div>
            <div class="w-full sm:w-1/2 lg:w-1/4 mb-8">
                <h2 class="text-lg font-bold text-white mb-4">Links</h2>
                <ul class="list-none">
                    <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">About</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                </ul>
            </div>
            <div class="w-full sm:w-1/2 lg:w-1/4 mb-8">
                <h2 class="text-lg font-bold text-white mb-4">Social</h2>
                <ul class="list-none">
                    <li><a href="#" class="text-gray-400 hover:text-white">Twitter</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Facebook</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Instagram</a></li>
                </ul>
            </div>
            <div class="w-full sm:w-1/2 lg:w-1/4 mb-8">
                <h2 class="text-lg font-bold text-white mb-4">Subscribe</h2>
                <form action="#" method="POST">
                    <div class="flex items-center">
                        <input type="email" name="email" id="email" class="bg-gray-900 rounded-l py-2 px-3 text-gray-300 w-full" placeholder="Your email address">
                        <button type="submit" class="bg-blue-600 rounded-r py-2 px-4 text-white font-bold hover:bg-blue-700">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-gray-400 mt-8">
            &copy; 2023 My Site. All rights reserved.
        </div>
    </footer>
    @endif


</x-app-layout>