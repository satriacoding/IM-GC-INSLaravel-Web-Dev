@extends('layouts.main')

@section('navCast','active')

@section('content')
<div class="col-lg-6 mb-5">
    <h3>Edit Data Cast</h3>
  <form method="post" action="/casts/{{ $casts->id }}">
      @method('PUT')
      @csrf
      <div class="mb-2">
        
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama',$casts->nama)}}" >
        @error('nama')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-2">
        <label for="umur" class="form-label">Umur</label>
        <input type="number" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{ old('umur',$casts->umur)}}">
        @error('umur')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-2">
        <label for="bio" class="form-label">Bio</label>
        <input type="text" class="form-control @error('bio') is-invalid @enderror" name="bio" value="{{ old('bio',$casts->bio)}}">
        @error('bio')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
    