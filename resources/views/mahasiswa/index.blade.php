@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
        <h2>Daftar Mahasiswa</h2>
            <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NRP</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">JURUSAN</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mhs )
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$mhs->nrp}}</td>
                    <td>{{$mhs->nama}}</td>
                    <td>{{$mhs->email}}</td>
                    <td>{{$mhs->jurusan}}</td>
                    <td>
                        <a href="" class="badge badge-success">Edit</a>
                        <a href="" class="badge badge-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection