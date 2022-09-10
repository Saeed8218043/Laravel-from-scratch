@props(['comment'])
<x-panel class="bg-gray-100">
<article class="flex space-x-4">



    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/100/?u={{ $comment->user_id }}" width="100" height="100" alt="" class="rounded-xl">
    </div>
    <header>

        <h3 class="font-bold">{{ $comment->author->username }}</h3>

        <p class="text-xs">
            posted
            <time> {{ $comment->created_at->diffForHumans() }}</time>
        </p>
        <p>
            {{ $comment->body }}
        </p>
    </header>

</article>
</x-panel>
