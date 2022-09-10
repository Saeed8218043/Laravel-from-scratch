<x-layout>

    <section class="px-6 py-8 mt-20">
        <main class="max-width-lg mx-auto bg-gray-100 border border-gray-50 rounded-xl w-1/3">

            <h1 class="text-center font-bold text-xl text-5xl mt-2.5">Login</h1>
            <form method="POST" action="/login" class="m-12">
                @csrf

               <x-form.input name="email" type="email"/>
               <x-form.input name="password" type="password"/>

                        <x-form.button>Log in</x-form.button>


            </form>
        </main>
    </section>
</x-layout>
