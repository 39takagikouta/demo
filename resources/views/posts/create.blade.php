<x-app-layout>
    <div class="mt-20 mx-40">
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('posts.store') }}">
            @csrf

        <div class="mb-10">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                タイトル
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" type="text" placeholder="タイトル" value={{ old('title') }}>
        </div>

        <div class="mb-10">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                本文
            </label>
            <textarea id="description"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                rows="5" cols="33" name="description">{{ old('description') }}
            </textarea>    
        </div>

        <div class="flex justify-end">
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
                登録する
            </button>
            </div>
        </form>
    </div>
</x-app-layout>
