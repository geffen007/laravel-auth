@extends('layouts.app')


@section('content')

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">EDIT</th>
            <th scope="col">DELETE</th>
        </tr>
    </thead>
    <tbody>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

        
        @foreach ($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>
                <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
            </td>
            <td>
                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                @csrf
                @method('DELETE')
                    <button type="submit" class="btn btn-primary">CANCELLA</button>

                </form>
            </td>
        </tr>           
        @endforeach

    </tbody>
</table>
{{ $posts->links() }}

@endsection