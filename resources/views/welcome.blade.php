@extends('layouts.app')

@section('content')
<!-- ======= Header/Navbar ======= -->

      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{url('/Estate')}}">Estate<span class="color-b">Agency</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('pages.about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('pages.property')}}">Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('/pages.blog')}}">Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pages
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{url('/Property Single')}}">Property Single</a>
              <a class="dropdown-item" href="{{url('/Blog Single')}}">Blog Single</a>
              <a class="dropdown-item" href="{{url('/Agents Grid')}}">Agents Grid</a>
              <a class="dropdown-item" href="{{url('/Agent Single')}}">Agent Single</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('/pages.contact')}}">Contact</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    <!-- End Header/Navbar -->

  

@endsection