@extends('layouts.main')

@section('container')
    {{-- tempat content --}}
    <h1>Tabel Data Makanan</h1>
    <table class="table" id="makanan-table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Jenis</th>
                <th scope="col">Harga</th>
                <th scope="col">Kalori</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $makanan->nama }}</td>
                    <td>{{ $makanan->jenis }}</td>
                    <td>{{ $makanan->harga }}</td>
                    <td>{{ $makanan->kalori }}</td>
                    <td>
                        <a type="button" class="btn btn-primary" href="/makanan/all/">Back</a>
                    </td>
                </tr>
        </tbody>
    </table>
@endsection

