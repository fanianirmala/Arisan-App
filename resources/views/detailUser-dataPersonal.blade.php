@extends('template.sidebar')
@section('content')
<link rel="stylesheet" href="css/data-personal.css">
<body>
    <body>

        <div class="user-info">
            <div class="user-header">
                <span class="status registered">Terdaftar</span>
                <h2>Nama There</h2>
                <p>089767873421 @ User Name There @ email</p>
                <p>12-05-1997 Laki-laki</p>
            </div>
        </div>

        <h3>Detail User</h3>

        <div class="tab-container">
            <div class="tabs">
                <button class="tab-link active" onclick="openTab(event, 'data-personal')">Data Personal</button>
                <button class="tab-link" onclick="openTab(event, 'data-transaksi')">Data Transaksi</button>
            </div>

            <div id="data-personal" class="tab-content">
                <div class="data-container">
                    <div class="personal-info">
                        <h4>Data KTP</h4>
                        <p><strong>Nama Lengkap</strong>: Nama There</p>
                        <p><strong>ID KTP</strong>: 189720276929</p>
                        <p><strong>Tempat/Tanggal Lahir</strong>: Bogor, 12 Agustus 3023</p>
                        <p><strong>Agama</strong>: Islam</p>
                        <p><strong>Status Pernikahan</strong>: Belum Menikah</p>
                        <p><strong>Jenis Kelamin</strong>: Laki-Laki</p>
                        <p><strong>Alamat KTP</strong>: Jl. Batu indah perjuangan emas, Kp Harapan RT08/07</p>
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

            <div id="data-transaksi" class="tab-content" style="display:none;">
                <p>Data Transaksi akan ditampilkan di sini.</p>
            </div>
        </div>

        <script>
            function openTab(evt, tabName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tab-content");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tab-link");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(tabName).style.display = "block";
                evt.currentTarget.className += " active";
            }
        </script>
</body>
</html>

@endsection
