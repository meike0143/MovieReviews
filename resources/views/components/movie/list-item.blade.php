<div class="bg-gray-100 border-gray-200 border-4 shadow-sm sm:rounded-lg my-2">
    <div class="p-6 text-gray-900">
        <div class="sm:items-center">
            <a class="font-semibold text-l text-gray-800" href="{{ route('movies.show', $movie) }}">
                {{ $movie->name }}
            </a>
        </div>
    </div>
</div>
