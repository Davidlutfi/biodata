@extends('adminlte')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Peserta Didik Page</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
    
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Peserta Didik</h3>
    
          
            </div>
            <div class="card-body">
              <form action="{{ route('pesertadidik.index') }}" method="get">
                <div class="input-group">
                  <input type="search" name="search" class="form-control" placeholder="Masukan Nama Lengkap" value="{{ $vcari }}">
                  <button type="submit" class="btn btn-primary">Cari</button>
                  <a href="{{ url('pesertadidik') }}">
                    <button class="btn btn-danger">X</button>
                  </a>
                </div>
              </form>
              <br>

              @if($message = Session::get('success'))
              <div class="alert alert-success">{{ $message }}</div>
              @endif
              <a href="{{ route('pesertadidik.create') }}" class="btn btn-success">Tambah Data</a>
              <a href="{{ url('pesertadidik/pdf') }}" class="btn btn-warning">Unduh PDF</a>
              <br><br>
              <table class="table table-striped table-bordered">
                <tr>
                      <th>NIS</th>
                      <th>Nama Lengkap</th>
                      <th>L/P</th>
                      <th>Nilai</th>
                      <th>Aksi</th>
                </tr>
                @if (count($pesertaM) > 0)
                @foreach ($pesertaM as $peserta)
                <tr>
                    <td>{{ $peserta->nis }}</td>
                    <td>{{ $peserta->namalengkap }}</td>
                    <td>{{ $peserta->jk }}</td>
                    <td>{{ $peserta->nilai }}</td>
                    <td>
                        <a href="{{ route('pesertadidik.edit', $peserta->id) }}" class="btn btn-xs btn-warning">Edit</a>

                        <form action="{{ route('pesertadidik.destroy', $peserta->id) }}" method="POST">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                  <td colspan="5">Data Tidak Ditemukan</td>
                </tr>
                @endif
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
          
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
    
        </section>
        <!-- /.content -->
      @endsection