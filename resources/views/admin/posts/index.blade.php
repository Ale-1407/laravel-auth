@extends('layouts.app')
@section('content')

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#id</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
           @foreach ($data as $elem)
          <tr>
            <td>{{$elem->id}}</td>
            <td>{{$elem->title}}</td>
            <td>{{$elem->body}}</td>
            <td>icone</td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <div class="d-flex justify-content-center">
        {{ $data->links() }}
      </div>


@endsection
