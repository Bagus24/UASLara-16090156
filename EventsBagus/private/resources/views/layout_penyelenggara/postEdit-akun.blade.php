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
                
                <form style="margin:20px;" action="{{ url('postEditAkun') }}/{{ $users->id }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="col-xl-12" >
                        <label for="judul" class="col-sm-6">Nama Organisasi</label>
                        <div class="col-12">
                            <div class="form-group">
                                <input value="{{$users->name}}" name="name" type="text" class="form-control" id="judul" placeholder="Nama organisasi">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12" >
                        <label for="email" class="col-sm-6">Email</label>
                        <div class="col-12">
                            <div class="form-group">
                                <input value="{{$users->email}}" name="email" type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12" >
                        <label for="no_hp" class="col-sm-6">Kata sandi</label>
                        <div class="col-12">
                            <div class="form-group">
                                <input value="{{$users->password}}" name="password" type="text" class="form-control" id="no_hp" placeholder="Kata sandi">
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

      