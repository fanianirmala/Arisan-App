@extends('template.sidebar')
@section('content')
    <link rel="stylesheet" href="css/viewProfile.css">

    <body>
        <i class="ti ti-home" style="color: #D2D2D2;"></i>
        <small><span style="color: #D2D2D2;">> Event Arisan ></span> Detail Arisan</small>
        <br><br>
        <div class="join">
            <div class="content">
                <h2><b>Detail Arisan</b></h2>
            </div>
        </div>
        <div class="content d-flex">
            <div class="img">
                <img src="assets/img/prof.jpg">
            </div>
            <div id="data-personal" class="tab-content mt-3">
                <div class="data-container">
                    <div class="personal-info mt-1">
                        <h4><b>Data Profile</b></h4>
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
        </div>
    </body>
@endsection
