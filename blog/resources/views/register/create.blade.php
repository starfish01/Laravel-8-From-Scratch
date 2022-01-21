<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto">
            <form method="POST" action="/register">
                @csrf
                <div class=" px-6 py-8 rounded shadow-md text-black w-full">

                    <h1 class="mb-8 text-3xl text-center">Sign up</h1>

                    <input
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="name"
                        placeholder="name" />
                    <input
                        type="email"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="email"
                        placeholder="email" />
                    <input
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="username"
                        placeholder="Username" />

                    <input
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="password"
                        placeholder="Password" />
                    <input
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="confirm_password"
                        placeholder="Confirm Password" />

                    <button
                        type="submit"
                        class="w-full text-center py-3 rounded bg-green text-black hover:bg-green-dark focus:outline-none my-1"
                    >Create Account</button>

                </div>
            </form>
        </main>
    </section>
</x-layout>
