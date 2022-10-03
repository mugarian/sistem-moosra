@extends('layouts.main')
@section('container')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ $title }} {{ $kriteria->nama_kriteria }}</h6>
        </div>
        <div class="card-body">
            <form action="/subkriteria" method="POST">
                @csrf
                <input type="hidden" class="form-control" id="kriteria_id" name="kriteria_id" required value="{{ $kriteria->id }}" />
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="nama_sub">Nama Sub Kriteria</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('nama_sub')
                          is-invalid
                      @enderror" id="nama_sub" name="nama_sub" placeholder="" required value="{{ old('nama_sub') }}" />
                        @error('nama_sub')
                        <div class="invalid-feedback">
                            {{ $message }}
                         </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="nilai">Nilai</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control @error('nilai')
                          is-invalid
                      @enderror" id="nilai" name="nilai" placeholder="" required value="{{ old('nilai') }}" />
                        @error('nilai')
                        <div class="invalid-feedback">
                            {{ $message }}
                         </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for=""></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
