@extends('layouts.template')
@section('content')
<main id="main" class="main">
    <form action="" method="POST">
        @csrf
        <div class="row">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center p-2">
                    <div>data jalan rusak</div>
                </div>
            </div>
        </div>

        <div>
            @if (isset($reports) && count($reports) > 0)
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">id laporan</th>
                        <th scope="col">tanngal</th>
                        <th scope="col">kota</th>
                        <th scope="col">status</th>
                        <th scope="col">keterangan ml</th>
                        <th scope="col">button</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reports as $key => $report)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $report['id_laporan'] }}</td>
                        <td>{{ $report['tanggal'] }}</td>
                        <td>{{ $report['kota'] }}</td>
                        <td>{{ $report['status'] }}</td>
                        <td>{{ $report['keterangan_ml'] }}</td>
                        <td><a href="{{ route('form-edit') }}" class="btn btn-danger">edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p>Tidak ada laporan yang ditemukan.</p>
            @endif
        </div>
    </form>
</main>
@endsection
