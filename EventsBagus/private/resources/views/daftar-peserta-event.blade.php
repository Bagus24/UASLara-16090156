<!DOCTYPE html>
<html lang="en">

<!-- head -->
@include('layouts.head')


  <body>
    
@include('layouts.navbar')
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('{{asset('private/public/public/images/event/' . $event->foto)}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> <span> {{ $event->nama }}</span> <br>{{ $event->tanggal }}</h1>
            <h3 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Di {{ $event->tempat }}</h3>
            
          </div>
        </div>
      </div>
    </div>
 
@include('layouts.daftar-peserta')


    <!-- footer -->
@include('layouts.footer')
    
  

  <!-- loader -->
@include('layouts.loader')


    <!-- script -->
@include('layouts.scripts')
    
  </body>
</html>