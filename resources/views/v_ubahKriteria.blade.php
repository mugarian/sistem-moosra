@extends('layouts.main')
@section('container')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ $title }}</h6>
        </div>
        <div class="card-body">
            <form action="/kriteria/{{ $kriteria->id }}/edit" method="POST">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="nama_kriteria">Nama Kriteria</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('nama_kriteria')
                          is-invalid
                      @enderror" id="nama_kriteria" name="nama_kriteria" placeholder="10107999" required value="{{ old('nama_kriteria', $kriteria->nama_kriteria) }}" />
                        @error('nama_kriteria')
                        <div class="invalid-feedback">
                            {{ $message }}
                         </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="bobot">Bobot (%)</label>
                    <div class="col-sm-10">
                      <input type="" class="form-control @error('bobot')
                          is-invalid
                      @enderror" id="bobot" name="bobot" placeholder="10107999" required value="{{ old('bobot', $kriteria->bobot) }}" />
                        @error('bobot')
                        <div class="invalid-feedback">
                            {{ $message }}
                         </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="jenis_kriteria">Jenis Kriteria</label>
                        <div class="col-sm-10">
                        <select id="jenis_kriteria" class="form-select @error('jenis_kriteria')
                            is-invalid
                        @enderror" id="jenis_kriteria" name="jenis_kriteria" aria-label="Default select example">
                          <option value="" hidden>Select jenis_kriteria</option>
                          <option value="Benefit" @selected(old('jenis_kriteria', $kriteria->jenis_kriteria) == 'Benefit')>Benefit</option>
                          <option value="Cost" @selected(old('jenis_kriteria', $kriteria->jenis_kriteria) == 'Cost')>Cost</option>
                        </select>
                        @error('jenis_kriteria')
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
