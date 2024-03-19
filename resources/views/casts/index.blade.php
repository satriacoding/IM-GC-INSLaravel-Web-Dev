@extends('layouts.main')

@section('navCast', 'active')
@section('title','Daftar Cast')

@section('content')
@if (session()->has('pesan'))
<div class="alert alert-success mt-3" role="alert">
    {{session('pesan')}}
</div>
@endif


<div class="container mt-5">

    <div class="card mb-4">
        <div class="card-body">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-12">
                    <h2 class="pt-3 pb-4 text-center font-bold font-up deep-purple-text">
                        <a href="/casts/create" class="btn btn-primary"><i class="bi bi-plus-circle"> </i> Add Data Cast </a>
                    </h2>
                    <div class="input-group md-form form-sm form-2 pl-0">
                        <input class="form-control my-0 py-1 pl-3 purple-border" type="text" placeholder="Search something here..." aria-label="Search">
                        <span class="input-group-addon waves-effect purple lighten-2" id="basic-addon1"><a><i class="fa fa-search white-text" aria-hidden="true"></i></a></span>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
            <!--Table-->
            <table class="table table-striped">
                <!--Table head-->
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Bio</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <!--Table head-->
                <!--Table body-->
                <tbody>
                    @forelse ($casts as $key=>$value)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$value->nama}}</td>
                        <td>{{$value->umur}}</td>
                        <td>{{$value->bio}}</td>
                        <td>
                            <div class="btn-group " role="group" aria-label="Basic example">
                                <a href="/casts/{{$value->id}}" class="btn btn-info"><i class="bi bi-eye"></i></a>
                                <a href="/casts/{{$value->id}}/edit" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                
                                <form action="/casts/{{$value->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                    onclick="return confrim('Anda yakin untuk menghapus data ?');">
                                    <i class="bi bi-trash"></i></button>
                                </form>
                            </div>

                        </td>
                    </tr>
                    @empty
                    @endforelse
                </tbody>             
            </table>  
        </div>
    </div>

@endsection