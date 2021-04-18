<!DOCTYPE html>
<html lang="en">

<head>
    @include('property_pages.head')
</head>

<body>

  <!-- ======= Property Search Section ======= -->
    @include('property_pages.search')
  <!-- End Property Search Section -->>

  <!-- ======= Header/Navbar ======= -->
    @include('property_pages.navbar')
  <!-- End Header/Navbar -->

  <main id="main">

    <!-- ======= Intro Single ======= -->
      @include('property_pages.single')
    <!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
      @include('property_pages.grid')
    <!-- End Property Grid Single-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    @include('property_pages.footer')
  <!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
    @include('property_pages.script')

</body>

</html>