@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <h1>Contact Details</h1>
    <p><strong>Name:</strong> {{ $contacts->name }}</p>
    <p><strong>Email:</strong> {{ $contacts->email }}</p>
    <p><strong>Phone:</strong> {{ $contacts->phone }}</p>

    <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
