@extends('layout')

@section('content')
    <div class="full-section">
        @foreach($cars as $car)
            <div class="name">{{ $car->id }}){{ $car->name }}</div>
            <div class="model">{{ $car->model }}</div>
        @endforeach
    </div>
    <div class="full-section-insert">
        <form action="car" method="POST">
            @csrf
            <label for="fname">Name:</label>
            <input type="text" id="fname" name="name"><br>
            <label for="fmodel">Model:</label>
            <input type="text" id="fmodel" name="model"><br>
            <button type="submit">Insert Model</button>
        </form>
    </div>
@endsection
