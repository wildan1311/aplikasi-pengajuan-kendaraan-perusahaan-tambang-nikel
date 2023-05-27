@extends('admin')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <h2 class="font-weight-bold">Daftar Kendaraan</h2>
        </div>
        <div class="card-body">
            <table id="myTable" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kendaraan</th>
                        <th>Jenis Kendaraan</th>
                        <th>Nomor Polisi</th>
                        <th>Tersedia</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kendaraan as $kendaraan)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$kendaraan->nama_kendaraan}}</td>
                        <td>{{$kendaraan->jenis_kendaraan}}</td>
                        <td>{{$kendaraan->no_plat}}</td>
                        <td>{{$kendaraan->total}}</td>
                        <td><a href="/detail-kendaraan/{{$kendaraan->id}}" class="btn btn-primary">Detail</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
