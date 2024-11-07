@extends('layout')

@section('content')

    <h2>Edit Data Hewan</h2>

    <form action="{{ route('hewans.update', $hewan->idHewan) }}" method="POST">

        

        @csrf

        @method('PUT')

        <div>
            <label for="namaHewan">Nama Hewan:</label>
            <input type="text" id="namaHewan" name="namaHewan" value="{{ $hewan->namaHewan }}" required>
        </div>

        <div>
            <label for="jenisHewan">Jenis Hewan:</label>
            <input type="text" id="jenisHewan" name="jenisHewan" value="{{ $hewan->jenisHewan }}" required>
        </div>

        <div>
            <label for="idPemilik">ID Pemilik:</label>
            <input type="number" id="idPemilik" name="idPemilik" value="{{ $hewan->idPemilik }}" required>
        </div>

        <button type="submit">Update Data</button>
    </form>

    <a href="{{ route('hewans.index') }}">Kembali</a>
    <a href="{{ route('hewans.edit', $hewan->idHewan) }}">Edit</a>


@endsection

