@props(['heading'])

<section class="col-span-8 col-start-5 mt-10 space-y-6 max-w-4xl mx-auto font-bold">
    <h1 class="text-lg font-bold mb-8 pb-2 border-b">
        {{$heading}}
    </h1>

    <div class="flex ">
        <asid class="w-48 flex-shrink-0">
            <h4 class="font-bold mb-6">Links</h4>
            <ul>
                <li>
                    <a href="/admin/posts" class="{{ request()->is('admin/posts') ?  'text-blue-400 font-semibold' : 'font-semibold' }}">All Post</a>
                </li>

                <li>
                    <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-blue-400 font-semibold' : 'font-semibold' }}">New Post</a>
                </li>
            </ul>
        </asid>

        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
