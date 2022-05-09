<div class="card">
    <div class="card-header">
        <div class="row">
            <a href="{{ route('admin.posts.create') }}" class="btn btn-secondary col-2">Create new Post</a>
            <input class="form-control col ml-4" type="text" placeholder="Posts search" wire:model="search">
        </div>
    </div>
    @if ($posts->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->name }}</td>
                            <td>
                                <a href="{{ route('admin.posts.edit', $post) }}"
                                    class="btn btn-primary btn-sm">Edit</a>
                            </td width="10px">
                            <td width="10px">
                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </thead>
            </table>
        </div>
        <div class="card-footer">
            {{ $posts->links() }}
        </div>
    @else
        <div class="card-body">
            <strong>There are no posts with the name: {{ $search }}.</strong>
        </div>
    @endif
</div>
