@extends('template.sidebar')
@section('content')
<!DOCTYPE html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/daftar-user.css">
    <div class="container">
        <div class="horizontal-line"></div>
        <div class="detail user"><h1>Daftar User</h1></div>
    </div>
    <div class="dot">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /></svg>
    </div>

    <div class="breadcrumb-nav">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-home">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M5 12l-2 0l9 -9l9 9l-2 0"/>
            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"/>
            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"/>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-right">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M9 6l6 6l-6 6"/>
        </svg>
        <a href="verifikasi-user" class="text1" style="color: #6B6B6B">Verifikasi User</a>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-right">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M9 6l6 6l-6 6"/>
        </svg>
        <a href="detail-user1" class="text2" style="color: #D2D2D2">Daftar User </a>
    </div>

    <div class="notification">
        <i class="fas fa-exclamation-triangle" style="color: #F7C752; font-size: 25px;margin-left:2rem;"></i>
        <strong style="color: black; margin-left:1rem">Informasi User</strong>
        <div class="content">
            <p style="color: black">Mohon untuk periksa customer baru agar dapat diproses</p>
            <a href="#">Periksa sekarang</a>
        </div>
    </div>
    
    <div class="text3">
        <p class="Daftar user" style="color: black">Daftar User</p>
        <p class="hasil" style="color: #6B6B6B">5 Hasil ditemukan</p>
    </div>
   
    <div class="input-group" style="margin-left: 75%;margin-top:-5rem;">
        <div class="form-outline" data-mdb-input-init>
          <input type="search" id="form1" class="form-control" style="margin-left: -7px" placeholder="Cari"/>
        </div>
        <button type="button" class="btn "style="background-color: transparent; border: 1px solid #ced4da;" data-mdb-ripple-init>
            <i class="fa-solid fa-filter fa-sm" style="color: #929695;"></i>
        </button>
      </div>
    <table>
        <thead class="table-secondary" sty>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Nama</th>
                <th>T/TL</th>
                <th>Jenis Kelamin</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Username One</td>
                <td>email.com</td>
                <td>Nama One<br>126278392013</td>
                <td>2 Agustus 2002<br>Depok</td>
                <td>Laki-laki</td>
                <td><span class="status registered">Terdaftar</span></td>
                <td class="action-cell">
                    <i class="fas fa-ellipsis-v" style="cursor: pointer;" onclick="toggleActionMenu(this)"></i>
                    <div class="action-menu">
                        <div class="detail-btn">
                            Detail
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Username Two</td>
                <td>email.com</td>
                <td>Nama Two<br>126278392013</td>
                <td>2 Agustus 2002<br>Depok</td>
                <td>Laki-laki</td>
                <td><span class="status registered">Terdaftar</span></td>
                <td class="action-cell">
                    <i class="fas fa-ellipsis-v" style="cursor: pointer;" onclick="toggleActionMenu(this)"></i>
                    <div class="action-menu">
                        <div class="detail-btn">
                            Detail
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Username Three</td>
                <td>email.com</td>
                <td>Nama Three<br>126278392013</td>
                <td>2 Agustus 2002<br>Depok</td>
                <td>Laki-laki</td>
                <td><span class="status declined">Ditolak</span></td>
                <td class="action-cell">
                    <i class="fas fa-ellipsis-v" style="cursor: pointer;" onclick="toggleActionMenu(this)"></i>
                    <div class="action-menu">
                        <div class="detail-btn">
                            Detail
                        </div>
                    </div>
                </td>

                  
            </tr>
            <tr>
                <td>Username Five</td>
                <td>email.com</td>
                <td>Nama Five<br>126278392013</td>
                <td>2 Agustus 2002<br>Depok</td>
                <td>Laki-laki</td>
                <td><span class="status action-needed">Butuh Tindakan</span></td>
                <td class="action-cell">
                    <i class="fas fa-ellipsis-v" style="cursor: pointer;" onclick="toggleActionMenu(this)"></i>
                    <div class="action-menu">
                        <div class="detail-btn">
                            Detail
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table> 
    <script>
        function toggleActionMenu(element) {
            const actionMenu = element.nextElementSibling;
            const menus = document.querySelectorAll('.action-menu');
            menus.forEach(menu => {
                if (menu !== actionMenu) {
                    menu.style.display = 'none';
                }
            });
            if (actionMenu.style.display === 'block') {
                actionMenu.style.display = 'none';
            } else {
                actionMenu.style.display = 'block';
            }
        }
    
        // Close the action menu when clicking outside
        document.addEventListener('click', function (event) {
            if (!event.target.closest('.action-cell')) {
                document.querySelectorAll('.action-menu').forEach(menu => {
                    menu.style.display = 'none';
                });
            }
        });
    </script>
@endsection