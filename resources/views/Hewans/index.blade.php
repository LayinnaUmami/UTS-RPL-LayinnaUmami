@extends('layout')

@section('title', 'Daftar Hewan')

@section('content')
    <h2 class="mb-4">Daftar Hewan</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Hewan</th>
                <th>Jenis Hewan</th>
                <th>ID Pemilik</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hewans as $hewan)
                <tr>
                    <td>{{ $hewan->idHewan }}</td>
                    <td>{{ $hewan->namaHewan }}</td>
                    <td>{{ $hewan->jenisHewan }}</td>
                    <td>{{ $hewan->idPemilik }}</td>
                    <td>
                        <a href="{{ route('hewans.edit', $hewan->idHewan) }}" class="btn btn-link">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('hewans.destroy', $hewan->idHewan) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link" style="color: red;">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('hewans.create') }}" class="btn btn-primary">Buat Hewan Baru</a>
@endsection
