@extends ('layouts.main')

@section ('content')
<div class="btn btn-warning m-3"><a href="{{url('posts')}}">Go back</a></div> {{-- this url works but the regular one messes up getting to the root folder --}}
<div class="card p-3">
    <h3 class="card-title">{{$post->title}}</h3>
    <small class="card-text mb-3">Written on {{$post->created_at}} </small>
    <div class="card-text">{{$post->body}}</div>


</div>  
@endsection


