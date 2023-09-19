@extends('layouts.header')

@section('sidebar')
@stop
@section('content')
<div class="card detail">
    <div class="detail-header">
        <h2>Daftar Admin</h2>
    </div>
    <table>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>created at</th>
            <th>updated at</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $index => $item)
            <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $item['email'] }}</td>
                <td>{{ $item['created_at'] }}</td>
                <td>{{ $item['updated_at'] }}</td>
                <td><a href="/hapusAdmin/{{ $item['id'] }}"><button class="button-4" role="button" onclick="return confirm('yakin hapus {{ $item['email'] }}?')"><i class="fas fa-trash"></i></button></a></td>
            </tr>
        @endforeach
    </table>
@stop