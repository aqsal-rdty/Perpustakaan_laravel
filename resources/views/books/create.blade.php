@extends('layout')

@section('content')
<h1>Tambah Buku</h1>
<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <label for="title">Judul:</label>
    <input type="text" name="title" required>
    <label for="author">Penulis:</label>
    <input type="text" name="author" required>
    <label for="year">Tahun:</label>
    <input type="number" name="year" required>
    <button type="submit">Simpan</button>
</form>
@endsection
