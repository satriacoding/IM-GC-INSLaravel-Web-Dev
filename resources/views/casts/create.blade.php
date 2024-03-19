@extends('layouts.main')

@section('navCast','active')

@section('content')
<div>
    <h2>Tambahkan Data</h2>

    <form  method="post" action="/casts">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" 
            placeholder="Masukkan Nama" value="{{ old('nama')}}">
            @error('nama')
                <div class="alert alert-danger">
                {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" class="form-control  @error('umur') is-invalid @enderror" name="umur" 
            placeholder="Masukkan Umur"  value="{{ old('umur')}}">
            @error('umur')
                <div class="alert alert-danger">
                {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group pb-2">
            <label for="bio">Bio</label>
            <input type="text" class="form-control @error('bio') is-invalid @enderror" name="bio" 
            placeholder="Masukkan bio"  value="{{ old('bio')}}"> 
            @error('bio')
                <div class="alert alert-danger">
                {{ $message }}
                </div>
            @enderror
        </div>
        <a href="/casts" class="btn btn-success"><i class="bi bi-box-arrow-left"></i> Kembali </a>
        <button type="submit" class="btn btn-primary"><i class="bi bi-plus-circle"> </i> Add</button>
    </form>
</div>
@endsection