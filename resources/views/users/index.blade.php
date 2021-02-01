@extends('layouts.app')


@section('content')
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users->items() as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection

