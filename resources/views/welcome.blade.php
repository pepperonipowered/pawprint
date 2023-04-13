<x-pawprint-layout>
    <h1 class="text-3xl text-white">Hello, guest!</h1>
    <p class="text-lg text-white">You can browser through our blogs...</p>
    <p class="text-lg text-white">...or, you may log in or register </p>

    <x-slot name="content">
        <div class="flex flex-row justify-between items-center py-5">
            <h1 class="text-3xl text-white text-center">Featured blogs</h1>
            <a href="/blogs" class="text-white text-xl h-max w-max bg-blue-500 px-3 rounded-full">More Blogs ></a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <x-post-card/>
            <x-post-card/>
            <x-post-card/>
            <x-post-card/>
            <x-post-card/>
            <x-post-card/>
        </div>
        
    </x-slot>
</x-pawprint-layout>