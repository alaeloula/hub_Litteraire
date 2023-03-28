<script src="https://cdn.tailwindcss.com/3.2.4"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('all user') }}
        </h2>
        
    </x-slot>
    

    <div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full text-left text-sm font-light">
            <thead class="border-b font-medium dark:border-neutral-500">
              <tr>
                <th scope="col" class="px-6 py-4">#</th>
                <th scope="col" class="px-6 py-4">title</th>
                <th scope="col" class="px-6 py-4">email</th>
                
              </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)

              <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                <td class="whitespace-nowrap px-6 py-4">{{$user->name}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{$user->email}}</td>
               
                

              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>














    
</x-app-layout>