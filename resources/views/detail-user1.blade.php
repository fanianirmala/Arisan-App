@extends('template.sidebar')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail-User-1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="detail-user1.css">
</head>
<body>
    <div class="container">
        <div class="detail" style="margin-top:2rem;">
            <div class="breadcrumb-nav">
                <i class="fa-solid fa-house" style="color: #d2d2d2;"></i>
                <i class="fa-solid fa-angle-right" style="color: #d2d2d2;"></i>
                <a href="#" class="text2" style="color: #D2D2D2">Verifikasi User</a>
                <i class="fa-solid fa-angle-right" style="color: #D2D2D2;"></i>
                <a href="daftar-user" class="text1" style="color: #D2D2D2">Daftar User</a>
                <i class="fa-solid fa-angle-right"></i>
                <a href="#" class="text2" style="color: #6B6B6B">Detail User</a>
            </div>
            <div class="detail user" style="margin-top: 1rem;">
                <h1>Detail User</h1>
            </div>
        </div>
        <div class="horizontal-line" style="border-top: 5px solid #D9D9D9; width: 78%; position: absolute; top: 28%; margin-right: 2rem;"></div>
        <div class="d-flex align-items-center" style="margin-top: 2rem">
            <div class="rounded-circle bg-secondary" style="width: 50px; height: 50px;"></div>
            <div class="ms-3">
                <div class="d-flex align-items-center">
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
        <div class="horizontal-line" style="border-top: 5px solid #D9D9D9; width: 78%; position: absolute; top: 42%; margin-right: 2rem;"></div>
        <div class="d-flex align-items-center" style="margin-top: 2rem">
            <div class="rounded-circle bg-secondary" style="width: 50px; height: 50px;"></div>
            <div class="ms-3">
                <div class="d-flex align-items-center">
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
       <!-- DataTable -->
       <table id="datatable" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Tipe Transaksi</th>
                <th>Tujuan</th>
                <th>Jenis</th>
                <th>Nominal</th>
                <th>Bukti Transaksi</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009-01-12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012-03-29</td>
                <td>$433,060</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Data yang ditampilkan</th>
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
            $('#datatable').DataTable();
        });
    </script>
</body>
</html>

@endsection
