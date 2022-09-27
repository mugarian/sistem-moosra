@extends('layouts.main')
@section('container')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ubah Kriteria</h6>
    </div>
    <div class="card-body">
        <form action="/kriteria/{{ $kriteria }}"></form>
    </div>
</div>
@endsection
