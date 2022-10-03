@extends('layouts.main')
@section('container')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ $title }}</h6>
        </div>
        <div class="card-body">
            <form action="/alternatif/{{ $alternatif->id }}/edit" method="POST">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="nama_mahasiswa">Nama Mahasiswa</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('nama_mahasiswa')
                          is-invalid
                      @enderror" id="nama_mahasiswa" name="nama_mahasiswa" placeholder="10107999" required value="{{ old('nama_mahasiswa', $alternatif->nama_mahasiswa) }}" />
                        @error('nama_mahasiswa')
                        <div class="invalid-feedback">
                            {{ $message }}
                         </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for=""></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
