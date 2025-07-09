<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            新規投稿
        </h2>
    </x-slot>

    <div class="py-8 max-w-2xl mx-auto">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf 
            <div class="mb-4">
                <label for="title" class="block font-medium">タイトル</label>
                <input type="text" name="title" id="title" class="w-full border rounded px-3 py-2 mt-1" required>
            </div>

            <div class="mb-4">
                <label for="body" class="block font-medium">本文</label>
                <textarea name="body" id="body" rows="6" class="w-full border rounded px-3 py-2 mt-1" required>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">投稿する</button>
            </div>
        </form>
    </div>
</x-app-layout>
