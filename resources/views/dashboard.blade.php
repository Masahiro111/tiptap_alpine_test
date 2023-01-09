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
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path fill="none" d="M0 0H24V24H0z" />
                                    <path d="M13 20h-2v-7H4v7H2V4h2v7h7V4h2v16zm8-12v12h-2v-9.796l-2 .536V8.67L19.5 8H21z" fill="rgba(0,0,0,1)" />
                                </svg>
                            </button>

                            <button
                                    @click="toggleHeading({ level: 2 })"
                                    :class="{ 'is-active': isActive('heading', { level: 2 }, updatedAt) }">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path fill="none" d="M0 0H24V24H0z" />
                                    <path d="M4 4v7h7V4h2v16h-2v-7H4v7H2V4h2zm14.5 4c2.071 0 3.75 1.679 3.75 3.75 0 .857-.288 1.648-.772 2.28l-.148.18L18.034 18H22v2h-7v-1.556l4.82-5.546c.268-.307.43-.709.43-1.148 0-.966-.784-1.75-1.75-1.75-.918 0-1.671.707-1.744 1.606l-.006.144h-2C14.75 9.679 16.429 8 18.5 8z" />
                                </svg>
                            </button>

                            <button
                                    @click="toggleHeading({ level: 3 })"
                                    :class="{ 'is-active': isActive('heading', { level: 3 }, updatedAt) }">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path fill="none" d="M0 0H24V24H0z" />
                                    <path d="M22 8l-.002 2-2.505 2.883c1.59.435 2.757 1.89 2.757 3.617 0 2.071-1.679 3.75-3.75 3.75-1.826 0-3.347-1.305-3.682-3.033l1.964-.382c.156.806.866 1.415 1.718 1.415.966 0 1.75-.784 1.75-1.75s-.784-1.75-1.75-1.75c-.286 0-.556.069-.794.19l-1.307-1.547L19.35 10H15V8h7zM4 4v7h7V4h2v16h-2v-7H4v7H2V4h2z" />
                                </svg>
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

                            <button class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50" @click="format('bold')">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path fill="none" d="M0 0H24V24H0z" />
                                    <path d="M13 20h-2v-7H4v7H2V4h2v7h7V4h2v16zm8-12v12h-2v-9.796l-2 .536V8.67L19.5 8H21z" fill="rgba(0,0,0,1)" />
                                </svg>
                            </button>

                            <button class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50" @click="format('italic')">
                                <i class="mdi mdi-format-italic"></i>
                            </button>
                            <button class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 mr-1 hover:text-indigo-500 active:bg-gray-50" @click="format('underline')">
                                <i class="mdi mdi-format-underline"></i>
                            </button>
                            <button class="outline-none focus:outline-none border-l border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50" @click="format('formatBlock','P')">
                                <i class="mdi mdi-format-paragraph"></i>
                            </button>
                            <button class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50" @click="format('formatBlock','H1')">
                                <i class="mdi mdi-format-header-1"></i>
                            </button>
                            <button class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50" @click="format('formatBlock','H2')">
                                <i class="mdi mdi-format-header-2"></i>
                            </button>
                            <button class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 mr-1 hover:text-indigo-500 active:bg-gray-50" @click="format('formatBlock','H3')">
                                <i class="mdi mdi-format-header-3"></i>
                            </button>
                            <button class="outline-none focus:outline-none border-l border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50" @click="format('insertUnorderedList')">
                                <i class="mdi mdi-format-list-bulleted"></i>
                            </button>
                            <button class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 mr-1 hover:text-indigo-500 active:bg-gray-50" @click="format('insertOrderedList')">
                                <i class="mdi mdi-format-list-numbered"></i>
                            </button>
                            <button class="outline-none focus:outline-none border-l border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50" @click="format('justifyLeft')">
                                <i class="mdi mdi-format-align-left"></i>
                            </button>
                            <button class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50" @click="format('justifyCenter')">
                                <i class="mdi mdi-format-align-center"></i>
                            </button>
                            <button class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50" @click="format('justifyRight')">
                                <i class="mdi mdi-format-align-right"></i>
                            </button>
                        </div>
                    </template>

                    <div x-ref="element"></div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>