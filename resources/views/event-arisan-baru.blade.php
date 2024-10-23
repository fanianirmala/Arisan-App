@extends('template.sidebar')

@section('content')
<link rel="stylesheet" href="css/event.css">
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<body>
    <i class="ti ti-home" style="color: #D2D2D2; font-size: 1rem;"></i><small style="font-size: 0.875rem;"><span style="color: #D2D2D2;">></span> Event Arisan Baru</small>
<br>
<br>
    <div class="d-flex justify-content-between align-items-center">
        <h2><b>Event Arisan</b></h2>
        <div>
            <a href="#" class="btn" style="color: red">Batalkan</a>
            <button class="btn" type="button" style="background-color: #03346E; color: #fff;">Simpan</button>
        </div>
    </div>
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header">
                        Deskripsi
                        <p class="card-text" style="color: #858585;  font-size: 0.875rem;"><i class="ti ti-alert-circle" style="color: blue;"></i> Mohon isi kelengkapan data Event Arisan.</p>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap">
                            <div class="form-group me-3" style="flex: 1 1 45%;">
                                <label for="judul" style="color: #4F4F4F;">Judul <span style="color: red">*</span></label>
                                <input type="text" id="judul" name="judul" class="form-control mt-3 mb-3" required>
                            </div>
                            <div class="form-group me-3" style="flex: 1 1 45%;">
                                <label for="nominal" style="color: #4F4F4F;">Nominal <span style="color: red">*</span></label>
                                <input type="text" id="nominal" name="nominal" class="form-control mt-3 mb-3" required>
                            </div>
                            <div class="form-group me-3" style="flex: 1 1 45%;">
                                <label for="jumlah_peserta" style="color: #4F4F4F;">Jumlah Peserta <span style="color: red">*</span></label>
                                <input type="text" id="jumlah_peserta" name="jumlah_peserta" class="form-control mt-3" required>
                            </div>
                            <div class="form-group me-3" style="flex: 1 1 45%;">
                                <label for="metode" style="color: #4F4F4F;">Metode Information <span style="color: red">*</span></label>
                                <input type="text" id="metode" name="metode" class="form-control mt-3" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="periode" style="color: #4F4F4F;">Periode Information <span style="color: red">*</span></label>
                            <textarea id="periode" name="periode" class="form-control mt-3" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#termsCollapse" style="text-decoration: none; color: #4F4F4F;">
                            Syarat & Ketentuan
                        </button>
                    </div>
                    <div id="termsCollapse" class="collapse show">
                        <div class="card-body">
                            <textarea name="syarat_ketentuan" id="syarat_ketentuan" class="form-control" rows="6" required></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        Jadwal Tayang
                        <p class="card-text" style="color: #858585;  font-size: 0.875rem;"><i class="ti ti-alert-circle" style="color: blue"></i> Mohon isi kelengkapan data Event Arisan.</p>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="tanggal_tayang" style="color: #4F4F4F;">Tanggal Tayang <span style="color: red">*</span></label>
                            <input type="date" id="tanggal_tayang" name="tanggal_tayang" class="form-control mt-3 mb-3" required>
                        </div>
                        <div class="form-group">
                            <label for="berakhir_tayang" style="color: #4F4F4F;">Berakhir Tayang <span style="color: red"></span></label>
                            <input type="number" id="berakhir_tayang" name="berakhir_tayang" class="form-control mt-3 mb-3" placeholder="Hari" required>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        Gambar Sampul
                    </div>
                    <div class="card-body text-center">
                        <input type="file" name="gambar_sampul" class="form-control-file">
                        <p class="mt-2">Belum ada Gambar Sampul</p>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#descriptionCollapse" style="text-decoration: none; color: #4F4F4F;">
                            Keterangan
                        </button>
                    </div>
                    <div id="descriptionCollapse" class="collapse show">
                        <div class="card-body">
                            <textarea name="keterangan" id="keterangan" class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- CKEditor -->
    <script>
        CKEDITOR.replace('syarat_ketentuan', {
            toolbar: [
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline'] },
                { name: 'paragraph', items: ['NumberedList'] }
            ]
        });
        CKEDITOR.replace('keterangan', {
            toolbar: [
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline'] },
                { name: 'paragraph', items: ['NumberedList'] }
            ]
        });
    </script>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
@endsection
