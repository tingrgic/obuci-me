@extends('layouts.app')


@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">OutfitID</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($favourites->items() as $favourite)
        <tr>
          <td>{{ $favourite->id }}</td>
          <td>{{ $favourite->name }}</td>
          <td>{{ $favourite->outfit_id }}</td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection