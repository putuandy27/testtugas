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
            <li class="breadcrumb-item"><a href="{{ url('/buku') }}">Buku Tables</a></li>
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
                    <h5>Id: {{ $buku->id }} </h5>
                    <p class="card-text">Nama buku: {{ $buku->name }} </p>
                    <p class="card-text">Jumlah buku: {{ $buku->jumlah_buku }} </p>
                    <div class="btn-group">
                        <a href="{{ url('/buku') }}" class="mr-2 btn btn-secondary">Kembali</a>
                        <a href="/buku/{{ $buku->id }}/edit" class="mr-2 btn btn-success">Edit</a>
                        <form action="/buku/{{ $buku->id }}" method="post">
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