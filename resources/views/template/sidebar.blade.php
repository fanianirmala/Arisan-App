<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sidebar.css">
    <title>Sidebar With Bootstrap</title>
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
                        <a href="#" class="sidebar-link">
                            {{-- {{ route('login') }} --}}
                            <i class="fa-solid fa-wallet"></i>
                            ZISWAF
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#pages"
                            aria-expanded="false" aria-controls="pages">
                            <i class="fa-solid fa-chart-column"></i>
                            Investasi Syariah
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item" style="margin-left: 20px;">
                                <a href="#" class="sidebar-link"><i class="fa-solid fa-arrow-right"></i></i> Deposito</a>
                            </li>
                            <li class="sidebar-item" style="margin-left: 20px;">
                                <a href="#" class="sidebar-link"><i class="fa-solid fa-arrow-right"></i></i> Investasi</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa fa-tablet"></i>
                            Banner
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-user"></i>
                            Pelanggan
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard"
                            aria-expanded="false" aria-controls="dashboard">
                            <i class="fa-solid fa-gear"></i>
                            Pengaturan
                        </a>
                        <ul id="dashboard" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item" style="margin-left: 20px;">
                                <a href="#" class="sidebar-link"><i class="fa-solid fa-arrow-right"></i> Pengaturan</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-circle-info"></i>
                            Bantuan
                        </a>
                    </li>
                </ul>
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
                        <h6>Fania Nirmala</h6>
                    </div>
                    <div class="img">
                        <img src="Assets/img/profile-user.png" style="width: 30px">
                        <button class="btn"><img src="Assets/img/down-arrow.png" style="width: 20px;"></button>
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
