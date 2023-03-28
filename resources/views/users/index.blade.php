<!-- <script src="https://cdn.tailwindcss.com"></script> -->
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('index') }}
    </h2>

  </x-slot>

  <div class="flex justify-center mt-10">
    <div class="mb-3 xl:w-96 mt-10">
      <input type="text" class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out focus:border-primary-600 focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200" id="Search" placeholder="Type query" />
    </div>
  </div>

  <div id="productsList">
    @foreach ($livres as $livre)
    <main class="py-6 px-4 sm:p-6 md:py-10 md:px-8">

      <h1> {{ $livre->category->title}} </h1>
      <div class="max-w-4xl mx-auto grid grid-cols-1 lg:max-w-5xl lg:gap-x-20 lg:grid-cols-2">
        <div class="relative p-3 col-start-1 row-start-1 flex flex-col-reverse rounded-lg bg-gradient-to-t from-black/75 via-black/0 sm:bg-none sm:row-start-2 sm:p-0 lg:row-start-1">
          <h1 class="mt-1 text-lg font-semibold text-white sm:text-slate-900 md:text-2xl dark:sm:text-white">{{ $livre->title }}</h1>
          <!-- <p class="text-sm leading-4 font-medium text-white sm:text-slate-500 dark:sm:text-slate-400">Entire house</p> -->
        </div>
        <div class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
          <img src="https://picsum.photos/200" alt="" class="w-full h-60 object-cover rounded-lg sm:h-52 sm:col-span-2 lg:col-span-full" loading="lazy">
          @if($livre->is_liked)
          <svg fill="red" height="50px" width="50px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 471.701 471.701" xml:space="preserve">
            <g>
              <path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
		c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
		l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
		C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
		s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
		c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
		C444.801,187.101,434.001,213.101,414.401,232.701z" />
            </g>
          </svg>

          @else
          <button type="button" class="like" value="{{$livre['id']}}">
            <!-- <a href="{{route('users/like',$livre['id'])}}"> -->
            <svg fill="#000000" height="50px" width="50px" class="{{$livre['id']}}" version="1.1" id="Capa_12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 471.701 471.701" xml:space="preserve">
              <g>
                <path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
		c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
		l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
		C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
		s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
		c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
		C444.801,187.101,434.001,213.101,414.401,232.701z" />
              </g>
            </svg>
          </button>
          <!-- </a> -->
          @endif
        </div>


        <p class="mt-4 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-6 lg:row-start-4 lg:col-span-1 dark:text-slate-400">
          {{$livre->description}}
        </p>
      </div>
      <a href="{{route('users/show',$livre['id'])}}">
        <div class="mt-4 col-start-1 row-start-3 self-center sm:mt-0 sm:col-start-2 sm:row-start-2 sm:row-span-2 lg:mt-6 lg:col-start-1 lg:row-start-3 lg:row-end-4">
          <button type="button" class="bg-indigo-600 text-white text-sm leading-6 font-medium py-2 px-3 rounded-lg">details</button>
        </div>
      </a>
    </main>
    @endforeach
  </div>

</x-app-layout>


<script>
  let likes = document.querySelectorAll('.like')
  likes.forEach(function(elm, index) {
    elm.addEventListener('click', function() {
      let likeBtn = this;
      $.ajax({
        url: 'users/like/' + this.value,
        type: 'GET',
        success: function(res) {
          var svg = likeBtn.querySelector('svg');
          var path = svg.querySelector('path');
          path.setAttribute('fill', 'red');
          // elm.classList.add('bg-red-900')

          // let btn = $('.' + this.value);
          // btn.setAttribute('fill', 'RED')
          //  document.getElementById(id).innerHTML = Number(document.getElementById(id).innerHTML) +1;        
        }
      })
    });
  });

  // $('.like').on('click', function(event) {
  //   // const id = "groupe-" + this.value;
  //   alert(this.value)
  //   console.log(this.value)
  //   $.ajax({
  //     url: 'users/like/' + this.value,
  //     type: 'GET',
  //     success: function(res) {

  //       //  document.getElementById(id).innerHTML = Number(document.getElementById(id).innerHTML) +1;        
  //     }
  //   })
  // })




  $('#Search').on('keyup', function(event) {

    $.ajax({
      url: 'users/search/' + $('#Search').val(),
      type: 'get',

      success: function(res) {
        const data = JSON.parse(res)
        console.log(data)
        $("#productsList").empty()
        data.forEach(row => {
          const tr = document.createElement("tr")
          tr.innerHTML = `<main class="py-6 px-4 sm:p-6 md:py-10 md:px-8">

<h1> ${ row.category.title} </h1>
<div class="max-w-4xl mx-auto grid grid-cols-1 lg:max-w-5xl lg:gap-x-20 lg:grid-cols-2">
  <div class="relative p-3 col-start-1 row-start-1 flex flex-col-reverse rounded-lg bg-gradient-to-t from-black/75 via-black/0 sm:bg-none sm:row-start-2 sm:p-0 lg:row-start-1">
    <h1 class="mt-1 text-lg font-semibold text-white sm:text-slate-900 md:text-2xl dark:sm:text-white">${ row.title }</h1>
    <!-- <p class="text-sm leading-4 font-medium text-white sm:text-slate-500 dark:sm:text-slate-400">Entire house</p> -->
  </div>
  <div class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
    <img src="https://picsum.photos/200" alt="" class="w-full h-60 object-cover rounded-lg sm:h-52 sm:col-span-2 lg:col-span-full" loading="lazy">
  </div>


  <p class="mt-4 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-6 lg:row-start-4 lg:col-span-1 dark:text-slate-400">
    {{$livre->description}}
  </p>
</div>
<a href="{{route('users/show',$livre['id'])}}">
  <div class="mt-4 col-start-1 row-start-3 self-center sm:mt-0 sm:col-start-2 sm:row-start-2 sm:row-span-2 lg:mt-6 lg:col-start-1 lg:row-start-3 lg:row-end-4">
    <button type="button" class="bg-indigo-600 text-white text-sm leading-6 font-medium py-2 px-3 rounded-lg">details</button>
  </div>
</a>
</main>`
          $("#productsList").append(tr)
        })
      }
    })
  })
</script>