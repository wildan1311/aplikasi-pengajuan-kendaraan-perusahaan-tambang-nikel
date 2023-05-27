@extends('admin')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <h2 class="font-weight-bold">Tambah Pengajuan Kendaraan</h2>
        </div>
        <div class="card-body">
            <form action="/kendaraan" method="POST">
                @csrf
                <label for="Nama"> Nama Kendaraan </label>
                <input type="text" name="nama_kendaraan" id="" class="form-control"><br>
                <label for="kendaraan"> Kendaraan </label>
                <select name="jenis_kendaraan" id="" class="form-control">
                    <option value="orang">Kendaraan Orang</option>
                    <option value="barang">Kendaraan Barang</option>
                </select><br>
                <label for="no_plat"> No Polisi </label>
                <input type="text" name="no_plat" id="" class="form-control"><br>
                <div class="d-flex align-item-end justify-content-end">
                    <input type="submit" name="submit" id="" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
