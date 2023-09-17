@extends('layouts.header')
@section('sidebar')
@stop
@section('content')
<div class="card detail">
    <div class="detail-header">
        <form action="" method="post">
            <h2>Tambah Admin</h2>
            <div class="form-group">
                <label for="">Nickname</label>
                <input type="text" class="form-control" required>
                <label for="">Password</label>
                <input type="password" class="form-control" required>

                <input type="submit" class="btn" value="Tambahkan"> 
            </div>
        </form>
    </div>
</div>
@stop