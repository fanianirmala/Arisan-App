@extends('template.sidebar')
@section('content')
<i class="ti ti-home" style="color: #D2D2D2"></i><small><span style="color: #D2D2D2;">> Verifikasi User ></span> Detail User</small>
<br>
<br>
<div class="head d-flex" style="justify-content: space-between;">
    <h2>Detail User</h2>
    <div class="dropdown">
        <a href="#" class="btn" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="ti ti-dots-vertical"></i>
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Edit</a></li>
            <li><a class="dropdown-item" href="#">Hapus</a></li>
            <li><a class="dropdown-item" href="#">Lihat</a></li>
        </ul>
    </div>
</div>
@endsection
