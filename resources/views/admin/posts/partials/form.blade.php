<div class="form-group">
    {!! Form::label('name', 'Title') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the post title']) !!}
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Enter the slug title', 'readonly']) !!}
    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset ($post->image)
                <img id="picture" src="{{ Storage::url($post->image->url) }}" alt="">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2017/10/10/07/48/hills-2836301_960_720.jpg" alt="">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Post image') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            @error('file')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores officia deserunt, dicta rem quaerat dolores
            ducimus iusto fugiat facilis provident officiis quo nam quas corrupti. Iste ducimus aliquid ab ipsum.</p>
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extract') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-group']) !!}
    @error('extract')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'Body') !!}
    {!! Form::textarea('body', null, ['class' => 'form-group']) !!}
    @error('body')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Category') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    @error('category_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Tags</p>
    @foreach ($tags as $tag)
        <label>
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>
    @endforeach
    @error('tags')
        <br>
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Status</p>
    <label>
        {!! Form::radio('status', 1, true) !!}
        Unpublished
    </label>
    <label>
        {!! Form::radio('status', 2) !!}
        Published
    </label>
    @error('status')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
