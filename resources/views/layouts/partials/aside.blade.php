<div class="d-flex flex-row flex-wrap">
@foreach ($users as $user)
    <a href="{{ route('user.show', $user->id) }}">
        <img data-toggle="tooltip" data-placement="top" title="{{$user->name}}" src="https://picsum.photos/25/25?random={{$user->id}}" class="rounded-circle m-2" alt="{{$user->name}}">
    </a>
@endforeach
</div>