@extends("layout.master")
@section("title","Halaman Pasien")

@section("content")
<h1>Pasien</h1>
@if (count($pasien) > 0 )
    @foreach ($pasien as $isi)
        <li>
            Id : {{$isi->id}}<br>
            Nama : {{$isi->nama}}<br>
            Jenis Kelamin : {{$isi->jenis_kelamin}}<br>
            No HP : {{$isi->no_hp}}<br>
            Alamat : {{$isi->alamat}}<br>
        </li>
    @endforeach
@else
    Pasien tidak ditemukan
@endif
@endsection