@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Alternatif</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Alternatif</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Alternatif</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/alternatif/update/'.$alternatif->id) }}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" placeholder="Nama Jasa Pengiriman" value="{{ $alternatif->nama}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis_armada" class="col-sm-2 col-form-label">Jenis Armada</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jenis_armada" placeholder="Nilai Jenis armada 1-5" value="{{ $alternatif->jenis_armada}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jangkauan" class="col-sm-2 col-form-label">Jangkauan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jangkauan" placeholder="Nilai jangkauan 1-3" value="{{ $alternatif->jangkauan}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="pengalamanusaha" class="col-sm-2 col-form-label">Pengalaman Usaha</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="pengalamanusaha" placeholder="Nilai 1-5" value="{{ $alternatif->pengalamanusaha}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="harga" placeholder="Nilai 1-3" value="{{ $alternatif->harga}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="waktupengiriman" class="col-sm-2 col-form-label">Waktu Pengiriman</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="waktupengiriman" placeholder="Nilai 1-5" value="{{ $alternatif->waktupengiriman}}">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection