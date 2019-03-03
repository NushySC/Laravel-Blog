@extends ('layouts.main')

@section ('content')

<div class="display-4 p-3">Posts</div>
    
@if(count($posts) > 0)
    @foreach($posts as $post)
    <div class="card p-2">
        <a href="posts/{{$post->id}}"><h3 class="card-title">{{$post->title}}</h3></a>
        <small class="card-text">Written on {{$post->created_at}} </small>

    </div>
    @endforeach
    {{-- {{$posts->links()}}  if think it only works if the result are sorted by somethign but not retrieving all--}}


@else
<p>No posts found</p>

@endif

@endsection