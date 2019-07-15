<div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <!-- <button class="btn btn-primary ">Tambah Data</button> -->
              <h3 class="mb-0">Tabel Akun</h3>
                
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Aksi</th>
                    <th scope="col">Nama organisasi</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                
                  <tr>
                  <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="{{ url('edit-akun') }}/{{ $users->id }}">Edit</a>
                          
                        </div>
                      </div>
                    </td>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{ $users->name }}</span>
                        </div>
                      </div>
                    </th>
                    <td>
                    {{ $users->email }}
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                    {{ $users->password }}
                      </span>
                    </td>
                    
                    
                  </tr>
                  
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
      </div>
      <!-- Dark table -->

      <div class="col-md-4">
      <!-- <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#modal-form">Form</button> -->
  <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
            	
                	
<div class="card bg-secondary shadow border-0">
    <div class="card-body px-lg-5 py-lg-5">
        <div class="text-center text-muted mb-4">
            <small>Silahkan isi form peserta</small>
        </div>
        <form role="form">
            <div class="form-group">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" placeholder="Nama" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="No WA / hp" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></i></span>
                    </div>
                    <textarea rows="4" class="form-control form-control-alternative" placeholder="Alamat"></textarea>
                </div>
            </div>
            
           
            <div class="text-center">
                <button type="button" class="btn btn-primary my-4">Simpan</button>
            </div>
        </form>
    </div>
</div>

</div>
            
            </div>
        </div>
    </div>
</div>