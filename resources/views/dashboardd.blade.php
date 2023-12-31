@extends('layouts.header')

@section('sidebar')
@stop
@section('content')
    <div class="cardd total1">
        <div class="infoo">
            <h2>Total Entry </h2>
            <span style="font-size:26">{{ $data->total() }}</span>
        </div>
    </div>
    <div class="cardd total2">
        <div class="infoo">
            <h2>Tanggal Sekarang</h2>
            <span style="font-size:24">{{ date('j/m/Y') }}</span>
        </div>
    </div>
    <div class="cardd total3">
        <div class="infoo">
            <h2>Jam Sekarang</h2>
            <span id="jam" style="font-size:24"></span>
        </div>
    </div>
    {{-- 2 cardd bottom --}}
    <div class="cardd detail">
        <div class="detail-header">
            <h2>Entry Siswa Terlambat</h2>
        </div>
        <table>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alasan</th>
                <th>Tanggal</th>
                <th>Action</th>
            </tr>
            @foreach ($data as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item['nama_siswa'] }}</td>
                    <td>{{ $item['kelas'] }}</td>
                    <td>{{ $item['alasan'] }}</td>
                    <td>{{ $item['created_at'] }}</td>
                    <td><a href="/hapus/{{ $item['id'] }}"><button class="button-4" role="button"
                                onclick="return confirm('yakin hapus {{ $item['nama_siswa'] }}?')"><i
                                    class="fas fa-trash"></i></button></a></td>
                </tr>
            @endforeach
        </table>
        {{-- <div class="pagination">
        {{ $data->links() }}
    </div> --}}
    @stop

    <script type="text/javascript">
        window.onload = function() {
            jam();
        }

        function jam() {
            var e = document.getElementById('jam'),
                d = new Date(),
                h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());

            e.innerHTML = h + ':' + m + ':' + s;

            setTimeout('jam()', 1000);
        }

        function set(e) {
            e = e < 10 ? '0' + e : e;
            return e;
        }
    </script>
