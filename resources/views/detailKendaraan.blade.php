@extends('admin')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <h2 class="font-weight-bold">Daftar Pengajuan</h2>
        </div>
        <div class="card-body">
            <div>
                <canvas id="myChart">

                </canvas>
            </div>
        </div>
    </div>
@endsection

@push('chartjs')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {{$detailPesananKendaraan->keys()}},
                datasets: [{
                    label: 'Total Pengajuan approve',
                    data: {{ $detailPesananKendaraan->values()}},
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
