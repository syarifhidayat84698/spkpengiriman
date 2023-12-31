@extends('layout.page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pengirim</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pengirim</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pengirim</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{ url('peserta/add') }}" class="btn-sm btn-success">+ Tambah Data Pengirim</a>
                <br/><br/>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Pengirim</th>
                    <th>Tanggal</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($users as $i => $peserta)
                  <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $peserta->nama_pengirim }}</td>
                    <td>{{ $peserta->tanggal }}</td>
                    <td>
                      <a href="{{ url('peserta/edit/'.$peserta->id) }}" class="btn-xs btn-primary">Edit</a>
                      <a href="{{ url('peserta/delete/'.$peserta->id) }}" class="btn-xs btn-danger">Delete</a>
                    </td>
                  </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  @endsection
