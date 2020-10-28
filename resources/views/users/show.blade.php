@extends('layouts.app')

@section('content')

<div class="card-group">
    <div class="row">
        <div class="card ">
          
            <div class="card-body">
                <h5 class="card-title">{{$user->name}}</h5>
                <p class="card-text">{{$user->email}}</p>
                <p class="card-text">{{$user->role->role}}</p> 
            </div>
        </div>
    </div>
</div>

@endsection

@section('aside')
@endsection