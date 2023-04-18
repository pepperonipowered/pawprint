<div class="flex flex-col px-6 py-3 rounded-lg space-y-3 bg-gray-700"> 
    {{-- Author and Profile Pic --}}
    <div class="flex flex-row items-center space-x-2">
        <x-application-logo class="w-7 h-auto"/>
        <a href="" class="text-white text-sm font-bold hover:underline">Author username</a>
    </div>
    {{-- Title --}}
    <div class="flex flex-row items-center justify-between">
        <a href="#" class="text-white text-lg md:text-xl font-bold hover:underline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, ducimus?</a>
    </div>
    <div class="space-x-4">
        <x-primary-button class="w-max">
            {{ __('Edit') }}
        </x-primary-button>
        <x-primary-button class="w-max">
            {{ __('Delete') }}
        </x-primary-button>
    </div>
</div>