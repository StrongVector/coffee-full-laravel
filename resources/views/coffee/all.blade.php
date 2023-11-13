@extends('layouts.main')

@section('container')
    {{-- tempat content --}}
    <h1>Tabel Data Kopi</h1>
    <table class="table" id="coffee-table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coffee as $drinks)
                <tr>
                    <td>{{ $drinks->nama }}</td>
                    <td>{{ $drinks->harga }}</td>
                    <td>
                        <a type="button" class="btn btn-primary" href="/coffee/detail/{{$drinks->id}}">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
