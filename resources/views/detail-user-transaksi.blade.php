@extends('template.sidebar')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
<div class="container-fluid">
    <!-- Breadcrumb -->
    <div class="detail mt-4">
        <div class="breadcrumb-nav d-flex flex-wrap align-items-center">
            <i class="fa-solid fa-house" style="color: #d2d2d2;"></i>
            <i class="fa-solid fa-angle-right" style="color: #d2d2d2;"></i>
            <a href="#" class="text2" style="color: #D2D2D2">Verifikasi User</a>
            <i class="fa-solid fa-angle-right" style="color: #D2D2D2;"></i>
            <a href="daftar-user" class="text1" style="color: #D2D2D2">Daftar User</a>
            <i class="fa-solid fa-angle-right"></i>
            <a href="#" class="text2" style="color: #6B6B6B">Detail User</a>
        </div>
        <div class="detail user mt-3">
            <h3>Detail User</h3>
        </div>
    </div>

    <!-- Horizontal line -->
    <hr class="my-4" style="border-top: 5px solid #CECECE;">

    <!-- User Information -->
    <div class="d-flex align-items-center mb-3 flex-wrap">
        <div class="rounded-circle bg-secondary" style="width: 50px; height: 50px;"></div>
        <div class="ms-3">
            <div class="d-flex align-items-center flex-wrap">
                <h5 class="mb-0">Nama There</h5>
                <span class="badge bg-danger ms-2">Butuh Tindakan</span>
            </div>
            <p class="mb-0 text-muted">
                <i class="bi bi-telephone"></i> 088876754321 
                @ User Name There 
                <i class="bi bi-envelope ms-2"></i> email
            </p>
            <p class="mb-0 text-muted">23-05-1997 Laki-Laki</p>
        </div>
    </div>

    <!-- Horizontal line -->
    <hr class="my-4" style="border-top: 5px solid #D9D9D9;">

    <!-- Second User Info -->
    <div class="d-flex align-items-center mb-3 flex-wrap">
        <div class="rounded-circle bg-secondary" style="width: 50px; height: 50px;"></div>
        <div class="ms-3">
            <div class="d-flex align-items-center flex-wrap">
                <h5 class="mb-0">Nama There</h5>
                <span class="badge bg-danger ms-2">Butuh Tindakan</span>
            </div>
            <p class="mb-0 text-muted">
                <i class="bi bi-telephone"></i> 088876754321 
                @ User Name There 
                <i class="bi bi-envelope ms-2"></i> email
            </p>
            <p class="mb-0 text-muted">23-05-1997 Laki-Laki</p>
        </div>
    </div>

    <!-- Tabs Section -->
    <div class="tabs mt-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="data-personal-tab" data-bs-toggle="tab" data-bs-target="#data-personal" type="button" role="tab" aria-controls="data-personal" aria-selected="true">Data Personal</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="data-transaksi-tab" data-bs-toggle="tab" data-bs-target="#data-transaksi" type="button" role="tab" aria-controls="data-transaksi" aria-selected="false">Data Transaksi</button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="data-personal" role="tabpanel" aria-labelledby="data-personal-tab">
                <!-- Content for Data Personal -->
                {{-- <p>Here goes personal data content...</p> --}}
            </div>
        </div>
    </div>

    <!-- Select Dropdown -->
    <div class="mt-3 text-end">
        <select class="form-select" aria-label="Default select example" style="width: 200px;">
            <option selected>Transaksi Umum</option>
            <option value="1">Transaksi 1</option>
            <option value="2">Transaksi 2</option>
        </select>
    </div>

    <!-- DataTable -->
    <div class="table-responsive mt-3">
        <div class="table-header">
            <h5>Data Transaksi</h5>
            <p class="text-muted">2 Hasil ditemukan</p>
        </div>

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
                    <td>Bank Mandiri <br> Jonathan : 12345621</td>
                    <td>Transfer Bank Lain</td>
                    <td>Rp1.000.000</td>
                    <td><a href="#" style="color: #00BFFF;">Lihat bukti</a></td>
                    <td>28 Agustus 2024</td>
                    <td>Uang Saluran</td>
                </tr>
                <tr>
                    <td>Transfer E-Wallet</td>
                    <td>OVO <br> Jonathan : 12345621</td>
                    <td>Transfer E-Wallet</td>
                    <td>Rp5.000.000</td>
                    <td><a href="#" style="color: #00BFFF;">Lihat bukti</a></td>
                    <td>28 Agustus 2024</td>
                    <td>Uang Saluran</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="7" class="text-start">Data yang ditampilkan</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                "pagingType": "simple_numbers", // Adds pagination
                "searching": true,              // Enables search
                "ordering": true,               // Enables column sorting
                "info": true,                   // Enables information display (e.g., "1-2 of 2 data")
                "lengthChange": false,          // Disables ability to change entries per page
                "language": {
                    "search": "_INPUT_",
                    "searchPlaceholder": "Cari",
                    "paginate": {
                        "previous": "<",
                        "next": ">"
                    },
                    "info": "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
                    "infoEmpty": "Tidak ada data yang ditemukan",
                    "emptyTable": "Tidak ada data"
                }
            });
        });
    </script>
    
</div>
@endsection
