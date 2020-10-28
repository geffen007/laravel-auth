@extends('layouts.app')


@section('content')


<div class="card-group">
    <div class="row">

    @foreach($posts as $post)

        <div class="col-sm-4 pt-3">
            <div class="card ">
                <img src="{{Storage::url($post->img)}}" class="card-img-top" alt="{{$post->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{Str::substr($post->body, 0, 200)."..."}}</p>
                    <p class="card-text">{{$post->user->name}}</p>
                    <a href="{{route('guests.show', $post->slug)}}" class="btn btn-primary">Dettagli</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection

@section('aside')
    @foreach ($users as $user)
        <div>
            <img src="https://picsum.photos/100/100?random={{$user->id}}" class="rounded-circle" alt="{{$user->name}}">
            <div class="card-body">
                <h5 class="card-title">{{$user->name}}</h5>
                <a href="#" class="btn btn-primary">Visualizza</a>
            </div>
        </div>
    @endforeach
@endsection

