@extends('adminlte::page')

@section('title', config('app.name'))

@section('content_header')
    <h1>Edit Role: </h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'PUT']) !!}

            @include('admin.roles.partials.form')

            {!! Form::submit('Edit Role', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
@stop
