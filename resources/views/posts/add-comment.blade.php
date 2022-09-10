@auth()
    <x-panel>
        <form method="POST" action="/articles/{{ $post->slug }}/comments" >
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/100/?u={{ auth()->id() }}" width="60" height="60" alt=""
                     class="rounded-full">

                <h2 class="ml-3">
                    Want to participate?
                </h2>
            </header>

            <div class="mt-4">
                            <textarea name="body" id="" cols="30" rows="5"
                                      class="w-full focus:outline-none focus:ring rounded-xl"
                                      placeholder="write about the article"></textarea>
                @error('body')
                <span class="text-red-600 text-xs">{{$message}}</span>
                @enderror
            </div>
            <div class="flex justify-end ">
                <x-form.button>Post</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">login</a> for leave a comment
    </p>
@endauth
