<!DOCTYPE html>
<html lang="en">

<head>
    @include('contact_pages.head')
</head>

<body>

  <!-- ======= Property Search Section ======= -->
    @include('contact_pages.search')
 <!-- End Property Search Section -->>

  <!-- ======= Header/Navbar ======= -->
      @include('contact_pages.navbar')
  <!-- End Header/Navbar -->

  <main id="main">

    <!-- ======= Intro Single ======= -->
      @include('contact_pages.single')
    <!-- End Intro Single-->

    <!-- ======= Contact Single ======= -->
      @include('contact_pages.contactsingle')
    <!-- End Contact Single-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    @include('contact_pages.footer')
  <!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
    @include('contact_pages.script')

</body>

</html>