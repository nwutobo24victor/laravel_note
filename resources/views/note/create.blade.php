<x-app-layout>

    <div class="flex mb-4">
        <div class="w-full bg-gray-500 p-4 text-white">
            <h1 class="text-center text-3xl font-black">Create Notes</h1>
            <p class="text-center text-3sm mb-3">Best of the best: that only makes the world you fly, Like a tea-tray in the distance, screaming with passion. She had already heard her voice sounded hoarse and strange, and the words.</p>
        </div>
      </div>

    <main class="p-3">
        <div class="flex">

            <div class="mb-3 flex-1 ">
                <form action="{{ route('note.store') }}" method="POST" class="max-w-lg mx-auto rounded-lg bg-gray-500 p-3">
                    @csrf
                    <p class="mb-5"><a href="{{ route('note.index') }}" class="bg-gray-700 hover:bg-black text-white p-2 rounded-lg">Go Back</a></p>
                    <p class="text-lg text-center text-white">Create a New Notes</p>
                    <div class="mb-5">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Note Title</label>
                        <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                    </div>
                    <div class="mb-5">
                        <label for="note" class="block mb-2 text-sm font-medium text-gray-900">Add Note</label>
                        <textarea id="note" name="note" rows="15" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required ></textarea>
                    </div>
                    <button type="reset" class="bg-red-500 text-white py-2 px-4 hover:bg-red-700 rounded-lg">Cancel</button>
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 hover:bg-blue-700 rounded-lg">Submit</button>
                </form>
            </div>
            
        </div>          
    </main>
</x-app-layout>