<x-layout>


    <x-setting heading="Publish New Post">

        <div class="w-full sm:px-6">
            <div class="px-4 md:px-10 py-4 md:py-7 bg-gray-100 dark:bg-gray-700 rounded-tl-lg rounded-tr-lg">
                <div class="sm:flex items-center justify-between">
                    <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 dark:text-white ">Posts</p>
                    <div>
                        <button class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 inline-flex sm:ml-3 mt-4 sm:mt-0 items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                            <p class="text-sm font-medium leading-none text-white">New Post</p>
                        </button>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800  shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
                <table class="w-full whitespace-nowrap">

                    <tbody class="w-full">
                    @foreach($posts as $post)


                    <tr tabindex="0" class="focus:outline-none h-20 text-sm leading-none text-gray-800 dark:text-white  bg-white dark:bg-gray-800  hover:bg-gray-100 dark:hover:bg-gray-900  border-b border-t border-gray-100 dark:border-gray-700 ">
                        <td class="pl-4 cursor-pointer">
                            <div class="flex items-center">

                                <div class="pl-4">
                                    <a href="/articles/{{ $post->slug }}" class="font-medium">
                                        {{ $post->title }}</a>

                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="/admin/posts/{{ $post->id }}/edit" class="text-indigo-600 hover:text-indigo-900 ">Edit</a>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
{{--                            <a href="/admin/posts/{{ $post->id }}/edit" class="text-indigo-600 hover:text-indigo-900 ">Delete</a>--}}
                            <form action="/admin/posts/{{$post->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-xs text-gray-400">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>



    </x-setting>
</x-layout>
