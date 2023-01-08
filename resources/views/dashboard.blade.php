<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div x-data="editor('<p>Hello world! :-)</p>')">

                    <template x-if="isLoaded()">
                        <div class="menu">
                            <button
                                    @click="toggleHeading({ level: 1 })"
                                    :class="{ 'is-active': isActive('heading', { level: 1 }, updatedAt) }">
                                H1
                            </button>
                            <button
                                    @click="toggleBold()"
                                    :class="{ 'is-active' : isActive('bold', updatedAt) }">
                                Bold
                            </button>
                            <button
                                    @click="toggleItalic()"
                                    :class="{ 'is-active' : isActive('italic', updatedAt) }">
                                Italic
                            </button>
                        </div>
                    </template>

                    <div x-ref="element"></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>