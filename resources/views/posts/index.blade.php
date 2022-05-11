<x-app-layout>
    <div class="max-w-7xl mx-auto px-2 py-8 sm:px-6 lg:px-8 ml-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image: url(@if($post->image) {{ Storage::url($post->image->url) }} @else https://cdn.pixabay.com/photo/2017/10/10/07/48/hills-2836301_960_720.jpg ) @endif">

                    <div class="p-3 flex items-center justify-between">
                        <a href="{{ route('posts.category', $post->category) }}" class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-gray-800 rounded cursor-pointer hover:bg-gray-500">{{ $post->category->name }}</a>
                    </div>

                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <div class="py-3">
                            @foreach ($post->tags as $tag)
                                {{-- The tag have color propriety ($tag->color) --}}
                                <a href="{{ route('posts.tag', $tag) }}" class="inline-block px-3 h-6 bg-blue-600 text-white rounded-full">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                        <h1 class="text-4xl text-white leading-8 font-bold">
                            <a href="{{ route('posts.show', $post) }}">
                                {{ $post->name }}
                            </a>
                        </h1>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
