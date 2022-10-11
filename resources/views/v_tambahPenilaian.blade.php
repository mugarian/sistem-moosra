@extends('layouts.main')
@section('container')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ $title }} {{ $alternatif->nama_mahasiswa }}</h6>
        </div>
        <div class="card-body">
            <form action="/penilaian" method="POST">
                @csrf
                <input type="hidden" class="form-control" id="alternatif_id" name="alternatif_id" required value="{{ $alternatif->id }}" />
                @foreach ($kriteria as $kr)
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="{{ $kr->nama_kriteria }}">{{ $kr->nama_kriteria }}</label>
                            <div class="col-sm-10">
                            <select id="{{ $kr->nama_kriteria }}" class="form-select @error('sub_kriteria{{ $loop->iteration }}_id')
                                is-invalid
                            @enderror" name="sub_kriteria{{ $loop->iteration }}_id">
                                <option value="" hidden>Select {{ $kr->nama_kriteria }}</option>
                                @foreach ($subkriteria as $sub)
                                    @if ($sub->kriteria_id == $kr->id)
                                        <option value="{{$sub->id}}" @selected(old('{{ $kr->id }}', $kr->id) == '{{$sub->id}}')>{{ $sub->nama_sub }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('{{ $kr->id }}')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                @endforeach
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
