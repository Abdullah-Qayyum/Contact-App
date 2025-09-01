@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Contact Details</h1>
    <p><strong>Name:</strong> {{ $contacts->name }}</p>
    <p><strong>Email:</strong> {{ $contacts->email }}</p>
    <p><strong>Phone:</strong> {{ $contacts->phone }}</p>

    <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
