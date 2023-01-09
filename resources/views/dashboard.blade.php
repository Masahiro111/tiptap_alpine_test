<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div x-data="editor('<h2>Hi there,</h2><p>this is a basic <em>basic</em> example of <strong>tiptap</strong>. Sure, there are all kind of basic text styles you\'d probably expect from a text editor. But wait until you see the lists:</p>')">

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