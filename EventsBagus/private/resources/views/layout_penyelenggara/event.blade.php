<div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">Tabel Event</h3>
                <div class="col text-right">
                  <a class="btn btn-primary " href="{{ url('create-event') }}">Tambah Data</a>
                </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Aksi</th>
                    <th scope="col">Nama Event</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Tempat</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Isi</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($event as $e)
                  <tr>
                  <td class="text-left">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="{{ url('edit-event') }}/{{ $e->id }}">Ubah</a>
                          <a class="dropdown-item" href="{{ url('hapus-event') }}/{{ $e->id }}">Hapus</a>
                          
                        </div>
                      </div>
                    </td>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{ $e->nama }}</span>
                        </div>
                      </div>
                    </th>
                    <td>
                    {{ $e->kategori }}
                    </td>
                    <td>
                    {{ $e->tempat }}
                    </td>
                    <td>
                    {{ $e->tanggal }}
                    </td>
                    <td>
                        <div class="avatar-group">
                          <a href="#" class="avatar avatar-sm" data-toggle="tooltip">
                              <img src="{{ asset('private/public/public/images/event/' . $e->foto) }}" class="rounded-circle">
                          </a>
                        </div>
                    </td>
                    <td>
                    {!! $e->isi !!}
                    </td>
                    
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                {{ $event->links() }}
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- Dark table -->

