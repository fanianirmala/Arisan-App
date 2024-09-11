@extends('template.sidebar')

@section('content')
<div class="d-flex" style="justify-content: space-between">
    <h1><b>Event Arisan Baru</b></h1>
    <div class="cont2">
        <a href="#" style="color: red; margin-right: 10px;">Batalkan</a>
        <button class="btn" type="button" style="background-color: #03346E; color: #fff; width: 110px;">Simpan</button>
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-6 mb-3 mb-sm-0">
      {{-- card-kiri --}}
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Deskripsi</h5>
          <p class="card-text" style="color: #858585"><i class="ti ti-alert-circle" style="color: blue"></i> Mohon isi kelangkapan data Event Arisan.</p>
          <hr>
          <br>
          <form class="row g-3">
            <div class="col-md-6">
              <label for="name" class="form-label">Judul <span style="color: red;">*</span></label>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="col-md-6">
              <label for="rate" class="form-label">Nominal <span style="color: red;">*</span></label>
              <input type="text" class="form-control" name="rate" required>
            </div>
            <div class="col-md-6">
              <label for="hasil-nasabah" class="form-label">Jumlah Peserta <span style="color: red;">*</span></label>
              <input type="text" class="form-control" name="hasil-nasabah" required>
            </div>
            <div class="col-md-6">
              <label for="hasil-nisbah" class="form-label">Metode Information <span style="color: red;">*</span></label>
              <input type="text" class="form-control" name="hasil-nisbah" required>
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Periode Information <span style="color: red">*</span></label>
                <input type="text" class="form-control" id="inputAddress" style="height: 100px;">
              </div>
            <div class="input-group mb-3">
              <select class="form-select" name="inputGroupSelect01">
                <option selected>Choose...</option>
                <option value="1">One</option>
              </select>
            </div>
          </form>
        </div>
      </div>
    </div>
{{-- card-kanan --}}
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Jadwal Tayang</h5>
          <p class="card-text" style="color: #858585"><i class="ti ti-alert-circle" style="color: blue"></i> Mohon isi kelangkapan data Event Arisan.</p>
          <hr>
          <br>
          <form class="row g-3">
            <div class="col-md-6">
              <label for="mulai-tayang" class="form-label">Tanggal Tayang <span style="color: red;">*</span></label>
              <input type="date" class="form-control" name="mulai-tayang">
            </div>
            <div class="col-md-6">
              <label for="jam-tayang" class="form-label">Berakhir Tayang <span style="color: red;">*</span></label>
              <input type="datetime" class="form-control" name="jam-tayang" placeholder="Hari">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
