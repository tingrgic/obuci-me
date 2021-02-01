@extends('layouts.app')


@section('content')
<a href="{{route('users.create')}}" class="btn btn-primary mt-5">Add</a>
  <table class="table table-striped mt-3">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users->items() as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>
              <a class="btn btn-outline-primary" href="{{ route('users.show', ['user' => $user->id])}}">Details</a>

            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection

