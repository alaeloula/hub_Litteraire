<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('groupe') }}
        </h2>
    </x-slot>


    <!-- This is an example component -->
    <div class="container mx-auto shadow-lg rounded-lg">
        <!-- headaer -->
        <div class="px-5 py-5 flex justify-between items-center bg-white border-b-2">
            <div class="font-semibold text-2xl">members</div>
            
            <div class="h-12 w-12 p-2 bg-yellow-500 rounded-full text-white font-semibold flex items-center justify-center">
                RA
            </div>
        </div>
        <!-- end header -->
        <!-- Chatting -->
        <div class="flex flex-row justify-between bg-white">
            <!-- chat list -->
            <div class="flex flex-col w-2/5 border-r-2 overflow-y-auto">
              
                <!-- user list -->
                @foreach($groupe->membres as $membre)
                <div class="flex flex-row py-4 px-2 justify-center items-center border-b-2">
                    <div class="w-1/4">
                        <img src="https://source.unsplash.com/_7LbC5J-jw4/600x600" class="object-cover h-12 w-12 rounded-full" alt="" />
                    </div>
                    <div class="w-full">
                        <div class="text-lg font-semibold">{{$membre->name}}</div>
                        
                    </div>
                </div>
                @endforeach

                <!-- end user list -->
            </div>
            <!-- end chat list -->
            <!-- message -->
            <div class="w-full px-5 flex flex-col">
                <div class="flex flex-col mt-5 justify-between">


                    @foreach($groupe->comments as $comment)
                    @if($comment->user()->is(Auth::user()))

                    <div class="flex justify-end mb-4">
                        <div class="mr-2 py-3 px-4 bg-blue-400 rounded-bl-3xl rounded-tl-3xl rounded-tr-xl text-white">
                            {{ $comment->message}}
                        </div>
                        <img src="https://source.unsplash.com/vpOeXr5wmR4/600x600" class="object-cover h-8 w-8 rounded-full" alt="" />
                    </div>
                    @else
                    <div class="flex justify-start mb-4">
                        <img src="https://source.unsplash.com/vpOeXr5wmR4/600x600" class="object-cover h-8 w-8 rounded-full" alt="" />
                        <div class="ml-2 py-3 px-4 bg-gray-400 rounded-br-3xl rounded-tr-3xl rounded-tl-xl text-white">
                            {{ $comment->message}}
                        </div>
                    </div>
                    @endif

                    @endforeach
                </div>

                <div class="py-5">
                    <form action="{{route('message.store',$groupe['id'])}}" method="post">
                        @csrf
                        <input class="w-full bg-gray-300 py-5 px-3 rounded-xl" type="text" placeholder="type your message here..." id="message" name="message"/>
                        <button type="submit" value="{{$groupe->id}}" id="envoyer" class="w-full rounded bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg" data-te-ripple-init data-te-ripple-color="light">
                            envoyer
                        </button>
                    </form>
                </div>
            </div>
            <!-- end message -->
            <div class="w-2/5 border-l-2 px-5">
                <div class="flex flex-col">
                    <div class="font-semibold text-xl py-4">Mern Stack Group</div>
                    <img src="https://source.unsplash.com/L2cxSuKWbpo/600x600" class="object-cover rounded-xl h-64" alt="" />
                    <div class="font-semibold py-4">Created 22 Sep 2021</div>
                    <div class="font-light">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
                        perspiciatis!
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>

<script>
  $('#envoyer').on('click', function(event) {
    const message = $("#message").val();
    // alert($('#envoyer').val())
    // $.ajax({
    //   url: 'message/store',
    //   data :{message:message},
    //   type: 'post',
    //   success: function(res) {
    //     // window.location.href = "/groupes";
    //     //  document.getElementById(id).innerHTML = Number(document.getElementById(id).innerHTML) +1;
    //     alert('hehho')        
    //   }
    // })
  })
</script>