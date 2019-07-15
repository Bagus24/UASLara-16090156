<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
<div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <h3 class="mb-0">Post Jadwal</h3>
            </div>
            <div class="card-body">
              <div class="container">
                
                <form style="margin:20px;" action="{{ url('postJadwal') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="col-xl-12" >
                        <label for="judul" class="col-sm-6">Nama event</label>
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
                        <label for="hari" class="col-sm-6">Hari</label>
                        <div class="col-12">
                            <div class="form-group">
                                <select name="hari">
                                    <option value="1">ke - 1</option>
                                    <option value="2">ke - 2</option>
                                    <option value="3">ke - 3</option>
                                    <option value="4">ke - 4</option>
                                    <option value="5">ke - 5</option>
                                    <option value="6">ke - 6</option>
                                    <option value="7">ke - 7</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12" >
                        <label for="jam" class="col-sm-6">Waktu</label>
                        <div class="col-12">
                            <div class="form-group">
                                <input name="jam" type="time" class="form-control" id="jam" placeholder="Pukul berapa">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12" >
                        <label for="kegiatan" class="col-sm-6">Kegiatan</label>
                        <div class="col-12">
                            <div class="form-group">
                                <input name="kegiatan" type="text" class="form-control" id="kegiatan" placeholder="Nama kegiatan">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12" >
                        <label for="isi" class="col-sm-6">Isi kegiatan</label>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea name="isi" class="form-control form-control-alternative" rows="3" placeholder="Isi kegiatan" id="isi" name="isi"></textarea>
                                <!-- <script>
                                    CKEDITOR.replace( 'isi' );
                                </script> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Post jadwal</button>
                            </div>
                        </div>
                    </div>    
                    
                </form>


              </div>
            </div>
          </div>
        </div>
      </div>

      