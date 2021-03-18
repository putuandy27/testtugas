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
            <li class="breadcrumb-item active">Peminjaman Tables</li>
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
              <h3 class="card-title">Tabel Peminjaman</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Buku</th>
                        <th>Admin</th>
                        <th>User</th>
                        <th>Pinjam</th>
                        <th>Kembali</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peminjaman as $p)
                    <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td> {{ $p->id_buku }} </td>
                        <td> {{ $p->id_admin }} </td>
                        <td> {{ $p->id_user }} </td>
                        <td> {{ $p->tanggal_pinjam }} </td>
                        <td> {{ $p->tanggal_kembali }} </td>
                        <td>
                          <a href="peminjaman/{{ $p->id }}" class="btn btn-block btn-info btn-sm">Detail</a>                        
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
