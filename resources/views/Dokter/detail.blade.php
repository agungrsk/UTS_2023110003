@extends("layout.master")
@section("title","Halaman Detail Dokter")

@section("content")
<h1>Detail Dokter</h1>
@if ($dokter)
            Id : {{$dokter->id}}<br>
            Kode : {{$dokter->kode}}<br>
            Nama : {{$dokter->nama}}<br>
            Spesialis : {{$dokter->spesialis}}<br>
@else
    Dokter tidak ditemukan
@endif
@endsection