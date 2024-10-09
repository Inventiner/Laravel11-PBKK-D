<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">    
            <article class="mx-auto w-full max-w-6xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <h2><a href="/blogs" class="font-medium text-blue-600 hover:underline">&lsaquo; Back to blogs</a></h2>
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="https://www.pngitem.com/pimgs/m/421-4212617_person-placeholder-image-transparent-hd-png-download.png" alt="{{ $post->author->name }}">
                            <div>
                                <a href="/blogs?author={{ $post->author->username }}" rel="author" class="hover:underline text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                                <p class="text-base text-gray-500 mb-1 dark:text-gray-400">{{ $post->created_at->diffForHumans() }}</p>
                                <a href="/blogs?category={{ $post->category->slug }}" class="font-semibold" >
                                    <span class="bg-{{ $post->category->color }}-200 text-xs hover:underline inline-flex items-center px-2.5 py-1 rounded">
                                        {{ $post->category->name }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post->title }}
                    </h1>
                </header>
                <p>
                    {{ $post->body }}
                </p>
            </article>
        </div>
    </main>
</x-layout>