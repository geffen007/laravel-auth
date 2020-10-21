@extends('layouts.app')

@section('content')
<form action="{{ route('posts.store') }}" method="post">

@csrf 
@method('POST')
  <div class="form-group">

    <input type="text" name='title' class="form-control" placeholder="inserisci il titolo">

  </div>
  <div class="form-group">
    <label for="body">Password</label>
    <textarea class="form-control" name="body"  rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection