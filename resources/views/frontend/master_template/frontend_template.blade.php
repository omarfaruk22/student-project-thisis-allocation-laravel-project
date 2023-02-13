<!-- this is meta and css section  -->
@include('frontend.includes.head')

<!-- Topbar Start -->

 <!-- this is topbar section  -->
 @include('frontend.includes.topbar')
<!-- Topbar End -->

@include('frontend.includes.navber')
<!-- Navbar Start -->
<!-- thi is main section  -->
@yield('frontend')
<!-- Contact End -->


<!-- Footer Start -->
<!-- thi is footer section  -->
@include('frontend.includes.footer')
<!-- Footer End -->

<!-- JavaScript Libraries -->
<!-- This js section  -->
@include('frontend.includes.js')