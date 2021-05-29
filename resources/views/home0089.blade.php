@extends('layout0089')
@section('judul','home')
@section('isi')
<table class="table">
    <thead class="table-dark">
        <tr>
            <td>#</td>
            <td>Nama</td>
            <td>NBI</td>
            <td>email</td>
        </tr>
    </thead>
    <tbody>
        @foreach($student as $stud)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $stud->nama}}</td>
            <td>{{ $stud->nbi}}</td>
            <td>{{ $stud->email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection