<!-- <script src="https://cdn.tailwindcss.com"></script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('details book') }}
    </h2>
  </x-slot>
  
  
  <main class="py-6 px-4 sm:p-6 md:py-10 md:px-8">
  
      <h1> {{ $livre->category->title}} </h1>
    <div class="max-w-4xl mx-auto grid grid-cols-1 lg:max-w-5xl lg:gap-x-20 lg:grid-cols-2">
      <div class="relative p-3 col-start-1 row-start-1 flex flex-col-reverse rounded-lg bg-gradient-to-t from-black/75 via-black/0 sm:bg-none sm:row-start-2 sm:p-0 lg:row-start-1">
        <h1 class="mt-1 text-lg font-semibold text-white sm:text-slate-900 md:text-2xl dark:sm:text-white">{{ $livre->title }}</h1>
        <!-- <p class="text-sm leading-4 font-medium text-white sm:text-slate-500 dark:sm:text-slate-400">Entire house</p> -->
      </div>
      <div class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
        <img src="https://picsum.photos/200" alt="" class="w-full h-60 object-cover rounded-lg sm:h-52 sm:col-span-2 lg:col-span-full" loading="lazy">
      </div>

      <div class="mt-4 col-start-1 row-start-3 self-center sm:mt-0 sm:col-start-2 sm:row-start-2 sm:row-span-2 lg:mt-6 lg:col-start-1 lg:row-start-3 lg:row-end-4">
        <button type="button" value="{{$livre->id}}" id="favorie" class="bg-indigo-600 text-white text-sm leading-6 font-medium py-2 px-3 rounded-lg">favorie</button>
      </div>
      <p class="mt-4 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-6 lg:row-start-4 lg:col-span-1 dark:text-slate-400">
        {{$livre->description}}
      </p>

    </div>
  
  </main>

</x-app-layout>



<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
   $('#favorie').on('click', function(event) {
    alert(this.value)
    $.ajax({
    url: "{{ url('users/addFavorie') }}/" + this.value,
    type: 'GET',
    success: function(res) {
      swal("Good job!", "You clicked the button!", "success"); 
    }
  })
    })
</script>