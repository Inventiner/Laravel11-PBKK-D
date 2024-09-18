<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    @foreach ( $posts as $post )
    <article class="py-2 max-w-screen-md border-b border-gray-400">
        <a href="/blogs/{{ $post['slug'] }}">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-800 hover:underline">{{ $post['title'] }}</h2>
        </a>
        <div class="text-base text-gray-600">
            <a href="/about">{{ $post['author'] }}</a> | {{ $post['date'] }}
        </div>
        <p class="my-2 font-normal whitespace-pre-line">{{ Str::limit($post['body'], 250, '...')}}</p>
        <a href="/blogs/{{ $post['slug'] }}" class="font-medium text-blue-600 hover:underline">Read More &raquo;</a>
    </article>
    @endforeach

</x-layout>