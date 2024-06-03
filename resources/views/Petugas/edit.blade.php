@extends('layout')
@section('konten')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Edit Petugas</h1>
      </div>
      <div class="col-lg-12">
        <div class="card">
          <ol class="breadcrumb float-sm-left m-3">
            <li class="breadcrumb-item ml-1"><a href="/petugas">Petugas</a></li>
            <li class="breadcrumb-item active ml-1">Edit Petugas</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h3>Edit Data Petugas</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="/petugas/update" method="POST">
              @csrf
              <input type="hidden" name="idpetugas" value="{{ $petugas->idpetugas }}">

              <div class="form-group">
                <label for="namapetugas">Nama Petugas:</label>
                <input type="text" id="namapetugas" name="namapetugas" class="form-control" placeholder="Nama Petugas" value="{{ old('namapetugas', $petugas->namapetugas) }}">
                @if ($errors->has('namapetugas'))
                    <span class="text-danger">{{ $errors->first('namapetugas') }}</span>
                @endif
              </div>

              <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" value="{{ old('username', $petugas->username) }}">
                @if ($errors->has('username'))
                    <span class="text-danger">{{ $errors->first('username') }}</span>
                @endif
              </div>

              <div class="form-group">
                <label for="idlevel">Level:</label>
                <select name="idlevel" class="form-control" required>
                  <option value="">-- LEVEL --</option>
                  @foreach ($detail_level as $item)
                    <option value="{{ $item['idlevel'] }}" {{ old('idlevel', $petugas->idlevel) == $item['idlevel'] ? 'selected' : '' }}>{{ $item['namalevel'] }}</option>
                  @endforeach
                </select>
                @if ($errors->has('idlevel'))
                    <span class="text-danger">{{ $errors->first('idlevel') }}</span>
                @endif
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-info mt-3">Simpan Data Petugas</button>
              </div>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
@endsection
