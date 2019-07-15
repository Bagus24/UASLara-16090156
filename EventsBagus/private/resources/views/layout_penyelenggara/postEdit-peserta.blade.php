<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
<div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <h3 class="mb-0">Ubah data Peserta</h3>
            </div>
            <div class="card-body">
              <div class="container">
                
                <form style="margin:20px;" action="{{ url('postEditPeserta') }}/{{ $peserta->id }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="col-xl-12" >
                        <label for="judul" class="col-sm-6">Nama</label>
                        <div class="col-12">
                            <div class="form-group">
                                <input value="{{$peserta->nama}}" name="nama" type="text" class="form-control" id="judul" placeholder="Nama">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12" >
                        <label for="email" class="col-sm-6">Email</label>
                        <div class="col-12">
                            <div class="form-group">
                                <input value="{{$peserta->email}}" name="email" type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12" >
                        <label for="no_hp" class="col-sm-6">No HP / WA</label>
                        <div class="col-12">
                            <div class="form-group">
                                <input value="{{$peserta->no_hp}}" name="no_hp" type="number" class="form-control" id="no_hp" placeholder="No HP / WA">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12" >
                        <label for="alamat" class="col-sm-6">Alamat</label>
                        <div class="col-12">
                            <div class="form-group">
                            <textarea value="{{ $peserta->alamat }}" name="alamat" class="form-control form-control-alternative" rows="3" placeholder="Alamat" id="alamat">{{ $peserta->alamat }}</textarea>
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-xl-12">
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Simpan</button>
                            </div>
                        </div>
                    </div>    
                    
                </form>


              </div>
            </div>
          </div>
        </div>
      </div>

      