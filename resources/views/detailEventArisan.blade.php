@extends('template.sidebar')
@section('content')
    <link rel="stylesheet" href="css/detailEventArisan.css">

    <body>
        <i class="ti ti-home" style="color: #D2D2D2;"></i>
        <small><span style="color: #D2D2D2;">> Event Arisan ></span> Detail Arisan</small>
        <br><br>

        <div class="join d-flex align-items-center justify-content-between">
            <div class="content d-flex align-items-center">
                <h2><b>Detail Arisan</b></h2>
                <a class="btn sedang-berlangsung" type="button">sedang berlangsung</a>
            </div>
            <div class="cnt d-flex align-items-center flex-column">
                <div class="d-flex align-items-center">
                    <button class="btn btn-primary edit-button" type="button"><i class="fa-solid fa-pen"></i> Edit</button>
                    <a href="#" class="btn"><i class="ti ti-dots-vertical"></i></a>
                </div>
                <div class="text berhenti-tayang d-flex align-items-center mt-2">
                    <i class="ti ti-circle-rectangle"></i>
                    <p class="mt-2">Berhenti Tayang</p>
                </div>
            </div>
        </div>

        <ul class="nav nav-underline mt-3">
            <li class="nav-item">
                <a class="nav-link disable" href="#">Nominal Arisan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Jumlah Peserta</a>
            </li>
        </ul>

        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card card-detail">
                    <div class="card-jadwal d-flex">
                        <div class="mulai-tayang d-flex">
                            <div class="icon">
                                <i class="ti ti-calendar-check" style="color: #03346E"></i>
                            </div>
                            <div class="text">
                                <p><b>Mulai Tayang</b><br><small>02 Agustus 2021 16:58 WIB</small></p>
                            </div>
                        </div>
                        <div class="berakhir-tayang d-flex">
                            <div class="icon">
                                <i class="ti ti-calendar-x" style="color: #FF5050"></i>
                            </div>
                            <div class="text">
                                <p><b>Berakhir Tayang</b><br><small>01 Agustus 2024 16:55 WIB</small></p>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="fx info-section">
                        <div class="head">
                            <p>Keterangan</p>
                            <p>NISBAH Nasabah</p>
                            <p>Rate Bulan Lalu</p>
                            <p>Minimal Deposit</p>
                            <p>Kelipatan Deposit</p>
                            <p>Tenor</p>
                            <p>Pengembalian</p>
                            <p>Free Deposit</p>
                            <p>Free Pengembalian</p>
                        </div>
                        <div class="body info-body">
                            <p>Bagi hasil NISBAH 50, setara 2x lipat dari bank lain</p>
                            <p>60 : 40</p>
                            <p>5.5% p.a</p>
                            <p>Rp5.000.000</p>
                            <p>Rp0</p>
                            <p>12 Bulan</p>
                            <p>12 Bulan</p>
                            <p>Rp0</p>
                            <p>Rp0</p>
                        </div>
                    </div>
                    <hr>
                    <div class="dana d-flex">
                        <i class="ti ti-wallet" style="color: #03346E;"></i>
                        <p>Terkumpul<br><b>Rp. 5.000.000</b></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <button class="dropdown-btn" onclick="toggleDropdown('syarat')">Syarat & Ketentuan</button>
                    <div id="syarat" class="dropdown-content">
                        <p>Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem
                            Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem
                            Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem
                            Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem</p>
                    </div>
                    <button class="dropdown-btn" onclick="toggleDropdown('description')">Deskripsi</button>
                    <div id="description" class="dropdown-content">
                        <p>Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem
                            Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem
                            Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem
                            Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function toggleDropdown(id) {
                var content = document.getElementById(id);
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            }

            window.onload = function() {
                document.getElementById('syarat').style.display = 'block';
                document.getElementById('description').style.display = 'block';
            };
        </script>
    </body>
@endsection
