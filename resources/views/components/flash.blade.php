@if(session()->has('success'))
    <div>
        <p x-data="{ show:true }"
           x-init="setTimeout(()=> show =false,4000)"
           x-show="show"
           class="bg-green-400 bottom-0 fixed m-10 p-1.5 right-0 rounded-xl text-white">
            {{ session('success') }}
        </p>
    </div>
@endif
