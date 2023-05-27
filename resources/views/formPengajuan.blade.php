@extends('admin')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <h2 class="font-weight-bold">Tambah Pengajuan Kendaraan</h2>
        </div>
        <div class="card-body">
            <form action="/form-pengajuan" method="POST">
                @csrf
                <label for="Nama"> Nama </label>
                <input type="text" name="nama" id="" class="form-control"><br>
                <label for="tanggal_pesan"> Tanggal Pesan </label>
                <input type="date" name="tanggal_pesan" id="" class="form-control"><br>
                <label for="tanggal_kembali"> Tanggal Kembali </label>
                <input type="date" name="tanggal_kembali" id="" class="form-control"><br>
                <label for="kendaraan"> Kendaraan </label>
                <select name="kendaraan_id" id="" class="form-control">
                    @foreach ($kendaraan as $kendaraan)
                        <option value="{{$kendaraan->id}}">{{$kendaraan->nama_kendaraan}} - Kendaraan {{$kendaraan->jenis_kendaraan}}</option>
                    @endforeach
                </select><br>
                <label for="driver_name"> Nama Driver </label>
                <input type="text" name="driver_name" id="" class="form-control"><br>
                <label for="Nama"> Nama Approval 1 </label>
                <select name="approval1_id" id="" class="form-control">
                    @foreach ($approval1 as $approval)
                        <option value="{{$approval->id}}">{{$approval->name}}</option>
                    @endforeach
                </select><br>
                <label for="Nama"> Nama Approval 2</label>
                <select name="approval2_id" id="" class="form-control">approval->name
                    @foreach ($approval2 as $approval)
                        <option value="{{$approval->id}}">{{$approval->name}}</option>
                    @endforeach
                </select><br>
                <div class="d-flex align-item-end justify-content-end">
                    <input type="submit" name="submit" id="" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
