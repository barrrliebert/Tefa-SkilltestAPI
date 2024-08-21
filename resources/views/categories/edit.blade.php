<x-layout>
    <x-slot:user>
        {{$user->name}}
        </x-slot>

        <form method="POST" action="{{ route('categories.update', $category) }}">
            @csrf
            @method('PUT')
            <a href="/categories" class="h-8 w-8 bg-white flex items-center justify-center pb-1 hover:bg-blue-500 hover:text-white transition-colors duration-500 font-bold text-blue-500 mb-3 rounded-lg"><
                </a>

                    <h1 class="text-black text-2xl mb-6 font-semibold">Edit Category</h1>
                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="gamis" required />
                        @error('name')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-start mb-5">

                        <div class="flex items-center h-5">
                            <input type="hidden" name="is_publish" value="0">
                            <input id="is_publish" type="checkbox" name="is_publish" value="1" {{ old('is_publish', $category->is_publish) ? 'checked' : '' }} class="w-4 h-4 border border-gray-300 rounded-full bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                        </div>
                        <label for="is_publish" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Is Published?</label>
                    </div>
                    @error('is_publish')
                    <p class="mb-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>

        </form>



</x-layout>