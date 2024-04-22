<x-app-layout>
  @if (session('success'))
  <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative" role="success">
  {{session('success')}}
  </div>
  @endif
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
    @foreach ($posts as $post)
      <div class="p-4 md:w-1/3">
        <a href="{{ route('posts.show', $post) }}" class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
        <img class="rounded-t-lg" src={{ Storage::url("public/".$post->image) }} alt="" />
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$post->title}}</h1>
            <p class="leading-relaxed mb-3">{{$post->description}}</p>
          </div>
        </a>
      </div>
    @endforeach
    </div>
  </div>
</section>
</x-app-layout>