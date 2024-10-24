@extends('template.sidebar')
@section('content')
    <link rel="stylesheet" href="css/listArisan.css">

    <body>
        <i class="ti ti-home" style="color: #D2D2D2; font-size: 1rem;"></i><small style="font-size: 0.875rem;"><span style="color: #D2D2D2;">></span> Event Arisan</small>
        <br>
        <br>
        <h2><b>Hai @auth {{ Auth::user()->name }}! @endauth
            </b></h2>
        <small>Event Arisan Baru Telah Dibuka! Jangan sampai ketinggalan kesempatan untuk bergabung di putaran arisan kali ini. Cek detailnya sekarang dan pastikan nama Anda ada di daftar peserta!</small>
        <br>
        <br>
        <div class="table-container" style="border-radius: 10px">
            <table>
                <thead style="border-radius: 5px">
                    <tr>
                        <th>List Arisan</th>
                        <th>Pemilik Event</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="assets/img/prof.jpg">
                            <span>Nia’s Fun-Tastic</span>
                        </td>
                        <td>Nia</td>
                        <td><span class="status ongoing">Sedang Berlangsung</span></td>
                        <td>
                            <div class="icon d-flex">
                                <a href="#"><i class="ti ti-edit"></i></a>
                                <a href="#"><i class="ti ti-trash"></i></a>
                                <a href="{{ route('detail-event') }}"><i class="ti ti-eye"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="assets/img/prof.jpg">
                            <span>Journey with Fania</span>
                        </td>
                        <td>Fania</td>
                        <td><span class="status upcoming">Akan Berlangsung</span></td>
                        <td>
                            <div class="icon d-flex">
                                <a href="#"><i class="ti ti-edit"></i></a>
                                <a href="#"><i class="ti ti-trash"></i></a>
                                <a href="#"><i class="ti ti-eye"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="assets/img/prof.jpg">
                            <span>Wanda's Moments</span>
                        </td>
                        <td>Wanda</td>
                        <td><span class="status unavailable">Tidak Tersedia</span></td>
                        <td>
                            <div class="icon d-flex">
                                <a href="#"><i class="ti ti-edit"></i></a>
                                <a href="#"><i class="ti ti-trash"></i></a>
                                <a href="#"><i class="ti ti-eye"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <ul class="pagination justify-content-end mt-3">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </div>
    </body>
@endsection
