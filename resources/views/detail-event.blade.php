@extends('template.sidebar')
@section('content')
<link rel="stylesheet" href="css/detail-arisan.css">

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
                <i class="ti ti-circle-rectangle"></i><p class="mt-2">Berhenti Tayang</p>
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
                <div class="flex card-content">
                    <div class="card-header jadwal-tayang d-flex align-items-center">
                        <div class="icon-container">
                            <i class="ti ti-calendar-check"></i>
                        </div>
                        <div class="card-info">
                            <b>Jadwal Tayang</b>
                            <div class="text-card"><h7>02 Agustus 2021 23:00</h7></div>
                        </div>
                    </div>
                    <div class="card-header berakhir-tayang d-flex align-items-center">
                        <div class="icon-container">
                            <i class="ti ti-calendar-x"></i>
                        </div>
                        <div class="card-info">
                            <b>Berakhir Tayang</b>
                            <div class="text-card"><h6>10 Agustus 2021 23:00</h6></div>
                        </div>
                    </div>
                    <div class="horizontal-line1"></div>
                </div>
                

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
                <div class="horizontal-line2"></div>
            </div>        
        </div>
        <div class="col-sm-6">
            <div class="card">
                <button class="dropdown-btn" onclick="toggleDropdown('syarat')">Syarat & Ketentuan</button>
                <div id="syarat" class="dropdown-content">
                    <p>Lorem Ipsum content here...</p>
                </div>
                <button class="dropdown-btn" onclick="toggleDropdown('description')">Deskripsi</button>
                <div id="description" class="dropdown-content">
                    <p>Lorem Ipsum content here...</p>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
