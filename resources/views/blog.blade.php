<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <article class="py-2 max-w-screen-md">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-600">
            <a href="/about">{{ $post['author'] }}</a> | {{ $post['created_at']->diffForHumans() }}
        </div>
        <p class="my-2 font-normal whitespace-pre-line">{{ $post['body']}}</p>
        <a href="/blogs" class="font-medium text-blue-600 hover:underline">&lsaquo; Back to blogs</a>
    </article>
</x-layout>