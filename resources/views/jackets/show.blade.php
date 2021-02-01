@extends('layouts.app')


@section('content')
    <div>
    <h3 class="mt-3">Jackets Details</h3>
    <ul>
        <li>Manufacturer: {{ $jacket->manufacturer }} </li>
        <li>Model name: {{ $jacket->model_name }}</li>
        <li>Colour: {{ $jacket->colour }}</li>
        <li>Size: {{ $jacket->size }}</li>
    </ul>

    <a href="{{ route('jackets.index') }}">Back</a> 
    </div>
@endsection