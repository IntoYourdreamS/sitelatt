<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/dashboardd.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}

</head>

<body>
    @section('navbar')
        {{-- Navbar --}}
        <nav class="navbarr">
            <h4>Dashboard</h4>
            <a class="dropdown-itemm" href="auth/logout">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </nav>
        {{-- SideBar --}}
        <input type="checkbox" id="toggle">
        <label for="toggle" class="side-togglee">
            <i class="fas fa-bars"></i>
        </label>
        <div class="sidebarr">
            <a href="{{ url('/dash') }}"><div class="sidebarr-menu">
                <span class="fas fa-clipboard-list"></span>
                <p>Dashboard</p>
            </div></a>
            <a href="{{ url('admin') }}"><div class="sidebarr-menu">
                <span class="fas fa-user"></span>
                <p class="admin">Admin</p>
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
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}
</html>
