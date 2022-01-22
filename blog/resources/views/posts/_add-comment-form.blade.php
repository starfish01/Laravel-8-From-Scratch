<x-panel>
    @auth
        <form method="POST" action="/posts/{{$post->slug}}/comments">
            @csrf
            <header class="flex">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}}" width="40" height="40"
                     class="rounded-full">
                <h2 class="ml-4">Make a Comment</h2>
            </header>

            <div class="my-6">
                                <textarea class="w-full text-sm focus:outline-none focus:ring"
                                          name="body"
                                          rows="5"
                                          placeholder="Say something!"
                                          required
                                ></textarea>
                @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-end">
               <x-submit-button>
                   Post a comment
               </x-submit-button>
            </div>
        </form>
    @else
        <a href="/login">Please login to make a comment</a>
    @endif
</x-panel>
