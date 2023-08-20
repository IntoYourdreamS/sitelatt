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
        <div class="form">
            <div class="input_field">
                <label for="">Nama Lengkap</label>
                <input type="text" class="input" required>
            </div>
            <div class="input_field">
                <label for="">Kelas</label>
                <div class="custom_select">
                    <select name="" id="" required>
                        <option value="" hidden>Pilih Kelas</option>
                        <option value="">AK1</option>
                        <option value="">Select</option>
                        <option value="">Select</option>
                    </select>
                </div>
            </div>
            <div class="input_field">
                <label for="">Keterangan</label>
                <div class="custom_select">
                    <select name="" id="" required>
                        <option value="">Terlambat</option>
                    </select>
                </div>
            </div>
            <div class="input_field">
                <label for="">Alasan Anda Terlambat</label>
                <textarea name="" id="" class="textarea" required></textarea>
            </div>
            <div class="input_field">
                <input type="submit" value="submit" class="btn">
            </div>
        </div>
    </div>
</body>

</html>
