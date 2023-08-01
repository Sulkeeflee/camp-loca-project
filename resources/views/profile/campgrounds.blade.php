<!-- resources/views/campgrounds/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Campgrounds</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Location</th>
                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach ($campgrounds as $campground)
                <tr>
                    <td>{{ $campground->name }}</td>
                    <td>{{ $campground->location }}</td>
                    <!-- Add more columns as needed -->
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
