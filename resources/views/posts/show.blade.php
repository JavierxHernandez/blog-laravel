<x-app-layout>

    <div class="max-w-7xl mx-auto px-2 py-8 sm:px-6 lg:px-8 ml-auto">
        <h1 class="text-4xl font-bold text-grey-600">{{ $post->name }}</h1>

        <div class="text-lg text-gray-500 mb-6">
            {!! $post->extract !!}
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- primary content --}}
            <div class="col-span-2">
                <figure>
                    <img class="w-full h-80 object-cover object-center" src="@if($post->image) {{ Storage::url($post->image->url) }} @else https://cdn.pixabay.com/photo/2017/10/10/07/48/hills-2836301_960_720.jpg @endif" alt="">
                </figure>
                <div class="text-base text-gray-500 mt-4">
                    {!! $post->body !!}
                </div>
            </div>
            {{-- relate content --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">More in {{ $post->category->name }}</h1>
                <ul>
                    @foreach ($similarPosts as $similarPost)
                    <li class="mb-4">
                        <a class="flex" href="{{ route('posts.show', $similarPost) }}">
                            <img class="w-36 h-20 object-cover object-center" src="@if($similarPost->image) {{ Storage::url($similarPost->image->url) }} @else https://cdn.pixabay.com/photo/2017/10/10/07/48/hills-2836301_960_720.jpg @endif" alt="">
                            <span class="ml-2 text-gray-600">{{ $similarPost->name }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>

</x-app-layout>
