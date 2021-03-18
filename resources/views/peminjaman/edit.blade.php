@extends('layout.main')

@section('title', 'Form Buku')

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
              <li class="breadcrumb-item"><a href=" {{ url('/peminjaman') }} ">Peminjaman Tables</a></li>
              <li class="breadcrumb-item active">Edit</li>
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
              <h3 class="card-title">Edit Peminjaman Buku</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="/peminjaman/{{ $peminjaman->id }}">
              @csrf
              @method('patch')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Id peminjaman</label>
                  <input type="text" class="form-control" readonly value=" {{ $peminjaman->id }} " name="id">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Id buku</label>
                  <input type="text" class="form-control" value=" {{ $peminjaman->id_buku }} " name="id_buku">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Id admin</label>
                  <input type="text" class="form-control" value=" {{ $peminjaman->id_admin }} " name="id_admin">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Id user</label>
                  <input type="text" class="form-control" value=" {{ $peminjaman->id_user }} " name="id_user">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal pinjam</label>
                  <input type="text" class="form-control" readonly value=" {{ $peminjaman->tanggal_pinjam }} " name="tanggal_pinjam">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal kembali</label>
                  <input type="date" class="form-control" value=" {{ $peminjaman->tanggal_kembali }} " name="tanggal_kembali">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-success">Update</button>
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