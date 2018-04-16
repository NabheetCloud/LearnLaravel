@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-primary">Go Back</a>
<div class="well">
        <h3>{{$post->title}}</h3>
               
        </div>
        <div>
            {{$post->body}}
        </div>
        <hr>
        <small>Written on {{$post->created_at}}</small>
@endsection 