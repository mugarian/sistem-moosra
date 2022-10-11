@extends('layouts.main')
@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-center text-primary">Selamat Datang</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="{{ asset('template') }}/img/undraw_posting_photo.svg" alt="...">
                    </div>
                    <p>
                        Sistem Pendukung Keputusan (SPK) merupakan salah satu bagian dari sistem informasi berbasis komputer yang interaktif dan berguna khususnya dalam pengambilan keputusan, kami menggunakan SPK untuk pemilihan mahasiswa lulusan terbaik di Politeknik Negeri Subang. Sistem ini digunakan untuk membantu pengambilan keputusan dalam situasi semi terstruktur dan situasi yang tidak terstruktur, dimana tak seorangpun tahu secara pasti bagaimana keputusan seharusnya dibuat.
                    </p>
                    <p>
                        Menurut penelitian sebelumnya yang dilakukan oleh Esra Aytac Adali dalam jurnal yang berjudul The multiobjective decision making methods based on MULTIMOORA and MOOSRA for the laptop selection problem. Pemilihan metode Moosra karena metode Moosra sangat sederhana, stabil, dan kuat selain itu, Metode Moosra juga menggunakan rasio sederhana dari jumlah nilai kinerja yang dinormalisasi untuk kriteria manfaat dengan jumlah nilai kinerja yang dinormalisasi untuk kriteria yang tidak menguntungkan untuk menghindari nilai negatif dan menghasilkan nilai kriteria positif
                    </p>
                </div>
            </div>

        </div>

        <div class="col-lg-6 mb-4">



            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-center text-primary">Kelompok 4 - MOOSRA</h6>
                </div>
                <div class="d-flex card-body justify-content-center">
                    <table>
                        <tr>
                            <td>Dinda Nur Hasanah</td>
                            <td style="padding:10px"> : </td>
                            <td>10107023</td>
                        </tr>
                        <tr>
                            <td>Lana Ismail</td>
                            <td style="padding:10px"> : </td>
                            <td>10107035</td>
                        </tr>
                        <tr>
                            <td>Maharani</td>
                            <td style="padding:10px"> : </td>
                            <td>10107037</td>
                        </tr>
                        <tr>
                            <td>M. Galuh Febrian</td>
                            <td style="padding:10px"> : </td>
                            <td>10107039</td>
                        </tr>
                        <tr>
                            <td>Tania Cahaya P. H.</td>
                            <td style="padding:10px"> : </td>
                            <td>10107057</td>
                        </tr>
                        <tr>
                            <td>Tia Rostiawati</td>
                            <td style="padding:10px"> : </td>
                            <td>10107061</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
