<!-- resources/views/posts/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            投稿一覧
        </h2>
    </x-slot>

    <div class="py-8 max-w-3xl mx-auto">
        <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">新規投稿
        <div class="mt-6 space-y-4">
            @foreach($posts as $post)
            <div class="p-4 border rounded shadow-sm">
                <h3 class="text-lg font-bold">{{ $post->title }}</h3>
                <p class="text-sm text-gray-600">{{ $post->created_at->format('Y/m/d') }}</p>
                <p class="mt-2">{{ Str::limit($post->body, 100) }}</p>
                <a href="{{ route('posts.show', $post) }}" class="text-blue-600 text-sm">続きを読む</a>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>

