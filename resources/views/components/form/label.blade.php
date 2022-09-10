@props(['name'])

<label for="{{$name}}"
       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
    {{ucwords($name)}}
</label>
