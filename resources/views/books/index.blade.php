@extends('layout')

@section('content')
<h1>Daftar Buku</h1>
<a href="{{ route('books.create') }}">Tambah Buku</a>
<table>
    <tr>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun</th>
        <th>Aksi</th>
    </tr>
    @foreach ($books as $book)
    <tr>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->year }}</td>
        <td>
            <a href="{{ route('books.edit', $book) }}">Edit</a>
            <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
