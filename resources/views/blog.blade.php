<x-layout>
    <x-slot:title><h2><a href="/blogs" class="font-medium text-blue-600 hover:underline">&lsaquo; Back to blogs</a></h2></x-slot>
    <article class="py-2 max-w-screen-md">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-black font-semibold text-base">
            By 
            <a href="/authors/{{ $post->author->username }}" class="text-gray-500 hover:underline">{{ $post->author->name }}</a> 
            in 
            <a href="/categories/{{ $post->category->slug }}" class="text-gray-500 hover:underline">{{ $post->category->name }}</a>
            | {{ $post['created_at']->diffForHumans() }}
        </div>
        <p class="my-2 font-normal whitespace-pre-line">{{ $post['body']}}</p>
        <a href="/blogs" class="font-medium text-blue-600 hover:underline">&lsaquo; Back to blogs</a>
    </article>
</x-layout>