<!DOCTYPE html>
<html>

<!-- head -->
@include('layout_penyelenggara.head')
<body>
  <!-- Sidenav -->
@include('layout_penyelenggara.sidebar')
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
@include('layout_penyelenggara.navbar')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
        </div>
      </div>
    </div>
    <!-- Page content -->
@include('layout_penyelenggara.post-event')
      
      <!-- Footer -->
@include('layout_penyelenggara.footer')
    </div>
  </div>
  <!-- Argon Scripts -->
@include('layout_penyelenggara.script')
</body>

</html>
