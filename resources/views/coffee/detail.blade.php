@extends('layouts.main')

@section('container')
    {{-- tempat content --}}
    <h1>Tabel Data Kopi</h1>
    <table class="table" id="coffee-table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Jenis</th>
                <th scope="col">Harga</th>
                <th scope="col">Asal Negara</th>
                <th scope="col">Brand</th>
                <th scope="col">Expirated</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $coffee->nama }}</td>
                    <td>{{ $coffee->jenis }}</td>
                    <td>{{ $coffee->harga }}</td>
                    <td>{{ $coffee->asal_kopi }}</td>
                    <td>{{ $coffee->brand }}</td>
                    <td>{{ $coffee->waktu_expirated }}</td>
                    <td>
                        <a type="button" class="btn btn-primary" href="/coffee/all/">Back</a>
                    </td>
                </tr>
        </tbody>
    </table>
@endsection
