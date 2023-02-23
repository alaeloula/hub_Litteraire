<!-- <script src="https://cdn.tailwindcss.com"></script> -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('all user') }}
        </h2>
    </x-slot>
    <table class="table-auto">
        <tr>
            <th>name</th>
            <th>email</th>
            <th>action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><a href="">supp</a></td>
        </tr>
        @endforeach

    </table>
    <!-- {{dd($users)}} -->
</x-app-layout>