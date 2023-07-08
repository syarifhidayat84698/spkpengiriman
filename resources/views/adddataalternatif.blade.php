@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Alternatif</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Alternatif</li>
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
                <h3 class="card-title">Add Alternatif</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/alternatif/store')}}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" placeholder="Nama jasa pengiriman" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis_armada" class="col-sm-2 col-form-label">Jenis Armada</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jenis_armada" placeholder="Nilai Jenis armada 1-5" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria_2" class="col-sm-2 col-form-label">Jangkauan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jangkauan" placeholder="Nilai Jangkauan 1-3" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria_3" class="col-sm-2 col-form-label">Pengalaman Usaha</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="pengalamanusaha" placeholder="1-5" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria_4" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="harga" placeholder="1-3" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria_4" class="col-sm-2 col-form-label">Waktupengiriman</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="waktupengiriman" placeholder="1-5" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Create</button>
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