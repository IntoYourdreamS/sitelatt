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
                        <option value="AK1">AK1</option>
                        <option value="RPL">RPL</option>
                        <option value="TKJ">TKJ</option>
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
