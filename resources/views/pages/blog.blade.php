<!DOCTYPE html>
<html lang="en">

<head>
    @include('blog_pages.head')
</head>

<body>

  <!-- ======= Property Search Section ======= -->
    @include('blog_pages.search')
  <!-- End Property Search Section -->>

  <!-- ======= Header/Navbar ======= -->
    @include('blog_pages.navbar')
  <!-- End Header/Navbar -->

  <main id="main">

    <!-- ======= Intro Single ======= -->
      @include('blog_pages.single')
    <!-- End Intro Single-->

    <!-- =======  Blog Grid ======= -->
      @include('blog_pages.bloggrid')
    <!-- End Blog Grid-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    @include('blog_pages.footer')
  <!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->

    @include('blog_pages.script')

</body>

</html>