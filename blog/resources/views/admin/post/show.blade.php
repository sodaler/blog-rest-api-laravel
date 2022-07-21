@extends('layouts.admin')

@section('content')
    <div>
        <div>{{ $post->id }}. {{ $post->title }}</div>
        <div>{{ $post->content }}</div>
    </div>
    <div>
        <a href="{{ route('admin.post.edit', $post->id) }}">Изменить</a>
    </div>
    <div>
        <form action="{{ route('admin.post.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Удалить" class="btn btn-danger">
        </form>
    </div>
    <div>
        <a href="{{ route('admin.post.index') }}">Вернуться</a>
    </div>
@endsection
