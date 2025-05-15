<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('movies.store') }}" method="POST">
                        @csrf
                        <br>
                        <h2 class="font-semibold text-xl text-gray-800">Create a new movie</h2>
                        <p>Please fill out all the form fields and click 'Submit'</p>
                        <br>

                        <div class="p-2">
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')"
                                          required autofocus autocomplete="title" placeholder="Enter the movie's title" />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>
                        <div class="p-2">
                            <x-input-label for="slug" :value="__('Slug')" />
                            <x-text-input id="slug" name="slug" type="text" class="mt-1 block w-full" :value="old('slug')"
                                          required autofocus autocomplete="slug" placeholder="Enter the journey's slug" />
                            <x-input-error class="mt-2" :messages="$errors->get('slug')" />
                        </div>
                        <div class="p-2">
                            <x-input-label for="description" :value="__('Description')" />
                            <x-movie.text-area name="description" rows="5" class="mt-1 block w-full border-gray-300 focus:border-indigo-500
                                            focus:ring-indigo-500 rounded-md shadow-sm"
                                                 placeholder="Enter the journey's description..."
                                                 value="{{ old('description') }}" ></x-movie.text-area>
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>
                        <div class="p-2">
                            <x-input-label for="rating" :value="__('Rating')" />
                            <div class="grid">
                                <select name="rating" class="appearance-none mt-1 block w-full border-gray-300 focus:border-indigo-500
                                            focus:ring-indigo-500 rounded-md shadow-sm">
                                    <option value="5"
                                        {{ old('rating') == '5' || old('rating') == null  ? 'selected' : '' }}>
                                        5 stars
                                    </option>
                                    <option value="4"
                                        {{ old('rating') == '4' || old('rating') == null  ? 'selected' : '' }}>
                                        4 stars
                                    </option>
                                    <option value="3"
                                        {{ old('rating') == '3' ? 'selected' : '' }}>
                                        3 stars
                                    </option>
                                    <option value="2"
                                        {{ old('rating') == '2' ? 'selected' : '' }}>
                                        2 stars
                                    </option>
                                    <option value="1"
                                        {{ old('rating') == '1' ? 'selected' : '' }}>
                                        1 star
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="sm:flex sm:items-center m-5 gap-4">
                            <button type="submit" class="btn bg-green-600 rounded m-1 py-2 px-8">Save</button>
                            <a type="button" href="{{ route('movies.index') }}" class="btn bg-yellow-200 rounded m-1 py-2 px-8">Cancel</a>
                            <button type="reset" class="btn bg-red-500 rounded m-1 py-2 px-8">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
