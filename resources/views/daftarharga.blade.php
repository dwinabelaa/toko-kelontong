@extends('templates.base')

@section('container')
    <div class="session mt-3 ms-5 me-5">
        <h4>Daftar Harga</h4>
        <table class="table border bg-white">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_barang as $item)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $item['barang'] }}</td>
                        <td>{{ $item['harga'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
