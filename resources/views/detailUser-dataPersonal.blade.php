@extends('template.sidebar')
@section('content')
<link rel="stylesheet" href="css/data-personal.css">
<body>
    <i class="ti ti-home" style="color: #D2D2D2;"></i>
    <small><span style="color: #D2D2D2;">> Verifikasi User > Daftar User ></span> Detail User</small>
    <br><br>

    <div class="join d-flex align-items-center justify-content-between">
        <div class="content d-flex align-items-center" style="justify-content: space-between;">
            <h2><b>Detail User</b></h2>
            <a href="#"><i class="ti ti-dots-vertical" style="font-size: 25px; color: #000;"></i></a>
        </div>
    </div>
    <div class="head mt-4">
        <div class="heading d-flex">
            <div class="profile-pic">
                <img src="assets/img/prof.jpg" alt="Profile Picture">
            </div>

            <div class="profile-info">
                <div class="info">
                    <p>Butuh Tindakan</p>
                </div>
                <p class="name">Nama Fania Nirmala</p>
                <div class="details d-flex">
                    <div class="no d-flex align-items-center">
                        <i class="ti ti-phone"></i>
                        <p>088876754321</p>
                    </div>
                    <div class="user d-flex align-items-center">
                        <i class="ti ti-at"></i>
                        <p>User Name There</p>
                    </div>
                    <div class="email d-flex align-items-center">
                        <i class="ti ti-mail"></i>
                        <p>email@example.com</p>
                    </div>
                    <div class="ttl d-flex align-items-center">
                        <i class="ti ti-calendar-month"></i>
                        <p>23-05-2007</p>
                    </div>
                    <div class="gender d-flex align-items-center">
                        <i class="ti ti-gender-bigender"></i>
                        <p>Laki-Laki</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hr">
        <hr>
    </div>
    <div class="head mt-4">
        <div class="heading d-flex">
            <div class="profile-pic">
                <img src="assets/img/prof.jpg" alt="Profile Picture">
            </div>

            <div class="profile-info">
                <div class="info">
                    <p>Butuh Tindakan</p>
                </div>
                <p class="name">Nama Fania Nirmala</p>
                <div class="details d-flex">
                    <div class="no d-flex align-items-center">
                        <i class="ti ti-phone"></i>
                        <p>088876754321</p>
                    </div>
                    <div class="user d-flex align-items-center">
                        <i class="ti ti-at"></i>
                        <p>User Name There</p>
                    </div>
                    <div class="email d-flex align-items-center">
                        <i class="ti ti-mail"></i>
                        <p>email@example.com</p>
                    </div>
                    <div class="ttl d-flex align-items-center">
                        <i class="ti ti-address-book"></i>
                        <p>Jl. Batu indah perjuangan emas, Kp harapan RT08/07</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hr">
        <hr>
    </div>
    <div class="tab-container">
        <div class="tabs">
            <button class="tab-link active" onclick="openTab(event, 'data-personal')">Data Personal</button>
            <button class="tab-link" onclick="openTab(event, 'data-transaksi')">Data Transaksi</button>
        </div>

        <div id="data-personal" class="tab-content">
            <div class="data-container">
                <div class="personal-info mt-1">
                    <h4><b>Data KTP</b></h4>
                    <br>
                    <table>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td>Nama There</td>
                        </tr>
                        <tr>
                            <td>ID KTP</td>
                            <td>:</td>
                            <td>189720276929</td>
                        </tr>
                        <tr>
                            <td>Tempat/Tanggal Lahir</td>
                            <td>:</td>
                            <td>Bogor, 12 Agustus 3023</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>Islam</td>
                        </tr>
                        <tr>
                            <td>Status Pernikahan</td>
                            <td>:</td>
                            <td>Belum Menikah</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>Perempuan</td>
                        </tr>
                        <tr>
                            <td>Alamat KTP</td>
                            <td>:</td>
                            <td>Jl. Batu indah perjuangan emas, Kp Harapan RT08/07</td>
                        </tr>
                    </table>
                </div>
                <div class="photos">
                    <div class="photo-item">
                        <p>Foto Selfie</p>
                        <div class="photo-placeholder"></div>
                    </div>
                    <div class="photo-item">
                        <p>Foto KTP</p>
                        <div class="photo-placeholder"></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="data-transaksi" class="tab-content" style="display:none;">
            <table id="datatable" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Tipe Transaksi</th>
                        <th>Tujuan</th>
                        <th>Jenis</th>
                        <th>Nominal</th>
                        <th>Bukti Transaksi</th>
                        <th>Tanggal Transaksi</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Transfer Bank Lain</td>
                        <td>Bank Mandiri Johnatan : 1234567</td>
                        <td>Transfer Bank Lain</td>
                        <td>Rp. 10.000.000</td>
                        <td> <a href="#">Lihat Bukti</a> </td>
                        <td>28 Agustus 2026</td>
                        <td>Uang Saluran</td>
                    </tr>
                    <tr>
                        <td>Transfer E-Wallet</td>
                        <td>OVO Johnatan : 1234567</td>
                        <td>Transfer Bank Lain</td>
                        <td>Rp. 10.000.000</td>
                        <td> <a href="#">Lihat Bukti</a> </td>
                        <td>28 Agustus 2026</td>
                        <td>Uang Saluran</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Data yang ditampilkan</th>
                    </tr>
                </tfoot>
                </table>
            </div>
        </div>
    </div>

    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tab-link");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Memanggil fungsi openTab saat halaman dimuat
        window.onload = function() {
            openTab(event, 'data-personal'); // Tampilkan tab Data Personal saat halaman dimuat
        };





    </script>
</body>
</html>

@endsection
