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
    @section('navbar')
        {{-- Navbar --}}
        <nav class="navbar">
            <h4>Dashboard</h4>
            <a class="dropdown-item" href="auth/logout">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </nav>
        {{-- SideBar --}}
        <input type="checkbox" id="toggle">
        <label for="toggle" class="side-toggle">
            <i class="fas fa-bars"></i>
        </label>
        <div class="sidebar">
            <a href="{{ url('/dash') }}"><div class="sidebar-menu">
                <span class="fas fa-clipboard-list"></span>
                <p>Dashboard</p>
            </div></a>
            <a href="{{ url('tambah') }}"><div class="sidebar-menu">
                <span class="fas fa-user"></span>
                <p class="admin">Tambah Admin</p>
            </div></a>
        </div>
    @show
    {{-- main dashboard --}}
    <main>
        <div class="dashboard-container">
            @yield('content')
        </div>
    </main>
</body>

</html>
