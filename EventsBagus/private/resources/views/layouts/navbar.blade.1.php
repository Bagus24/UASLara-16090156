<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-white ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{ url('/') }}">EventBagus</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Pilihan
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Beranda</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Eventbagus</a></li>
	          <li class="nav-item"><a href="{{ url('kontak') }}" class="nav-link">Kontak</a></li>
				<li class="nav-item cta mr-md-2"><a href="{{ url('daftar') }}" target="_blank" class="nav-link">Daftar</a></li>
	          <li class="nav-item cta mr-md-2"><a href="{{ url('login') }}" target="_blank" class="nav-link">Masuk</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>