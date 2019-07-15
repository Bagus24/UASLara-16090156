<div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">Tabel Log Aktivitas</h3>
                
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                  
                  <th scope="col">Subjek</th>
                    <th scope="col">URL</th>
                    <th scope="col">Method</th>
    
                    <th scope="col">Tanggal</th>
                    
                    
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($logs as $key => $log)
                  <tr>
                  
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{ $log->subject }}</span>
                        </div>
                      </div>
                    </th>
                    <td>
                    {{ $log->url }}
                    </td>
                    <td>
                    {{ $log->method }}
                    </td>
                   
                    <td>
                    {{ $log->created_at }}
                    </td>
                  
                  </tr>
                 @endforeach
                </tbody>
              </table>
            </div>
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                {{ $logs->links() }}
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- Dark table -->



    

