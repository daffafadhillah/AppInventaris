@extends('layout')
@section('konten')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0"></h1>
      </div>
      <div class="col-lg-12">
       <div class="card">
         <ol class="breadcrumb float-sm-left m-3">
          <li class="breadcrumb-item ml-1"><a href="/ruang">Ruang</a></li>
           <li class="breadcrumb-item active ml-1">Edit Ruang</li>
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
             
            <h3>Edit Data ruang</h3>
          </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="/ruang/update" method="POST">
                  @csrf
                  @method('POST')
                  <input type="hidden" name="idruang" value="{{ $ruang->idruang }}">
                  <div class="form-group">
                    <input type="text" id="namaruang" name="namaruang" class="form-control" placeholder="Nama ruang" value="{{ $ruang->namaruang }}">
                </div>
                  <div class="form-group mt-3">
                      <input type="text" id="koderuang" name="koderuang" class="form-control" placeholder="Kode ruang" value="{{ $ruang->koderuang }}">
                  </div>
                  <div class="form-group">
                      <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan" value="{{ $ruang->keterangan }}">
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-info mt-3">Simpan Data ruang</button>
                  </div>
              </form>
          </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
       </div>
       <!-- /.col-md-6 -->
   
       <!-- /.col-md-6 -->
     </div>
     <!-- /.row -->
   </div><!-- /.container-fluid -->
 </div>

@endsection
