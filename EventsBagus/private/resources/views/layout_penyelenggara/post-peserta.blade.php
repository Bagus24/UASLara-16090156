<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
<div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <h3 class="mb-0">Post Peserta</h3>
            </div>
            <div class="card-body">
              <div class="container">
                
                <form style="margin:20px;" action="{{ url('postPeserta') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="col-xl-12" >
                        <label for="judul" class="col-sm-6">Event</label>
                        <div class="col-12">
                            <div class="form-group">
                                
                                <select name="nama_event">
                                    @foreach($event as $e)
                                    <option value="{{ $e->nama }}">{{ $e->nama }}</option>
                                    @endforeach
                                </select>

                               
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12" >
                        <label for="nama" class="col-sm-6">Nama</label>
                        <div class="col-12">
                            <div class="form-group">
                                <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama peserta">
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-xl-12" >
                        <label for="email" class="col-sm-6">Email</label>
                        <div class="col-12">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" id="email" placeholder="Email peserta">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12" >
                        <label for="no_hp" class="col-sm-6">No HP / WA</label>
                        <div class="col-12">
                            <div class="form-group">
                                <input name="no_hp" type="number" class="form-control" id="email" placeholder="Nomor HP / WA">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12" >
                        <label for="alamat" class="col-sm-6">Alamat</label>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea name="alamat" class="form-control form-control-alternative" rows="3" placeholder="Alamat" id="alamat"></textarea>
                                <!-- <script>
                                    CKEDITOR.replace( 'isi' );
                                </script> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Post peserta</button>
                            </div>
                        </div>
                    </div>    
                    
                </form>


              </div>
            </div>
          </div>
        </div>
      </div>

      