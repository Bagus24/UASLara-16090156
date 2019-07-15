<section class="ftco-section bg-light">
      <div class="container">
      
      
        <div class="row d-flex">
        @foreach($event as $e)
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="{{ url('deskripsi-event') }}/{{ $e->id }}" class="block-20" style="background-image: url('{{ asset('private/public/public/images/event/' . $e->foto) }}');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4">	
              			<span>{{ $e->tanggal }}</span>
              	</div>
                <h3 class="heading mt-2"><a href="{{ url('deskripsi_event') }}">{!! $e->nama !!}</a></h3>
                
              </div>
            </div>
          </div>
          @endforeach
         
  
        </div>
        
        

        <div class="row mt-5">
          <div class="col text-center">
            
          <ul class="pagination justify-content-end mb-0">
                  
                  {{ $event->links() }}
                </ul>
            
          </div>
        </div>
      </div>
    </section>