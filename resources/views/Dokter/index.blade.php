@extends("layout.master")
@section("title","Halaman Dokter")

@section("content")
<h1>Dokter</h1>
@if (count($dokter) > 0 )
    @foreach ($dokter as $item)
        <li>
            Id : {{$item->id}}<br>
            Kode : {{$item->kode}}<br>
            Nama : {{$item->nama}}<br>
            Spesialis : {{$item->spesialis}}<br>
            
        </li>
    @endforeach
@else
    Dokter tidak ditemukan
@endif
@endsection