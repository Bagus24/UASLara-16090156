<div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Tabel Jadwal</h3>
                <div class="col text-right">
                  <a class="btn btn-primary " href="{{ url('create-jadwal') }}">Tambah Data</a>
                </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Aksi</th>
                    <th scope="col">Nama Event</th>
                    <th scope="col">Hari ke</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Kegiatan</th>
                    <th scope="col">Isi</th>
                    
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($jadwal as $j)
                  <tr>
                  <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="{{ url('edit-jadwal') }}/{{ $j->id }}">Ubah</a>
                          <a class="dropdown-item" href="{{ url('hapus-jadwal') }}/{{ $j->id }}">Hapus</a>
                          
                        </div>
                      </div>
                    </td>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{ $j->nama_event }}</span>
                        </div>
                      </div>
                    </th>
                    <td>
                    {{ $j->hari }}
                    </td>
                    <td>
                    {{ $j->jam }}
                    </td>
                    <td>
                    {{ $j->kegiatan }}
                    </td>
                    <td>
                    {{ $j->isi }}
                    </td>
                    
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                {{ $jadwal->links() }}
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- Dark table -->
