<!DOCTYPE html>
<html lang="en">

<!-- head -->
@include('layouts.head')

  <body>
    
@include('layouts.navbar')
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('public/eventalk/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> TEMUKAN...!!!!! <br><span>Event - event TERBARU</span></h1>
            
          </div>
        </div>
      </div>
    </div>

@include('layouts.form_search')
    
@include('layouts.event')




    <!-- footer -->
@include('layouts.footer')

  <!-- loader -->
@include('layouts.loader')

    <!-- script -->
@include('layouts.scripts')
    
  </body>
</html>