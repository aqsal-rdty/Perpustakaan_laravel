@extends('layout')

@section('content')
<h1>Edit Buku</h1>
<form action="{{ route('books.update', $book) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Judul:</label>
    <input type="text" name="title" value="{{ $book->title }}" required>
    <label for="author">Penulis:</label>
    <input type="text" name="author" value="{{ $book->author }}" required>
    <label for="year">Tahun:</label>
    <input type="number" name="year" value="{{ $book->year }}" required>
    <button type="submit">Update</button>
</form>
@endsection
