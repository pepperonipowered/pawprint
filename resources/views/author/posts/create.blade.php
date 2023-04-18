<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Author Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                   <form action="" method="POST">
                    @csrf
                        <div class="flex flex-col space-y-4">
                            {{-- Title --}}
                            <div>
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>
                            {{-- Slug for uri display and search purposes --}}
                            <div>
                                <x-input-label for="slug" :value="__('Slug')" />
                                <x-text-input id="slug" class="block mt-1 w-full" type="text" name="slug" :value="old('slug')" required autofocus />
                                <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                            </div>
                            {{-- Body --}}
                            <x-tinymceEditor/>
                            {{-- Category --}}
                            
                            {{-- Submit --}}
                            <x-primary-button class="w-max">
                                {{ __('Post') }}
                            </x-primary-button>
                        </div>
                   </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
