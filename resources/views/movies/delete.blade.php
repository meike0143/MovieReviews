<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="sm:flex sm:items-center">
                        <h1 class="font-semibold text-2xl text-gray-800">
                            {{ __('Delete the movie') }}
                        </h1>

                    </div>
                    <br>
                    <form action="{{ route('movies.destroy', $movie) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <h2 class="subtitle is-6 is-italic">
                            Are you sure that you want to delete this movie?
                        </h2>
                        <br>
                        <div class="sm:ms-auto">
                            <button type="submit" class="align-middle bg-red-400 rounded-lg
                            px-5 py-2">Delete</button>
                            <a type="button" href="{{ route('movies.show', $movie) }}"
                               class="align-middle bg-gray-200 rounded-lg
                            px-5 py-3">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
