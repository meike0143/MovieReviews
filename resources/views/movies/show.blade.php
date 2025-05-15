<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="sm:flex flex-basis">
                        <h1 class="font-semibold text-2xl text-gray-800 basis-5/6">{!! $movie->title !!}</h1>
                        @Auth
                            <div class="flex flex-row basic-1/6">
                                <a href="{{ route('movies.edit', $movie) }}" class="align-middle bg-yellow-200 rounded-lg
                            px-5 py-2 mx-1">Edit</a>
                                <a href="{{ route('movies.delete', $movie) }}" class="align-middle bg-red-400 rounded-lg
                            px-5 py-2 mx-1" >Delete</a>
                            </div>
                        @endauth
                    </div>
                    <br>
                    <hr class="py-3">
                    <p>
                        {!! $movie->description !!}
                    </p>
                    <br>
                    <p>
                        Rating: @if($movie->rating == "5")
                            <span class="bg-green-100 text-green-800 text-xs font-medium mx-2 me-2 px-2.5 py-0.5 rounded-full">5 Stars</span>
                        @elseif($movie->rating == "4")
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mx-2 me-2 px-2.5 py-0.5 rounded-full">4 Stars</span>
                        @elseif($movie->rating == "3")
                            <span class="bg-orange-100 text-yellow-800 text-xs font-medium mx-2 me-2 px-2.5 py-0.5 rounded-full">3 Stars</span>
                        @elseif($movie->rating == "2")
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium mx-2 me-2 px-2.5 py-0.5 rounded-full">2 Stars</span>
                        @else
                            <span class="bg-red-100 text-red-800 text-xs font-medium mx-2 me-2 px-2.5 py-0.5 rounded-full">1 star</span>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
