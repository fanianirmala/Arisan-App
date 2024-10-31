@extends('template.sidebar')
@section('content')
<link rel="stylesheet" href="{{ asset('css/detailEventArisan.css') }}">

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
                <i class="ti ti-circle-rectangle" style="margin-top: 9px"></i>
                <a href="#"><p class="mt-2">Berhenti Tayang</p></a>
            </div>
        </div>
    </div>

    <ul class="nav nav-underline mt-3">
        <li class="nav-item">
            <a class="nav-link active" href="#" onclick="showTab('nominal')">Nominal Arisan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" onclick="showTab('peserta')">Jumlah Peserta</a>
        </li>
    </ul>

    <div id="content-nominal" class="tab-content">
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card card-detail">
                    <div class="card-jadwal d-flex">
                        <div class="mulai-tayang d-flex">
                            <div class="icon">
                                <i class="ti ti-calendar-check" style="color: #03346E"></i>
                            </div>
                            <div class="text">
                                <p><b>Mulai Tayang</b><br><small>{{ $eventDetail['start_date'] }}</small></p>
                            </div>
                        </div>
                        <div class="berakhir-tayang d-flex">
                            <div class="icon">
                                <i class="ti ti-calendar-x" style="color: #FF5050"></i>
                            </div>
                            <div class="text">
                                <p><b>Berakhir Tayang</b><br><small>{{ $eventDetail['end_date'] }}</small></p>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="fx info-section" style="justify-content: space-between; padding: 15px;">
                        <div class="head">
                            <p>Nominal Arisan</p>
                            <p>Jumlah Peserta</p>
                        </div>
                        <div class="body info-body">
                            <p>{{ $eventDetail['nominal_arisan'] }}</p>
                            <p>{{ $eventDetail['max_participant'] }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="dana d-flex">
                        <i class="ti ti-wallet" style="color: #03346E;"></i>
                        <p>Terkumpul<br><b>{{ $eventDetail['nominal_arisan'] }}</b></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <button class="dropdown-btn" onclick="toggleDropdown('syarat')">Syarat & Ketentuan</button>
                    <div id="syarat" class="dropdown-content">
                        <p>{{ $eventDetail['tnc'] }}</p>
                    </div>
                    <button class="dropdown-btn" onclick="toggleDropdown('description')">Deskripsi</button>
                    <div id="description" class="dropdown-content">
                        <p>{{ $eventDetail['description'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content-peserta" class="tab-content" style="display:none;">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Aktif</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Tidak Aktif</td>
              </tr>
            </tbody>
          </table>
    </div>

    <script>
        function showTab(tab) {
            var nominalContent = document.getElementById('content-nominal');
            var pesertaContent = document.getElementById('content-peserta');

            if (tab === 'nominal') {
                nominalContent.style.display = 'block';
                pesertaContent.style.display = 'none';
                document.querySelector('.nav-link.active').classList.remove('active');
                document.querySelector('.nav-link.disable').classList.add('active');
            } else {
                nominalContent.style.display = 'none';
                pesertaContent.style.display = 'block';
                document.querySelector('.nav-link.disable').classList.remove('active');
                document.querySelector('.nav-link').classList.add('active');
            }
        }

        function toggleDropdown(id) {
            var dropdownContent = document.getElementById(id);
            dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
        }

        window.onload = function() {
            document.getElementById('syarat').style.display = 'block';
            document.getElementById('description').style.display = 'block';
            showTab('nominal');
        };
    </script>
</body>
@endsection
