<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('All Notes') }}
      </h2>
  </x-slot>

    <div class="flex mb-4">
        <div class="w-full bg-gray-500 p-4 text-white">
            <h1 class="text-center text-3xl font-black">Notes</h1>
            <p class="text-center text-3sm mb-3">Best of the best: that only makes the world you fly, Like a tea-tray in the distance, screaming with passion. She had already heard her voice sounded hoarse and strange, and the words.</p>
            <p class="text-center"><a href="{{ route('note.create') }}" class="bg-red-500 rounded-lg px-6 py-1">Create Note</a></p>
        </div>
      </div>

      <x-message></x-message>
      
    <main class="p-3 bg-white">
        <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1">
            @foreach ($notes as $note)
            <div class="mb-3">
                <div class="max-w-lg rounded overflow-hidden shadow-lg mx-auto">
                    <div class="px-6 py-4">
                      <div class="font-bold text-xl mb-2">{{ $note["title"]."'s" .' Note '. $note["id"] }}</div>
                      <p class="text-gray-700 text-base">{{ Str::words($note["note"], 30) }}</p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                      <form action="{{ route('note.destroy', $note) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('note.show',$note) }}" class="inline-block bg-blue-500 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">View</a>
                          <a href="{{ route('note.edit',$note) }}" class="inline-block bg-yellow-500 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Edit</a>
                        <button type="submit" class="inline-block bg-red-500 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Delete</button>
                      </form>
                    </div>
                  </div>
            </div>
            @endforeach
            
        </div>  
        <p class="p-2">
          {{ $notes->links() }}</p>        
    </main>
</x-app-layout>