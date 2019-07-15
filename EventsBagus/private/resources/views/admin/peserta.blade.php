<div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Tabel Peserta</h3>
                <!-- <div class="col text-right">
                  <button class="btn btn-primary " data-toggle="modal" data-target="#modal-form">Tambah Data</button>
                </div> -->
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                  <th scope="col">Aksi</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">No WA / Hp</th>
                    <th scope="col">Alamat</th>
                    
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($peserta as $p)
                  <tr>
                  <td class="text-left">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="{{ url('edit-peserta') }}/{{ $p->id }}">Ubah</a>
                          <a class="dropdown-item" href="{{ url('hapus-peserta') }}/{{ $p->id }}">Hapus</a>
                          
                        </div>
                      </div>
                    </td>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{ $p->nama }}</span>
                        </div>
                      </div>
                    </th>
                    <td>
                    {{ $p->email }}
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                      {{ $p->no_hp }}
                      </span>
                    </td>
                    <td>
                    {{ $p->alamat }}
                    </td>
                    
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  
                  {{ $peserta->links() }}
                </ul>
              </nav>
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
        <form role="form" action="{{ url('adminDaftarPeserta') }}" method="post">
        {{ csrf_field() }}
            <div class="form-group">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" placeholder="Nama penyelenggara" type="text" name="nama">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" placeholder="Nama" type="text" name="nama">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" name="email">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="No WA / hp" type="number" name="no_hp">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></i></span>
                    </div>
                    <textarea rows="4" class="form-control form-control-alternative" placeholder="Alamat" name="alamat"></textarea>
                </div>
            </div>
            
           
            <div class="text-center">
                <button type="submit" class="btn btn-primary my-4">Simpan</button>
            </div>
        </form>
    </div>
</div>

</div>
            
            </div>
        </div>
    </div>
</div>

    

