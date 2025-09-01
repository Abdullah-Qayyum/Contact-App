@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Contact</h1>
    <form action="{{ route('contacts.update', $contacts->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $contacts->name }}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $contacts->email }}" required>
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $contacts->phone }}">
        </div>
        <button class="btn btn-success">Update</button>
    </form>
</div>
@endsection
