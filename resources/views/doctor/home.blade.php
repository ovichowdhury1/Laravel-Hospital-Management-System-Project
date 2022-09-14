<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('doctor.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('doctor.sidebar')
      <!-- partial -->
       @include('doctor.navbar')
        <!-- partial -->
        @include('doctor.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('doctor.script')
    <!-- End custom js for this page -->
  </body>
</html>doctor/
