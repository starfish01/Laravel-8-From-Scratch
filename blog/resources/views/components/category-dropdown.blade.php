<x-dropdown>

    <x-slot name="trigger">
        <button
            class="py-2 pl-3 pr-9 text-sm font-semibold text-left lg:w-32 w-full flex lg:inline-flex">

            {{ isset($currentCategory) ? $currentCategory->name : 'Categories' }}

            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right:12px"></x-icon>
        </button>
    </x-slot>


    <x-dropdown-item :active="request()->routeIs('home') && !isset($currentCategory)" href="/">All</x-dropdown-item>

    @foreach($categories as $category)
        <x-dropdown-item
            :active="isset($currentCategory) && $currentCategory->is($category)"
            href="/?category={{$category->slug}}&{{ http_build_query(request()->except('category', 'page')) }}"
        >
            {{$category->name}}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
