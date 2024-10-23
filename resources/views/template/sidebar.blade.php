<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <title>ARUMI</title>
</head>
<body>
    <div class="wrapper">
        {{-- sidebar --}}
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <img src="Assets/img/logo-arumi-biru.png" alt="">
                </div>
                {{-- sidebar navigation --}}
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="{{ route('list-arisan') }}" class="sidebar-link">
                            <i class="ti ti-list-details" style="color: #858585"></i>
                            Event Arisan
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#investasi"
                            aria-expanded="false" aria-controls="investasi">
                            <i class="ti ti-wallet" style="color: #858585;"></i>
                            Verifikasi User
                        </a>
                        <ul id="investasi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item" style="margin-left: 20px;">
                                <a href="{{ route('daftar-user') }}" class="sidebar-link"><i class="ti ti-users-group" style="color: #858585"></i> Daftar User</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('event-arisan-baru') }}" class="sidebar-link">
                            <i class="ti ti-chart-histogram" style="color: #858585"></i>
                            Event Arisan Baru
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="ti ti-users-group" style="color: #858585"></i>
                            Komunitas
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="ti ti-rosette-discount-check" style="color: #858585"></i>
                            Verifikasi Penyelenggara
                        </a>
                    </li>
                </ul>
                <div class="sidebar-footer">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link" style="color: red;">
                            <i class="ti ti-logout-2" style="color: red"></i>
                            Logout
                        </a>
                    </li>
                </div>
            </div>
        </aside>
        <!-- Main Component -->
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom d-flex" style="justify-content: space-between;">
                <button class="btn" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="con" style="display: flex">
                    <div class="name" style="margin-top: 10px; margin-right: 20px;">
                        <h6>
                            @auth
                                {{ Auth::user()->name }}
                            @endauth
                        </h6>
                    </div>
                    <div class="img d-flex">
                        <img src="Assets/img/profile-user.png" style="width: 40px;">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownProfile" data-bs-toggle="dropdown" aria-expanded="false"></button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownProfile">
                                <li><a class="dropdown-item" href="{{ route('view-profile') }}">View Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        const toggler = document.querySelector(".btn");
        toggler.addEventListener("click",function(){
            document.querySelector("#sidebar").classList.toggle("collapsed");
        });
    </script>
</body>
</html>
