@extends('layout.main')

@section('title', 'Table Peminjaman')

@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>DataTables</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href=" {{ url('/peminjaman') }} ">Peminjaman Tables</a></li>
              <li class="breadcrumb-item active">Detail</li>
            </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Tabel Peminjaman</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <h5>Id: {{ $peminjaman->id }} </h5>
                    <p class="card-text">Nama buku: {{ $peminjaman->id_buku }} </p>
                    <p class="card-text">Id admin: {{ $peminjaman->id_admin }} </p>
                    <p class="card-text">Nama user: {{ $peminjaman->id_user }} </p>
                    <p class="card-text">Tanggal pinjam: {{ $peminjaman->tanggal_pinjam }} </p>
                    <p class="card-text">Tanggal kembali: {{ $peminjaman->tanggal_kembali }} </p>
                    <div class="btn-group">
                        <a href="{{ url('/peminjaman') }}" class="mr-2 btn btn-secondary">Kembali</a>
                        <a href="/peminjaman/{{ $peminjaman->id }}/edit" class="mr-2 btn btn-success">Edit</a>
                        <form action="/peminjaman/{{ $peminjaman->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                    
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