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
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
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
                              <td>{{$loop->iteration}}</td>
                              <td>{{$al->nama_mahasiswa}}</td>
                                {{-- AKSI --}}
                              <td>
                                <table>
                                    <tr>
                                        <td>{{$kriteria[0]->nama_kriteria}}</td>
                                        <td>:</td>
                                        @foreach ($penilaian as $pen)
                                            @if ($pen->alternatif_id == $al->id)
                                                <td>{{$pen->sub_kriteria1->nama_sub}}</td>
                                            @endif
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>{{$kriteria[1]->nama_kriteria}}</td>
                                        <td>:</td>
                                        @foreach ($penilaian as $pen)
                                            @if ($pen->alternatif_id == $al->id)
                                                <td>{{$pen->sub_kriteria2->nama_sub}}</td>
                                            @endif
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>{{$kriteria[2]->nama_kriteria}}</td>
                                        <td>:</td>
                                        @foreach ($penilaian as $pen)
                                            @if ($pen->alternatif_id == $al->id)
                                                <td>{{$pen->sub_kriteria3->nama_sub}}</td>
                                            @endif
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>{{$kriteria[3]->nama_kriteria}}</td>
                                        <td>:</td>
                                        @foreach ($penilaian as $pen)
                                            @if ($pen->alternatif_id == $al->id)
                                                <td>{{$pen->sub_kriteria4->nama_sub}}</td>
                                            @endif
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>{{$kriteria[4]->nama_kriteria}}</td>
                                        <td>:</td>
                                        @foreach ($penilaian as $pen)
                                            @if ($pen->alternatif_id == $al->id)
                                                <td>{{$pen->sub_kriteria5->nama_sub}}</td>
                                            @endif
                                        @endforeach
                                </tr>
                                </table>
                                {{-- <table>
                                    @foreach ($kriteria as $kr)
                                        <tr>
                                            <td>{{ $kr->nama_kriteria }}</td>
                                            <td>:</td>
                                                @foreach ($penilaian as $pen)
                                                    @if ($pen->alternatif_id == $al->id)
                                                        @if ($pen->sub_kriteria->kriteria_id == $kr->id)
                                                            <td>{{ $pen->sub_kriteria->nama_sub }}</td>
                                                        @endif
                                                    @endif
                                                @endforeach
                                        </tr>
                                    @endforeach
                                </table> --}}
                               </td>
                               <td>
                                   <a href="/penilaian/{{$al->id}}" class="btn btn-warning btn-sm">
                                       <i class="fa-solid fa-pencil"></i> Ubah
                                   </a>
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
