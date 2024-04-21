<x-app-layout>
    <div class="m-80">
        <div class=" text-black">
            <p class=" font-bold text-xl">タイトル：<span class=" font-normal">{{$post->title}}</span></p>
            <p class=" font-bold text-xl">本文：<span class=" font-normal">{{$post->description}}</span></p>
            <p class=" font-bold text-xl">作成者：<span class=" font-normal">{{$post->user->name}}</span></p>
            <p class=" font-bold text-xl">作成日時：<span class=" font-normal">{{$post->created_at}}</span></p>
        </div>
        <div class="flex justify-end mt-10">
            <a href="{{route('posts.edit', $post)}}" class="btn btn-warning mr-5">編集</a>
            <form action="{{ route('posts.destroy', $post) }}" method="post">
                @csrf
                @method('DELETE')
                <input class="btn btn-danger" type="submit" value="削除" onclick="return confirmDelete();" />
            </form>
        </div>
    </div>
</x-app-layout>

<script>
function confirmDelete() {
    return confirm('本当に削除してもよろしいですか？');
}
</script>