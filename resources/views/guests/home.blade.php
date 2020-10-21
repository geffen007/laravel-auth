@extends('layouts.app')
@section('content')
    <div class="display-4 p-5 text-center">
        Benventuo nel mio fantastico Blog
    </div>

    @guest
        <p class="lead text-center">Guest</p>
    @else
        <p class="lead text-center"> il tuo nome é: {{ Auth::user()->name }}</p>
    @endguest
@endsection