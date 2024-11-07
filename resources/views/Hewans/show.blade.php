@extends('layout')

@section('content')
    <h2>Detail Hewan</h2>
    <p>Nama Hewan: {{ $hewan->namaHewan }}</p>
    <p>Jenis Hewan: {{ $hewan->jenisHewan }}</p>
    <p>ID Pemilik: {{ $hewan->idPemilik }}</p>
    <a href="{{ route('hewans.index') }}">Kembali</a>
@endsection
