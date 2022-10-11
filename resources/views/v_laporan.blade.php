@extends('layouts.main')
@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{$title}}</h1>

    {{-- Data Master --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Master</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th rowspan="2">NO</th>
                          <th rowspan="2">ALTERNATIF</th>
                          <th colspan="5">KRITERIA</th>
                        </tr>
                        <tr>
                            @foreach ($kriteria as $kr)
                                <th>C{{$loop->iteration}}</th>
                            @endforeach
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                            <th colspan="2">Jenis & Bobot</th>
                            @foreach ($kriteria as $kr)
                                <th>{{ $kr->jenis_kriteria }} ({{ $kr->bobot }}%)</th>
                            @endforeach
                        </tr>
                      </tfoot>
                      <tbody>
                          {{-- @foreach ($alternatif as $al)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$al->nama_mahasiswa}}</td>
                                @foreach ($penilaian as $item)
                                    @if ($item->alternatif_id == $al->id)
                                        <td>{{$item->sub_kriteria->nilai}}</td>
                                    @else
                                        // <?php continue; ?>
                                    @endif
                                @endforeach
                            </tr>
                            @endforeach --}}

                            @foreach ($penilaian as $pen)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$pen->alternatif->nama_mahasiswa}}</td>
                                    <td>{{$pen->sub_kriteria1->nilai}}</td>
                                    <td>{{$pen->sub_kriteria2->nilai}}</td>
                                    <td>{{$pen->sub_kriteria3->nilai}}</td>
                                    <td>{{$pen->sub_kriteria4->nilai}}</td>
                                    <td>{{$pen->sub_kriteria5->nilai}}</td>
                                </tr>
                            @endforeach
                      </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Normalisasi --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Normalisasi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th rowspan="2">NO</th>
                          <th rowspan="2">ALTERNATIF</th>
                          <th colspan="5">KRITERIA</th>
                        </tr>
                        <tr>
                            @foreach ($kriteria as $kr)
                                <th>C{{$loop->iteration}}</th>
                            @endforeach
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                            <th colspan="2">Jenis & Bobot</th>
                            @foreach ($kriteria as $kr)
                                <th>{{ $kr->jenis_kriteria }} ({{ $kr->bobot }}%)</th>
                            @endforeach
                        </tr>
                      </tfoot>
                      <tbody>
                        @foreach ($penilaian as $pen)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$pen->alternatif->nama_mahasiswa}}</td>
                                <td>{{round($pen->sub_kriteria1->nilai/$normalisasi[0],4)}}</td>
                                <td>{{round($pen->sub_kriteria2->nilai/$normalisasi[1],4)}}</td>
                                <td>{{round($pen->sub_kriteria3->nilai/$normalisasi[2],4)}}</td>
                                <td>{{round($pen->sub_kriteria4->nilai/$normalisasi[3],4)}}</td>
                                <td>{{round($pen->sub_kriteria5->nilai/$normalisasi[4],4)}}</td>
                            </tr>
                        @endforeach
                      </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Penentuan Skor Kinerja --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Penentuan Skor Kinerja</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            @foreach ($kriteria as $kri)
                                <th>{{$kri->jenis_kriteria}}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penilaian as $pen)
                            <tr>
                                <th>{{$pen->alternatif->nama_mahasiswa}}</th>
                                <td>{{round($pen->sub_kriteria1->nilai/$normalisasi[0] * ($pen->sub_kriteria1->kriteria->bobot/100), 4)}}</td>
                                <td>{{round($pen->sub_kriteria2->nilai/$normalisasi[1] * ($pen->sub_kriteria2->kriteria->bobot/100), 4)}}</td>
                                <td>{{round($pen->sub_kriteria3->nilai/$normalisasi[2] * ($pen->sub_kriteria3->kriteria->bobot/100), 4)}}</td>
                                <td>{{round($pen->sub_kriteria4->nilai/$normalisasi[3] * ($pen->sub_kriteria4->kriteria->bobot/100), 4)}}</td>
                                <td>{{round($pen->sub_kriteria5->nilai/$normalisasi[4] * ($pen->sub_kriteria5->kriteria->bobot/100), 4)}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- <!-- Rangking --> --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Rangking</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Mahasiswa</th>
                            <th>Benefit</th>
                            <th>Cost</th>
                            <th>Skor</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Mahasiswa</th>
                            <th>Benefit</th>
                            <th>Cost</th>
                            <th>Skor</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($penilaian as $pen)
                            <tr>
                                <td>{{$pen->alternatif->nama_mahasiswa}}</td>
                                <td>
                                    @php
                                        $ben = 0;
                                        if ($pen->sub_kriteria1->kriteria->jenis_kriteria == 'Benefit') {
                                            $ben += (($pen->sub_kriteria1->nilai/$normalisasi[0]) * ($pen->sub_kriteria1->kriteria->bobot/100));
                                        }
                                        if ($pen->sub_kriteria2->kriteria->jenis_kriteria == 'Benefit') {
                                            $ben += (($pen->sub_kriteria2->nilai/$normalisasi[1]) * ($pen->sub_kriteria2->kriteria->bobot/100));
                                        }
                                        if ($pen->sub_kriteria3->kriteria->jenis_kriteria == 'Benefit') {
                                            $ben += (($pen->sub_kriteria3->nilai/$normalisasi[2]) * ($pen->sub_kriteria3->kriteria->bobot/100));
                                        }
                                        if ($pen->sub_kriteria4->kriteria->jenis_kriteria == 'Benefit') {
                                            $ben += (($pen->sub_kriteria4->nilai/$normalisasi[3]) * ($pen->sub_kriteria4->kriteria->bobot/100));
                                        }
                                        if ($pen->sub_kriteria5->kriteria->jenis_kriteria == 'Benefit') {
                                            $ben += (($pen->sub_kriteria5->nilai/$normalisasi[4]) * ($pen->sub_kriteria5->kriteria->bobot/100));
                                        }
                                        echo round($ben, 4);
                                    @endphp
                                </td>
                                <td>
                                    @php
                                        $cos = 0;
                                        if ($pen->sub_kriteria1->kriteria->jenis_kriteria == 'Cost') {
                                            $cos += (($pen->sub_kriteria1->nilai/$normalisasi[0]) * ($pen->sub_kriteria1->kriteria->bobot/100));
                                        }
                                        if ($pen->sub_kriteria2->kriteria->jenis_kriteria == 'Cost') {
                                            $cos += (($pen->sub_kriteria2->nilai/$normalisasi[1]) * ($pen->sub_kriteria2->kriteria->bobot/100));
                                        }
                                        if ($pen->sub_kriteria3->kriteria->jenis_kriteria == 'Cost') {
                                            $cos += (($pen->sub_kriteria3->nilai/$normalisasi[2]) * ($pen->sub_kriteria3->kriteria->bobot/100));
                                        }
                                        if ($pen->sub_kriteria4->kriteria->jenis_kriteria == 'Cost') {
                                            $cos += (($pen->sub_kriteria4->nilai/$normalisasi[3]) * ($pen->sub_kriteria4->kriteria->bobot/100));
                                        }
                                        if ($pen->sub_kriteria5->kriteria->jenis_kriteria == 'Cost') {
                                            $cos += (($pen->sub_kriteria5->nilai/$normalisasi[4]) * ($pen->sub_kriteria5->kriteria->bobot/100));
                                        }
                                        echo round($cos, 4);
                                    @endphp
                                </td>
                                <td>
                                    @php
                                        $tot = 0;
                                        if ($cos == 0) {
                                            echo round($ben, 4);
                                        } elseif ($ben == 0) {
                                            echo round($cos, 4);
                                        } else {
                                            $tot = $ben/$cos;
                                            echo round($tot, 4);
                                        }
                                    @endphp
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
</script>
@endsection
