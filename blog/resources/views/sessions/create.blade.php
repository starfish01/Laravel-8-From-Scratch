<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto">


            <form method="POST" action="/login">
                @csrf
                <div class=" px-6 py-8 rounded shadow-md text-black w-full">

                    <h1 class="mb-8 text-3xl text-center">Log In</h1>

                    <input
                        type="email"
                        class="block border border-grey-light w-full p-3 rounded mt-2"
                        name="email"
                        required
                        value="{{ old('email') }}"
                        placeholder="email"/>
                    @error('email')
                    <p class="text-red-500 text-xs mb-1">{{$message}}</p>
                    @enderror

                    <input
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mt-2"
                        name="password"
                        required
                        value="{{ old('password') }}"
                        placeholder="Password"/>
                    @error('password')
                    <p class="text-red-500 text-xs mb-1">{{$message}}</p>
                    @enderror

                    <button
                        type="submit"
                        class="w-full text-center py-3 rounded bg-green text-black hover:bg-green-dark focus:outline-none my-1"
                    >Login
                    </button>

                    @if($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                                <li class="text-red-500 text-xs">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </form>


        </main>
    </section>
</x-layout>
