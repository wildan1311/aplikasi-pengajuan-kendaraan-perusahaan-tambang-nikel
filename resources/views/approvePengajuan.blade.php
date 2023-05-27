@extends('admin')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <h2 class="font-weight-bold">Daftar Pengajuan</h2>
        </div>
        <div class="card-body">
            <table id="myTable" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kendaraan</th>
                        <th>Tanggal Pesan</th>
                        <th>Tanggal Kembali</th>
                        <th>Driver</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($approve as $approve)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$approve->pesan->nama}}</td>
                        <td>{{$approve->pesan->kendaraan->nama_kendaraan}}</td>
                        <td>{{$approve->pesan->tanggal_pesan}}</td>
                        <td>{{$approve->pesan->tanggal_kembali}}</td>
                        <td>{{$approve->pesan->driver}}</td>
                        <td>
                            <form action="/approve-pengajuan/{{$approve->id}}" method="POST">
                                @csrf
                                @method('PUT')
                                @if ($approve->status == 'approved' || $approve->status == 'rejected')
                                    <input type="submit" value="{{$approve->status}}" disabled>
                                @else
                                    <select name="status">
                                        <option value="approved">Approve</option>
                                        <option value="rejected">Rejected</option>
                                    </select>
                                    <input type="submit" value="Submit">
                                @endif

                            </form>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
