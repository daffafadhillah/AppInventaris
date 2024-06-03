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
          <li class="breadcrumb-item ml-1"><a href="/pegawai">Pegawai</a></li>
           <li class="breadcrumb-item active ml-1">Tambah Pegawai</li>
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
             
            <h3>Tambah Data Pegawai</h3>
          </div>
            <!-- /.card-header -->
            <div class="card-body">
              
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <form action="store" method="POST">
                      @csrf
                      @method('POST')
                        <div class="form-group">
                            <input type="text" id="namapegawai" name="namapegawai" class="form-control" placeholder="Nama Pegawai">
                        </div>
                        <div class="form-group">
                            <input type="number" id="nip" name="nip" class="form-control" placeholder="NIP">
                        </div>
                        <div class="form-group">
                          <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat">
                        </div>
                      <div class="form-group">
                       <button type="submit" class="btn btn-info mt-3">Simpan Data Pegawai</button>
                    </div>
                    </form>
                    
  
                </tbody>

              </table>
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
