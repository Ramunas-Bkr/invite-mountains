
<x-app-layout>
    <div class="inline-block w-full mt-5 text-center">
        <div class="w-3/4 mx-auto">
        @foreach ($notes as $note)
            <div class=" bg-white bg-opacity-75 my-2">
                <a href="#" class="text-2xl font-semibold">{{ $note->title }}</a>
                <h3>{{ $note->user->name}}</h3>
                <p>{{ $note->desc }}</p>
            </div>
        @endforeach
        {{ $notes->links() }}
    </div>
        
    </div>

</x-app-layout>
