<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/dashboardd.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar">
        <h4>Dashboard</h4>
        <div class="profile">
            <i class="fas fa-search"></i>
            <img src="{{ asset('/img/1286283.png') }}" alt="" class="profile-image">
            <a href=""><p class="profile-name">Logout</p></a>
        </div>
    </nav>
    {{-- SideBar --}}
    <input type="checkbox" id="toggle">
    <label for="toggle" class="side-toggle">
        <i class="fas fa-bars"></i>
    </label>
    <div class="sidebar">
        <div class="sidebar-menu">
            <span class="fas fa-clipboard-list"></span>
            <p>Overview</p>
        </div>
        <div class="sidebar-menu">
            <span class="fa-solid fa-ban"></span>
            <p>Unavailable</p>
        </div>
        <div class="sidebar-menu">
            <span class="fa-solid fa-ban"></span>
            <p>Unavailable</p>
        </div>
        <div class="sidebar-menu">
            <span class="fa-solid fa-ban"></span>
            <p>Unavailable</p>
        </div>
    </div>
    {{-- main dashboard --}}
    <main>
        <div class="dashboard-container">
            <div class="card total1">
                <div class="info">
                    <h2>Total Entry </h2>
                    <p>0</p>
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
                        <th>Alasan</th>
                        <th>Tanggal</th>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>

</html>
