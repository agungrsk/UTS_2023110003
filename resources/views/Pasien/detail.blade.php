@extends("layout.master")
@section("title","Halaman Detail Pasien")

@section("content")
<h1>Detail Pasien</h1>
@if ($pasien)
            Id : {{$pasien->id}}<br>
            Nama : {{$pasien->nama}}<br>
            Jenis Kelamin : {{$pasien->jenis_kelamin}}<br>
            No HP : {{$pasien->no_hp}}<br>
            Alamat : {{$pasien->alamat}}<br>
@else
    Pasien tidak ditemukan
@endif
@endsection