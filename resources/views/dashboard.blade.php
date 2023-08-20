<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitelat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <section id="menu">
        <div class="logo">
            <img src="img/admin.png" alt="" srcset="">
            <h2>Sitelat</h2>
        </div>
        <div class="items">
            <li><i class="fa-solid fa-chart-simple"></i><a href="">Dashboard</a></li>
        </div>
    </section>
    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div class="search">
                    <i class="fa fa-search"></i>
                    <input type="text" placeholder="Search">
                </div>
            </div>
            <div class="profile">
                <i class="fa-regular fa-bell"></i>
                <img src="img/1286283.png" alt="">
            </div>
        </div>
        <h3 class="i-name">Dashboard</h3>
        <a href="php/tambah.php"><button type="button" class="btn btn-success" id="btn_tambah">Tambah</button></a>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th width="40px">id</th>
                    <th width="230px">Nama Siswa</th>
                    <th width="60px">Kelas</th>
                    <th width="60px">Keterangan</th>
                    <th width="120px">Alasan</th>
                    <th width="100px">Aksi</th>
                </tr>
            </thead>
            {{-- <?php foreach ($data as $row) : ?>
                <tbody>
                    <tr>
                        <td>
                            <table class="table mb-0">
                                <?= $row['kode_brg'] ?>
                            </table>
                        </td>
                        <td>
                            <table class="table mb-0">
                                <?= $row['nama_brg'] ?>
                            </table>
                        </td>
                        <td>
                            <table class="table mb-0">
                                <?= $row['jenis_brg'] ?>
                            </table>
                        </td>
                        <td>
                            <table class="table mb-0">
                                <?= $row['qty_brg'] ?>
                            </table>
                        </td>
                        <td>
                            <table class="table mb-0">
                                <?= $row['tgl_input_brg'] ?>
                            </table>
                        </td>
                        <td>
                            <table class="table mb-0">
                                <?= $row['desc_brg'] ?>
                            </table>
                        </td>
                        <td align="center">
                            <a href="php/update.php?id=<?= $row['id'] ?>"><button type="button" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></button></a>
                            <a href="php/hapus.php?id=<?= $row['id'] ?>"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach ?> --}}
        </table>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</html>
