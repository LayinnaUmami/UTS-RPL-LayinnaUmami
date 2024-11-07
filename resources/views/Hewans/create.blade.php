@extends('layout')

@section('title', 'Create Hewan')

@section('content')
    <h2 class="mb-4">Create Hewan</h2>

    <form action="{{ route('hewans.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="idHewan" class="form-label">ID Hewan</label>
            <input type="text" name="idHewan" id="idHewan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="namaHewan" class="form-label">Nama Hewan</label>
            <input type="text" name="namaHewan" id="namaHewan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jenisHewan" class="form-label">Jenis Hewan</label>
            <input type="text" name="jenisHewan" id="jenisHewan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="idPemilik" class="form-label">ID Pemilik</label>
            <input type="text" name="idPemilik" id="idPemilik" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save a New Data</button>
    </form>
@endsection
