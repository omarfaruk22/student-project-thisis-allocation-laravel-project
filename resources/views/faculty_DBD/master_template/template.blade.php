<!-- this head section  -->

@include('faculty_DBD.includes.head')

    <!-- vendor css -->
    @include('faculty_DBD.includes.css')

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>Faculty <i>Panel</i><span>]</span></a></div>
   <!-- this is left side var  -->
 @include('faculty_DBD.includes.sidebar')

    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <!-- this is the topbar  -->
    @include('faculty_DBD.includes.topbar')
    <!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->

    <!-- this is the rightbar  -->
    @include('faculty_DBD.includes.rightbar')
    <!-- br-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
  <!-- br-mainpanel -->

@yield('content')
    <!-- ########## END: MAIN PANEL ########## -->

   <!-- this is java script section  -->
   @include('faculty_DBD.includes.jss')
   
  </body>
</html>
