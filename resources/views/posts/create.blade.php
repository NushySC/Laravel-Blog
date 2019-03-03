@extends ('layouts.main')

@section ('content')

<div class="display-4 p-3">Create Post</div>

{{-- {{ Form::open(array('url' => 'foo/bar')) }} --}}

{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}

<div class="form-group">
    {{ Form::label('title', 'Title')}}
    {{ Form::text('title', '', [ 'class' => 'form-control', 'placeholder' => 'title'])}}
</div>

<div class="form-group">
        {{ Form::label('body', 'Body')}}
        {{ Form::textarea('body', '', [ 'class' => 'form-control', 'placeholder' => 'body'])}}
    </div>

{!! Form::close() !!}


@endsection