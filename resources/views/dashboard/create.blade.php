@extends('components.template')
@section('title', 'Create Data')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 rounded shadow-sm">
                    <div class="card-header">
                        <h3>Create</h3>
                    </div>
                    <div>
                        <form action="{{ route('store') }}" method="POST" enctype="">
                            @csrf
                            <div class="m-3">
                                <div>
                                    <label for="date" class="">Tanggal</label>
                                    <input type="date" name="date" id="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date',date('Y-m-d')) }}" required>
                                    @error('date')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <label for="umur" class="mt-2">Umur</label>
                                    <input type="number" name="umur" id="umur" class="form-control @error('umur') is-invalid @enderror" value="{{ old('umur',$last->umur) }}" required>
                                    @error('umur')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <label for="populasi" class="mt-2">Populasi</label>
                                    <input type="text" name="populasi" id="populasi" class="form-control @error('populasi') is-invalid @enderror" value="{{ old('populasi', $last->populasi-($last->mati + $last->afkir)) }}" required>
                                    @error('populasi')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <label for="mati" class="mt-2">Mati</label>
                                    <input type="text" name="mati" id="mati" class="form-control @error('mati') is-invalid @enderror" value="{{ old('mati') }}" required>
                                    @error('mati')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <label for="afkir" class="mt-2">Afkir</label>
                                    <input type="text" name="afkir" id="afkir" class="form-control @error('afkir') is-invalid @enderror" value="{{ old('afkir') }}" required>
                                    @error('afkir')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <label for="pakan" class="mt-2">Total Pakan</label>
                                    <input type="text" name="pakan" id="pakan" class="form-control @error('pakan') is-invalid @enderror" value="{{ old('pakan') }}" required>
                                    @error('pakan')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <label for="produksi" class="mt-2">Produksi Telur</label>
                                    <input type="text" name="produksi" id="produksi" class="form-control @error('produksi') is-invalid @enderror" value="{{ old('produksi') }}" required>
                                    @error('produksi')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <label for="berat" class="mt-2">Berat Telur</label>
                                    <input type="text" name="berat" id="berat" class="form-control @error('berat') is-invalid @enderror" value="{{ old('berat') }}" required>
                                    @error('berat')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <label for="butir" class="mt-2">Telur Retak</label>
                                    <input type="text" name="butir" id="butir" class="form-control @error('butir') is-invalid @enderror" value="{{ old('butir') }}" required>
                                    @error('butir')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <label for="retakKg" class="mt-2">Retak per KG</label>
                                    <input type="text" name="retakKg" id="retakKg" class="form-control @error('retakKg') is-invalid @enderror" value="{{ old('retakKg') }}" required>
                                    @error('retakKg')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <label for="keterangan" class="mt-2">Keterangan</label>
                                    <input type="text" name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan') }}">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary form-control mt-4">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection