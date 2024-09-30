<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <h2><a href="/blogs" class="font-medium text-blue-600 hover:underline">&lsaquo; Back to blogs</a></h2>
    @foreach ( $posts as $post )
    <article class="py-2 max-w-screen-md border-b border-gray-400">
        <a href="/blogs/{{ $post['slug'] }}">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-800 hover:underline">{{ $post['title'] }}</h2>
        </a>
        <div class="text-black font-semibold text-base">
            By 
            <a href="/authors/{{ $post->author->username }}" class="text-gray-500 hover:underline">{{ $post->author->name }}</a> 
            in 
            <a href="/categories/{{ $post->category->slug }}" class="text-gray-500 hover:underline">{{ $post->category->name }}</a>
            | {{ $post['created_at']->diffForHumans() }}
        </div>
        <p class="my-2 font-normal whitespace-pre-line">{{ Str::limit($post['body'], 250, '...')}}</p>
        <a href="/blogs/{{ $post['slug'] }}" class="font-medium text-blue-600 hover:underline">Read More &raquo;</a>
    </article>
    @endforeach

</x-layout>