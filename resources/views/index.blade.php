@extends('templates.base')

@section('container')
    <div class="row">
        <!-- Profile-->
        <div class="col-md-3 text-center p-5" style="background-color: #9D3C72; height: 90vh">
            <p class="text-white fs-5">Profile</p>
            <img width="200" src="img/picture.jpg" alt="Photo" class="rounded-circle">
        </div>

        <div class="col text-center">
            <div class="fs-4 mt-5 fw-bold">
                <h2>Kunjungi Toko Kami</h2>
            </div>

            <!-- Profile Toko-->
            <div class="session mt-3">
                <h4>Profile Toko</h4>
                <img width="500" class="img-thumbnail mx-auto mt-3" src="img/toko.jpg" alt="Toko">
            </div>
        </div>
    </div>
@endsection
