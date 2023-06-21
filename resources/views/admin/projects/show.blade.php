@extends("layouts.app")


@section("content")


<h1>{{$project->title}}</h1>
<h5>{{$project->languages}}</h5>
<h5>{{$project->end_date}}</h5>
<p>{{$project->description}}</p>




@endsection
