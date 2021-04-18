
<!DOCTYPE html>
<html lang="en">

<head>
    @include('about_pages.head')
</head>

<body>

  <!-- ======= Property Search Section ======= -->
    @include('about_pages.search')
  <!-- End Property Search Section -->

  <!-- ======= Header/Navbar ======= -->
    @include('about_pages.navbar')
  <!-- End Header/Navbar -->

  <main id="main">

    <!-- ======= Intro Single ======= -->
      @include('about_pages.single')
    <!-- End Intro Single-->

    <!-- ======= About Section ======= -->
      @include('about_pages.aboutsection')

    <!-- =======Team Section ======= -->
      @include('about_pages.teamsection')
    <!-- End About Section-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    @include('about_pages.footer')
  <!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
    @include('about_pages.script')

</body>

</html>
