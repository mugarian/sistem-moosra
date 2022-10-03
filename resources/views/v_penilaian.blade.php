@extends('layouts.main')
@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{$title}}</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header d-flex align-items-center justify-content-between py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Penilaian</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mahasiswa</th>
                            <th>Nilai</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Mahasiswa</th>
                            <th>Nilai</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($alternatif as $al)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $al->nama_mahasiswa}}</td>
                                <td>
                                    <table>
                                        @foreach ($kriteria as $kr)
                                        <tr>
                                            <td>{{$kr->nama_kriteria}}</td>
                                            <td>:</td>
                                            @foreach ($subkriteria as $sub)
                                                @if ($sub->kriteria_id == $kr->id)
                                                    <td>{{$sub->nama_sub}}</td>
                                                    <?php break; ?>
                                                @endif
                                            @endforeach
                                        </tr>
                                        @endforeach
                                    </table>
                                </td>
                                <td>
                                    <span class="d-flex align-items-center justify-content-start">
                                        @if ($penilaian->count())
                                            @foreach ($penilaian as $nilai)
                                                @if ($nilai->alternatif_id == $al->id)
                                                    <a href="/penilaian/ubah/{{$al->id}}" class="btn btn-warning btn-sm mx-1">
                                                        <i class="fa-solid fa-pencil"></i> Ubah
                                                    </a>
                                                    <?php break; ?>
                                                @else
                                                    <a href="/penilaian/tambah/{{$al->id}}" class="btn btn-success btn-sm mx-1">
                                                        <i class="fa-solid fa-plus"></i> Nilai
                                                    </a>
                                                    <?php break; ?>
                                                @endif
                                            @endforeach
                                        @else
                                            <a href="/penilaian/tambah/{{$al->id}}" class="btn btn-success btn-sm mx-1">
                                                <i class="fa-solid fa-plus"></i> Nilai
                                            </a>
                                        @endif
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
