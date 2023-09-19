<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/create.css') }}">
</head>

<body>
    <div class="wrapper">
        <div class="title">
            Form Siswa Terlambat
        </div>
        <div class="body">
            <p>Gerbang Tutup jam 07.00 WIB <br>
                Lebih dari jam tersebut, <b>Siswa Dinyatakan Terlambat</b><br>
                Terlambat Lebih dari tiga kali <b>Orangtua akan Dihubungi / Orangtua Dipanggil ke Sekolah</b></p>
        </div>
    </div>
    <div class="wrapper">
        <form class="form" method="post" action="/form">
            @csrf
            <div class="input_field">
                <label for="">Nama Lengkap</label>
                <input type="text" class="input " name="nama_siswa" required autofocus value="{{ old('nama_siswa') }}">
            </div>
            <div class="input_field">
                <label for="">Kelas</label>
                <div class="custom_select">
                    <select name="kelas" id="" required>
                        <option value="" hidden>Pilih Kelas</option>
                        <option value="X AK-1">X AK-1</option>
                        <option value="X AK-2">X AK-2</option>
                        <option value="X BD-1">X BD-1</option>
                        <option value="X BD-2">X BD-2</option>
                        <option value="X DKV-1">X DKV-1</option>
                        <option value="X DKV-2">X DKV-2</option>
                        <option value="X LPb">X LPb</option>
                        <option value="X MP-1">X MP-1</option>
                        <option value="X MP-2">X MP-2</option>
                        <option value="X PSPTv">X PSPTv</option>
                        <option value="X RPL">X RPL</option>
                        <option value="X TKJ-1">X TKJ-1</option>
                        <option value="X TKJ-2">X TKJ-2</option>
                        <option value="XI AK-1">XI AK-1</option>
                        <option value="XI AK-2">XI AK-2</option>
                        <option value="XI BD-1">XI BD-1</option>
                        <option value="XI BD-2">XI BD-2</option>
                        <option value="XI DKV-1">XI DKV-1</option>
                        <option value="XI DKV-2">XI DKV-2</option>
                        <option value="XI LPb">XI LPb</option>
                        <option value="XI MP-1">XI MP-1</option>
                        <option value="XI MP-2">XI MP-2</option>
                        <option value="XI PSPTv">XI PSPTv</option>
                        <option value="XI RPL">XI RPL</option>
                        <option value="XI TKJ-1">XI TKJ-1</option>
                        <option value="XI TKJ-2">XI TKJ-2</option>
                        <option value="XII AKL-1">XII AKL-1</option>
                        <option value="XII AKL-2">XII AKL-2</option>
                        <option value="XII BDP-1">XII BDP-1</option>
                        <option value="XII BDP-2">XII BDP-2</option>
                        <option value="XII MM-1">XII MM-1</option>
                        <option value="XII MM-2">XII MM-2</option>
                        <option value="XII OTKP-1">XII OTKP-1</option>
                        <option value="XII OTKP-2">XII OTKP-2</option>
                        <option value="XII PKM-1">XII PKM-1</option>
                        <option value="XII PKM-2">XII PKM-2</option>
                        <option value="XII PSPTv">XII PSPTv</option>
                        <option value="XII RPL-1">XII RPL-1</option>
                        <option value="XII RPL-2">XII RPL-2</option>
                        <option value="XII TKJ-1">XII TKJ-1</option>
                        <option value="XII TKJ-2">XII TKJ-2</option>
                    </select>
                </div>
            </div>
            <div class="input_field">
                <label for="">Keterangan</label>
                <div class="custom_select">
                    <select name="keterangan" id="" required>
                        <option value="terlambat">Terlambat</option>
                    </select>
                </div>
            </div>
            <div class="input_field">
                <label for="">Alasan Anda Terlambat</label>
                <textarea name="alasan" id="" class="textarea" required></textarea>
            </div>
            <div class="input_field">
                <input type="submit" class="btn" name="submit">
            </div>
        </form>
    </div>
</body>

</html>
