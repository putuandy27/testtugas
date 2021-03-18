@extends('layout.main')

@section('title', 'Form Peminjaman')

@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>General Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Create Form</li>
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
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Create Peminjaman Buku</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/peminjaman" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Buku</label>
                  <input type="text" class="form-control" id="buku" placeholder="Nama buku" name="id_buku">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Admin</label>
                  <input type="text" class="form-control" id="admin" placeholder="Nama admin" name="id_admin">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">User</label>
                  <input type="text" class="form-control" id="user" placeholder="Nama user" name="id_user">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Kembali</label>
                  <input type="date" class="form-control" id="tanggal" placeholder="Tanggal" name="tanggal_kembali">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection