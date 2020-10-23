@extends('layouts.app')


@section('content')


<div class="card-group">
    <div class="row">

        <div class="card ">
            <img src="{{Storage::url($post->img)}}" class="card-img-top" alt="{{$post->title}}">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->body}}</p>
                <p class="card-text">{{$post->user->name}}</p>
                
                <a href="{{route('guests.show', $post->slug)}}" class="btn btn-primary">Dettagli</a>
            </div>
        </div>
    </div>
</div>
@endsection