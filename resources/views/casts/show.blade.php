@extends('layouts.main')

@section('navCast','active')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Detail Cast
        </div>
        <div class="card-body">
            <h5 class="card-title">Nama: {{ $casts->nama }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Umur: {{ $casts->umur }}</h6>
            <p class="card-text">Bio: {{ $casts->bio }}</p>
        </div>
        <a href="/casts" class="btn btn-warning"><i class="bi bi-box-arrow-left"></i> Kembali </a>

    </div>
</div>
@endsection