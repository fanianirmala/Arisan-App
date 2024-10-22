@extends('template.sidebar')@section('content')
<title>Detail User</title>

<!-- Bootstrap and FontAwesome -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/daftar-user.css">

<body>
    <div class="container mt-3">
        <!-- Breadcrumb/Navigation -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home" style="color: #D2D2D2;"></i></a></li>
                <li class="breadcrumb-item"><a href="#" style="color: #D2D2D2;">Verifikasi User</a></li>
                <li class="breadcrumb-item active" aria-current="page">Daftar User</li>
            </ol>
        </nav>

        <!-- Title -->
        <h2 class="mb-4">Daftar User</h2>
    </div>
</body>

@endsection
