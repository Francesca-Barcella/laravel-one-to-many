@extends('layouts.admin')

@section('content')

@if($project->cover_image)
<img src="{{asset('storage/'. $project->cover_image)}}" alt="" class="img-fluid">
@else
<div class="placeholder p-5 bg-secondary">placeholder</div>
@endif

<h1>Title project: {{$project->title}}</h1>
<h5>Slug Title project: {{$project->slug}}</h5>
<div class="type"> <strong>Type project:</strong> {{$project->type ? $project->type->name : 'Uncatecorized'}}</div>
<div class="content"> <strong>Descritpion project:</strong> {{$project->description}}</div>

@endsection