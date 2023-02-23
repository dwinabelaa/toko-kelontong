@extends('templates.base')

@section('container')
    {
    <!-- Barang -->
    <div class="session mt-3 me-5">
        <h4 class="ms-5">Barang</h4>
        <ul class="list-group ms-5 me-5 mt-3">
            <li class="list-group-item" style="background-color: #D989B5;" aria-current="true">Makanan Pokok
            </li>
            @foreach ($data_barang as $item)
                <li class="list-group-item">{{ $item['barang'] }}</li>
            @endforeach
        </ul>

        <ul class="list-group ms-5 me-5 mt-3">
            <li class="list-group-item" style="background-color: #D989B5;" aria-current="true">Minuman</li>
            @foreach ($data_barang as $item)
                <li class="list-group-item">{{ $item['barang'] }}</li>
            @endforeach
        </ul>
    </div>
    }
@endsection
