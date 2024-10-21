@extends('template.sidebar')
@section('content')
<link rel="stylesheet" href="css/detail-arisan.css">
<i class="ti ti-home" style="color: #858585"></i>
<i class="ti ti-chevron-right" style="color: #858585"></i>
<span style="color: #858585">Event Arisan</span>

<i class="ti ti-chevron-right"></i><span>Detail Arisan</span>

<div class="join d-flex">
  <div class="content d-flex mt-4">
    <h1>Detail Arisan</h1>
    <a class="btn" type="button" style="background-color: #6FE389; color: #03C350; margin-left:30px; padding-top: 15px;">sedang berlangsung</a>
</div>

<div class="cnt d-flex mt-4">
    <button class="btn btn-primary" type="button" style="background-color: #03346E; color: #ffff; width:100px; height: 40px; border-color: #03346E; margin-left:30px;"><i class="fa-solid fa-pen"></i> Edit</button>
    <a href="#" class="btn"><i class="ti ti-dots-vertical" style="margin-top: 20px;"></i>
    </a>
</div>
</div>
<div class="text d-flex" style="float: right; margin-right: 10px;">
  <i class="ti ti-circle-rectangle" style="margin-top: 10px; margin-right:5px; color: red;"></i><p class="mt-2" style="color: red">Berhenti Tayang</p>
</div>
        <ul class="nav nav-underline mt-5">
            <li class="nav-item">
                <a class="nav-link disable" href="#">Nominal Arisan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Jumlah Peserta</a>
            </li>
        </ul>
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card" style="height:115%;">
                <div class="flex" style="display: flex; margin: 5px; padding: 5px; justify-content:space-between">
                    <div class="card-header" style= "border-radius:10px; background-color:#E2E2B6; width:210px; margin-left: 20px;"><i class="ti ti-calendar-check" style="color:#03346E;"></i> <b>Jadwal Tayang</b>
                        <div class="text-card"><h7>02 Agustus 2021 23:00</h7></div>
                    </div>
                    <div class="card-header"  style= "border-radius:10px; background-color:#E2E2B6; width:220px; margin-right: 20px;"> <i class="ti ti-calendar-x" style="color:red;"></i> <b>Berakhir Tayang</b>
                        <div class="text-card"><h6>10 Agustus 2021 23:00</h6></div>
                    </div>
                    <div class="horizontal-line1"></div>
                </div>
              <div class="fx" style="display: flex; : 5px; padding: 5px; justify-content:center; margin-top: 10px;">
                <div class="head" style="color: #B4B4B4;">
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
                <div class="body" style="float: right; text-align:right">
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
                          <p>lorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem lorem lorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem </p>
                      </div>
                        <button class="dropdown-btn" onclick="toggleDropdown('description')">Deskripsi</button>
                        <div id="description" class="dropdown-content">
                            <p>lorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem lorem lorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem lorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem Ipsumlorem </p>
                        </div>
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div>
@endsection
