@extends('layouts.app')
@section('content')
    {{-- posts --}}
    <h1>Posts</h1>
    @foreach ($data as $elem)
    <div>
        {{ $elem->title }}
    </div>
    @endforeach

    {{ $data->links() }}

@endsection
