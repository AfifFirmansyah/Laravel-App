@extends('layout/main')

@section('title', 'Daftar Student')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
        <h2>Daftar Student</h2>
            <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student )
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$student->nama}}</td>
                    <td>
                        <a href="/students/{{$student->id}}" class="badge badge-info">Show Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection