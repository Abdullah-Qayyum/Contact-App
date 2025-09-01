@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Contact Details</h1>
    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Phone:</strong> {{ $contact->phone }}</p>

    <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
