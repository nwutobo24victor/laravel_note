<x-app-layout>

    <div class="flex mb-4">
        <div class="w-full bg-gray-500 p-4 text-white">
            <h1 class="text-center text-3xl font-black">Show Notes</h1>
            <p class="text-center text-3sm mb-3">Best of the best: that only makes the world you fly, Like a tea-tray in the distance, screaming with passion. She had already heard her voice sounded hoarse and strange, and the words.</p>
        </div>
      </div>

    <main class="p-3">
        <div class="container mx-auto">
            <div class="mb-3">
                <div class="rounded overflow-hidden shadow-lg p-4 bg-gray-50">
                    <p class="text-start"><a href="{{ route('note.index') }}" class="bg-black hover:bg-gray-700 rounded-lg px-6 py-1 text-white">Go Back</a></p>

                    <div class="px-6 pt-4 pb-2 text-center">
                      <form action="{{ route('note.destroy', $note) }}" method="post">
                        @csrf
                        @method('DELETE')
                          <a href="{{ route('note.edit', $note) }}" class="inline-block bg-yellow-500 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Edit</a>
                          <button type="submit" class="inline-block bg-red-500 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Delete</button>
                        </form>
                      </div>
                    <div class="px-6 py-4">
                      <h1 class="font-bold text-xl mb-2">{{ $note["title"] }}s</h1>
                      <p class="text-gray-700 text-base">{{ $note["note"] }}</p>
                    </div>
                    
                  </div>
            </div>
            
        </div>          
    </main>
</x-app-layout>