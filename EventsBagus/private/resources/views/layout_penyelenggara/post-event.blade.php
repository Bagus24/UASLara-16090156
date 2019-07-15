<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
<div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <h3 class="mb-0">Post Event</h3>
            </div>
            <div class="card-body">
              <div class="container">
                
                <form style="margin:20px;" action="{{ url('postEvent') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="col-xl-12" >
                        <label for="judul" class="col-sm-6">Nama event</label>
                        <div class="col-12">
                            <div class="form-group">
                                <input name="nama" type="text" class="form-control" id="judul" placeholder="Nama event">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12" >
                        <label for="kategori" class="col-sm-6">Kategori</label>
                        <div class="col-12">
                            <div class="form-group">
                                <select name="kategori">
                                    <option value="IT">Teknik Informatika</option>
                                    <option value="Pendidikan">Pendidikan</option>
                                    <option value="Hiburan">Hiburan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12" >
                        <label for="gambar" class="col-sm-6">Gambar</label>
                        <div class="col-12">
                            <div class="form-group">
                                <input name="foto" type="file" class="form-control" id="gambar" placeholder="Gambar event">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12" >
                        <label for="tempat" class="col-sm-6">Tempat dan Alamat</label>
                        <div class="col-12">
                            <div class="form-group">
                                <input name="tempat" type="text" class="form-control" id="tempat" placeholder="Tempat dan alamat">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12" >
                        <label for="tanggal" class="col-sm-6">Tanggal mulai</label>
                        <div class="col-12">
                            <div class="form-group">
                                <input name="tanggal" type="date" class="form-control" id="tanggal" placeholder="tanggal event">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12" >
                        <label for="isi" class="col-sm-6">Deskripsi event</label>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea name="isi" class="form-control form-control-alternative" rows="3" placeholder="Write a large text here ..." id="isi" name="isi"></textarea>
                                <script>
                                    CKEDITOR.replace( 'isi' );
                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Post event</button>
                            </div>
                        </div>
                    </div>    
                    
                </form>


              </div>
            </div>
          </div>
        </div>
      </div>

      