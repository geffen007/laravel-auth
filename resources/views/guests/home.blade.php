@extends('layouts.app')
@section('content')
    <div class="display-4 p-5 text-center">
        Benventuo nel mio Blog
    </div>

    @guest
        <p class="lead text-center">Guest</p>
    @else
        <p class="lead text-center"> il tuo nome é: {{ Auth::user()->name }}</p>
    @endguest
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