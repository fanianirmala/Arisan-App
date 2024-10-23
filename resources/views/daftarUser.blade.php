@extends('template.sidebar')
@section('content')
<link rel="stylesheet" href="css/daftar-user.css">

<i class="ti ti-home" style="color: #D2D2D2;"></i>
<small><span style="color: #D2D2D2;">> Verifikasi User ></span> Daftar User</small>
<br><br>

<div class="join d-flex align-items-center justify-content-between">
    <div class="content d-flex align-items-center">
        <h2><b>Daftar User</b></h2>
    </div>
</div>
<div class="notification d-flex">
    <div class="icon">
        <i class="ti ti-alert-triangle-filled"></i>
    </div>
    <div class="text-notification" style="color: #000">
        <p>Informasi User <br>Mohon untuk periksa customer baru agar dapat diproses <a href="#" style="color: #4393AC;">Periksa Sekarang</a></p>
    </div>
</div>
<div class="pag d-flex">
    <div class="text3 mt-1">
        <p class="hasil" style="color: #6B6B6B">5 Hasil ditemukan</p>
    </div>
    <div class="input-group mt-1 me-5" style="margin-top:-5rem; display: flex; justify-content: flex-end;">
        <div class="form-outline me-2" data-mdb-input-init>
            <input type="search" id="form1" class="form-control" placeholder="Cari"/>
        </div>
        <button type="button" class="btn" style="background-color: transparent; border: 1px solid #ced4da; height: 37px;" data-mdb-ripple-init>
            <i class="fa-solid fa-filter fa-sm" style="color: #929695;"></i>
        </button>
    </div>
</div>
<table>
    <thead class="table-secondary">
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
                        <a href="{{ route('data-personal') }}">Detail</a>
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
