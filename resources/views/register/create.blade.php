<x-layout>

    <section class="px-6 py-8 mt-20">
        <main class="max-width-lg mx-auto bg-gray-100 border border-gray-50 rounded-xl w-9/12">

            <h1 class="text-center font-bold text-xl text-5xl mt-2.5">Register</h1>

            <form method="POST" action="/register" class="m-12" >
                @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">

                        <x-form.input name="Name"/>
                        <div>
                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">username</label>
                            <input type="text" id="username"
                                   value="{{ old('username') }}"
                                   name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required="">
                            @error('username')
                            <p class="text-red-500 text-xs mt-1">{{ $message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email address</label>
                        <input type="email"
                               value="{{ old('email') }}"
                               id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required="">
                        @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
                        <input type="password"
                               name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required="">
                        @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message}}</p>
                        @enderror
                    </div>
                    <div class="flex items-start mb-6">
                        <div class="flex items-center h-5">
                     <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

            </form>
        </main>
    </section>
</x-layout>
