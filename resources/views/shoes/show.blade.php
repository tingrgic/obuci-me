@extends('layouts.app')


@section('content')
    <div>
    <h3 class="mt-3">Shoe Details</h3>
    <ul>
        <li>Manufacturer: {{ $shoe->manufacturer }} </li>
        <li>Model name: {{ $shoe->model_name }}</li>
        <li>Colour: {{ $shoe->colour }}</li>
        <li>Size: {{ $shoe->size }}</li>
    </ul>

    <a href="{{ route('shoes.index') }}">Back</a> 
    </div>
@endsection