@extends('admin')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <h2 class="font-weight-bold">Daftar Kendaraan</h2>
        </div>
        <div class="card-body">
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Bulan</th>
                        <th>Nama Kendaraan</th>
                        <th>Jenis Kendaraan</th>
                        <th>Total Penggunaan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tablePesanan as $tablePesanan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @php
                                    $bulan = date('M', strtotime($tablePesanan->tanggal_pesan))
                                @endphp
                                {{$bulan}}
                            </td>
                            <td>{{ $tablePesanan->nama_kendaraan }}</td>
                            <td>{{ $tablePesanan->jenis_kendaraan }}</td>
                            <td>{{ $tablePesanan->total }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <h2 class="font-weight-bold">Grafik Pemesanan Kendaraan</h2>
        </div>
        <div class="card-body">
            <div>
                <canvas id="myChart">

                </canvas>
            </div>
        </div>
    </div>

    {{$chartPesanan->keys()}}
    {{$chartPesanan->values()}}
@endsection

@push('chartjs')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {{ Js::from($chartPesanan->keys()) }},
                datasets: [{
                    label: 'Total Pengajuan approve',
                    data: {{ $chartPesanan->values()}},
                    borderWidth: 1
                },]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endpush

