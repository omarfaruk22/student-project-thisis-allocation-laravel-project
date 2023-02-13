<!-- this head section  -->

@include('backend.includes.head')

    <!-- vendor css -->
    @include('backend.includes.css')

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>Admin <i>Panel</i><span>]</span></a></div>
   <!-- this is left side var  -->
 @include('backend.includes.sidebar')

    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <!-- this is the topbar  -->
    @include('backend.includes.topbar')
    <!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->

    <!-- this is the rightbar  -->
    @include('backend.includes.rightbar')
    <!-- br-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
  <!-- br-mainpanel -->

@yield('content')
    <!-- ########## END: MAIN PANEL ########## -->

   <!-- this is java script section  -->
   @include('backend.includes.jss')
  </body>
</html>
