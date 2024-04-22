<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
  <body>
    <!-- top navigation bar -->
    @include('layouts.nav')
    <!-- top navigation bar -->
    <!-- offcanvas -->
    @include('layouts.side')
    <!-- offcanvas -->
    @yield('content')

    <div class="card text-center navbar-dark bg-dark text-light">
      <!-- <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
       
      </footer> -->
      @include('layouts.footer')

    </div>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
