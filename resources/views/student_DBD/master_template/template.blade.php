<!-- this is head section  -->
@include('student_DBD.includes.head')

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    @include('student_DBD.includes.sidebar')
   
    <!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
   @include('student_DBD.includes.headpanel')
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    @include('student_DBD.includes.rightbar')
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    @yield('main')
    <!-- ########## END: MAIN PANEL ########## -->
    <!-- this is js section  -->
    @include('student_DBD.includes.js')
