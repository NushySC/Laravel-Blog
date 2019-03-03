@extends ('layouts.main')

@section ('content')

<div class="display-4 p-3"> {{$title}}</div>

@if(count($services) > 0)

<ul class="list-group">
    @foreach($services as $service)
    <li class="list-group-item">{{$service}}</li>
    @endforeach
</ul>

@endif

@endsection