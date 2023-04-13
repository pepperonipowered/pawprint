<x-pawprint-layout>
    <p class="text-white">Blogs</p>

    <x-slot name="content">

        <div class="flex-flex-col space-x-3 space-y-3 w-11/12 mx-auto">
            <div class="flex flex-row space-x-4 items-center justify-center">
                <span class="text-white">Categories</span>
                <span class="text-white">Tags</span>
                <span class="text-white">Search</span>
            </div>
            {{-- for loop cards here --}}
            <div class="grid grid-cols-1 gap-4">
                <x-post-card/>
                <x-post-card/>
                <x-post-card/>
                <x-post-card/>
                <x-post-card/>
            </div>
        </div>
    </x-slot>
    
    
</x-pawprint-layout>