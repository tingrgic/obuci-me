@extends('layouts.app')


@section('content')
    <div>
    <h3 class="mt-3">Favourites Details</h3>
    <ul>
        <li>Name: {{ $favourite->name }} </li>
        <li>OutfitID: {{ $favourite->outfit_id }}</li>       
    </ul>

    <a href="{{ route('favourites.index') }}">Back</a> 
    
    </div>
@endsection