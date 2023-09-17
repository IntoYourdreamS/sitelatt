@extends('layouts.header')

@section('sidebar')
@stop
@section('content')
<div class="card total1">
    <div class="info">
        <h2>Total Entry </h2>
        <p>{{ $data->total() }}</p>
    </div>
</div>
<div class="card total2">
    <div class="info">
        <h2>Jumlah Terlambat</h2>
        <p>0</p>
    </div>
</div>
<div class="card total3">
    <div class="info">
        <h2>Opsional</h2>
        <p>0</p>
    </div>
</div>
{{-- 2 card bottom --}}
<div class="card detail">
    <div class="detail-header">
        <h2>Entry Siswa Terlambat</h2>
    </div>
    <table>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>jumlah_terlambat</th>
            <th>Alasan</th>
            <th>Tanggal</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $index => $item)
            <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $item['nama_siswa'] }}</td>
                <td>{{ $item['kelas'] }}</td>
                <td >{{ $item['jumlah_terlambat'] }}</td>
                <td>{{ $item['alasan'] }}</td>
                <td>{{ $item['created_at'] }}</td>
                <td><a href=""><button class="button-4" role="button"><i class="fas fa-trash"></i></button></a></td>
            </tr>
        @endforeach
    </table>
    <div class="pagination">
        {{ $data->links() }}
    </div>
    

@stop