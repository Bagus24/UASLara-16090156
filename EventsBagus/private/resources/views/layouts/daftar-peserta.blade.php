    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <
          <div class="col-md-3">
            <p><span>No WA / HP:</span> <a href="#">+6283113530795</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="#">eventbagus@gmail.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">EventBagus</a></p>
          </div>
        </div>
        <div class="row block-9 justify-content-center">
          <div class="col-md-6 order-md-last d-flex">
            <form action="{{ url('daftarPesertaEvent') }}" method="post" class="bg-light p-5 contact-form">
            {{ csrf_field() }}
            <div class="form-group">
                <input name="id_user" value="{{ $event->id_user }}" type="hidden" class="form-control" placeholder="Id user">
              </div>
              <div class="form-group">
                <input name="nama_event" value="{{ $event->nama }}" type="text" class="form-control" placeholder="Nama event">
              </div>
              <div class="form-group">
                <input name="nama" type="text" class="form-control" placeholder="Nama anda">
              </div>
              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="Email anda">
              </div>
              <div class="form-group">
                <input name="no_hp" type="number" class="form-control" placeholder="No HP / WA">
              </div>
              <div class="form-group">
                <textarea name="alamat" id="" cols="30" rows="7" class="form-control" placeholder="Alamat"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

         
        </div>
      </div>
    </section>
