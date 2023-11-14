@extends('layouts.main')

@section('container')
    {{-- tempat content --}}
    <h1>Tabel Data Makanan</h1>
    <table class="table" id="makanan-table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($makanan as $food)
                <tr>
                    <td>{{ $food->nama }}</td>
                    <td>{{ $food->harga }}</td>
                    <td>
                        <a type="button" class="btn btn-primary" href="/makanan/detail/{{$food->id}}">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
