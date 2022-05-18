<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the role name']) !!}
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<h2 class="h3">Role List:</h2>
@foreach ($permissions as $permission)
    <div>
        <label>
            {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
            {{ $permission->description }}
        </label>
    </div>
@endforeach
