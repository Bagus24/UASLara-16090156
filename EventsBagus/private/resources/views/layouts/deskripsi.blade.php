<section class="ftco-section services-section bg-light">
      <div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Deskripsi Event</span>
            <h2 class="mb-4"><span>Informasi</span> Lanjut</h2>
          </div>
        </div>
      </div>
</section>
<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class=" order-md-last ftco-animate">
            
            <p>{!! $event->isi !!}</p>
            
      </div>
    </section>  

    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Deskripsi Event</span>
            <h2 class="mb-4"><span>Jadwal</span> Kegiatan</h2>
          </div>
        </div>
        <div class="ftco-search">
					<div class="row">
            <div class="col-md-12 nav-link-wrap">
	            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	              <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Hari ke - 1</a>

	              <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Hari ke - 2</a>

	              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Hari ke - 3</a>

	              <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Hari ke - 4</a>

	            </div>
	          </div>
	          <div class="col-md-12 tab-wrap">
	            
	            <div class="tab-content" id="v-pills-tabContent">

	              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
					@foreach($jadwal1 as $j1)
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="text pl-md-5">
	              			<span class="time">Pukul {{ $j1->jam }}</span>
	              			<h2>{{ $j1->kegiatan }}</h2>
	              			<p>{!! $j1->isi !!}</p>
	              			
	              		</div>
	              	</div>
					@endforeach
				</div>

	              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
				  @foreach($jadwal2 as $j2)
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		
	              		<div class="text pl-md-5">
	              			<span class="time">Pukul {{ $j2->jam }}</span>
	              			<h2>{{ $j2->kegiatan }}</h2>
	              			<p>{!! $j2->isi !!}</p>
	              			
	              		</div>
					  </div>
					  @endforeach
					</div>
	              	
	              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="img speaker-img" style="background-image: url(images/person_1.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08: - 10:00</span>
	              			<h2><a href="#">Introduction to Wordpress 5.0</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
					  </div>
					
	              	
				  </div>
				  
	              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="img speaker-img" style="background-image: url(images/person_1.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08: - 10:00</span>
	              			<h2><a href="#">Introduction to Wordpress 5.0</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              	
	              </div>
	            </div>
	          </div>
	        </div>
        </div>
			</div>
		</section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Kontak Informasi</h2>
          </div>
          <!-- <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
          </div> -->
          
          
					
					<ul class="ftco-footer-social list-unstyled col-md-3 ">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>

					<div class="col-md-3">
							
							<a href="{{ url('daftar-peserta') }}/{{ $event->id }}" class="btn btn-primary-daftar">Daftar Sebagai Peserta</a>
          			</div>
					
          
        </div>
        
      </div>
    </section>

