@extends('template.sidebar')
@section('content')
<link rel="stylesheet" href="{{ asset('css/dataDetailUser.css') }}">
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
                <img src="{{ asset('assets/img/prof.jpg') }}" alt="Profile Picture">
            </div>

            <div class="profile-info">
                <div class="info">
                    <p>Butuh Tindakan</p>
                </div>
                <p class="name">{{ $details['name'] ?? 'Tidak tersedia' }}</p>
                <div class="details d-flex">
                    <div class="no d-flex align-items-center">
                        <i class="ti ti-phone"></i>
                        <p>{{ $details['phone'] ?? 'Tidak tersedia' }}</p>
                    </div>
                    <div class="user d-flex align-items-center">
                        <i class="ti ti-at"></i>
                        <p>{{ $details['username'] ?? 'Tidak tersedia' }}</p>
                    </div>
                    <div class="email d-flex align-items-center">
                        <i class="ti ti-mail"></i>
                        <p>{{ $details['email'] ?? 'Tidak tersedia' }}</p>
                    </div>
                    <div class="ttl d-flex align-items-center">
                        <i class="ti ti-calendar-month"></i>
                        <p>{{ $details['birthdate'] ?? 'Tidak tersedia' }}</p>
                    </div>
                    <div class="gender d-flex align-items-center">
                        <i class="ti ti-gender-bigender"></i>
                        <p>{{ $details['gender'] ?? 'Tidak tersedia' }}</p>
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
        
        <div class="input-group mt-1 me-5" style="margin-top:-5rem; display: flex; justify-content: flex-end;">
            <div class="form-outline me-2" data-mdb-input-init>
                <input type="search" id="form1" class="form-control" placeholder="Cari" />
            </div>
            <button type="button" class="btn" style="background-color: transparent; border: 1px solid #ced4da; height: 37px;" data-mdb-ripple-init>
                <i class="fa-solid fa-filter fa-sm" style="color: #929695;"></i>
            </button>
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
                            <td>{{ $details['name'] ?? 'Tidak tersedia' }}</td>
                        </tr>
                        <tr>
                            <td>ID KTP</td>
                            <td>:</td>
                            <td>{{ $details['ktp_id'] ?? 'Tidak tersedia' }}</td>
                        </tr>
                        <tr>
                            <td>Tempat/Tanggal Lahir</td>
                            <td>:</td>
                            <td>{{ $details['birthplace'] ?? 'Tidak tersedia'}}</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>{{ $details['religion'] ?? 'Tidak tersedia' }}</td>
                        </tr>
                        <tr>
                            <td>Status Pernikahan</td>
                            <td>:</td>
                            <td>{{ $details['marital_status'] ?? 'Tidak tersedia' }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>{{ $details['gender'] ?? 'Tidak tersedia' }}</td>
                        </tr>
                        <tr>
                            <td>Alamat KTP</td>
                            <td>:</td>
                            <td>{{ $details['address'] ?? 'Tidak tersedia' }}</td>
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
                        <td>{{ $transactions['type'] ?? 'Tidak tersedia' }}</td>
                        <td>{{ $transactions['destination'] ?? 'Tidak tersedia' }}</td>
                        <td>{{ $transactions['category'] ?? 'Tidak tersedia' }}</td>
                        <td>Rp. {{ number_format($transactions['amount'] ?? 0, 0, ',', '.') }}</td>
                        <td>
                            @if(!empty($transactions['proof']))
                                <a href="{{ asset('storage/' . $transactions['proof']) }}">Lihat Bukti</a>
                            @else
                                Tidak tersedia
                            @endif
                        </td>
                        <td>{{ \Carbon\Carbon::parse($transactions['date'] ?? now())->format('d-m-Y') }}</td>
                        <td>{{ $transactions['description'] ?? 'Tidak tersedia' }}</td>
                        
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

        window.onload = function() {
            openTab(event, 'data-personal');
        };
    </script>
</body>
@endsection
