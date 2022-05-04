<x-app-layout>
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="mb-4 uppercase text-center text-4xl font-bold">Category: {{ $category->name }}</h1>

        @foreach ($categoryPosts as $post)
            <x-card-post :post="$post"></x-card-post>
        @endforeach
        <div class="mt-4">
            {{ $categoryPosts->links() }}
        </div>
    </div>
</x-app-layout>
