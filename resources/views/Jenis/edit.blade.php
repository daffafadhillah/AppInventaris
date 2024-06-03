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
          <li class="breadcrumb-item ml-1"><a href="/jenis">Jenis</a></li>
           <li class="breadcrumb-item active ml-1">Edit Jenis</li>
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
             
            <h3>Edit Data Jenis</h3>
          </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="/jenis/update" method="POST">
                  @csrf
                  @method('POST')
                  <input type="hidden" name="idjenis" value="{{ $jenis->idjenis }}">
                  <div class="form-group">
                    <input type="text" id="namajenis" name="namajenis" class="form-control" placeholder="Nama Jenis" value="{{ $jenis->namajenis }}">
                </div>
                  <div class="form-group mt-3">
                      <input type="text" id="kodejenis" name="kodejenis" class="form-control" placeholder="Kode Jenis" value="{{ $jenis->kodejenis }}">
                  </div>
                  <div class="form-group">
                      <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan" value="{{ $jenis->keterangan }}">
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-info mt-3">Simpan Data Jenis</button>
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
