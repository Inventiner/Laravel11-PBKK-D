<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <x-search-bar></x-search-bar>
    <div class="py-4 px-2 mx-auto max-w-screen-xl lg:py-4 lg:px-0">
        {{ $posts->links() }}
        <div class="grid my-4 gap-5 md:grid-cols-2 lg:grid-cols-3">
            @forelse ( $posts as $post )
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5">
                        <a href="/blogs?category={{ $post->category->slug }}" class="font-semibold" >
                            <span class="bg-{{ $post->category->color }}-200 text-xs hover:underline inline-flex items-center px-2.5 py-1 rounded">
                                {{ $post->category->name }}
                            </span>
                        </a>
                        <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                    <a href="/blogs/{{ $post['slug'] }}">
                        <h2 class="mb-2 text-2xl font-bold tracking-tight hover:underline text-gray-900 dark:text-white">
                            {{ $post['title'] }}
                        </h2>
                    </a>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                        {{ Str::limit($post->body, 250, '...')}}
                    </p>
                    <div class="flex justify-between items-center">
                        <a href="/blogs?author={{ $post->author->username }}">
                            <div class="flex items-center space-x-3">
                                <img class="w-7 h-7 rounded-full" src="https://www.pngitem.com/pimgs/m/421-4212617_person-placeholder-image-transparent-hd-png-download.png" alt="{{ $post->author->name }}" />
                                <span class="hover:underline font-medium text-sm dark:text-white">
                                    {{ $post->author->name }}
                                </span>
                            </div>
                        </a>
                        <a href="/blogs/{{ $post['slug'] }}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more &rsaquo;
                        </a>
                    </div>
                </article>
            @empty
                <div class="flex justify-between items-center mb-5">
                    <p class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Article Not Found 😢😢!</p>
                    <h2><a href="/blogs" class="font-medium text-blue-600 hover:underline">&lsaquo; Back to all blogs</a></h2>
                </div>
            @endforelse
        </div>  
        {{ $posts->links() }}
    </div>
</x-layout>