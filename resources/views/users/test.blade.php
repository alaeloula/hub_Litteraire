<div>
    <input wire:model="search" type="text" placeholder="Search users..."/>
 
    <ul>
        @foreach($livres as $livre)
            <li>{{ $livre->title }}</li>
        @endforeach
    </ul>
</div>