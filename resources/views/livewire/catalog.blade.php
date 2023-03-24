<div>
    {{-- In work, do what you enjoy. --}}
    <input wire:model="search" type="text">


    <ul>
        @foreach($livres as $livre)
            <li>{{ $livre->title }}</li>
        @endforeach
        <li>{{ dd($livres) }}</li>
    </ul>
</div>
