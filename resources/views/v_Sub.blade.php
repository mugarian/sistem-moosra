@extends('layouts.main')
@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{$title}}</h1>

    <!-- DataTales Example -->
    @foreach ($kriteria as $kr)
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="card-header d-flex align-items-center justify-content-between py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{$kr->nama_kriteria}}</h6>
                    <a href="/subkriteria/tambah/{{$kr->id}}" class="btn btn-primary btn-sm">Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Sub Kriteria</th>
                                <th>Nilai</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subkriteria as $sub)
                                @if ($sub->kriteria_id == $kr->id)
                                    <tr>
                                        <td>{{ $sub->nama_sub}}</td>
                                        <td>{{ $sub->nilai}}</td>
                                        <td>
                                            <a href="/subkriteria/ubah/{{$sub->id}}" class="btn btn-warning btn-sm">
                                                <i class="fa-solid fa-pencil"></i> Ubah
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
