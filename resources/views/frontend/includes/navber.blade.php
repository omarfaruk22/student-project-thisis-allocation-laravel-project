<div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg  navbar-light py-0 py-lg-0 px-lg-5">
            <a href="{{route('landinghome')}}" class="navbar-brand ml-lg-3">
                <div class="logo pl-3 pt-0 pb-0">
                <img src="{{asset('frontend/img/logo2.png')}}" alt="logo">
                </div>
            
                <!-- <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-book-reader mr-3"></i>Edukate</h1> -->
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">

            <a href="{{route('landinghome')}}" class="nav-item nav-link <?php echo ($currentPage == 'home') ? 'active' : ''; ?>">Home</a>
<a href="{{route('landingabout')}}" class="nav-item nav-link <?php echo ($currentPage == 'about') ? 'active' : ''; ?>">About</a>
<a href="{{route('landingfield')}}" class="nav-item nav-link <?php echo ($currentPage == 'field') ? 'active' : ''; ?>">Research Field</a>          
<a href="{{route('landingcontact')}}" class="nav-item nav-link <?php echo ($currentPage == 'contact') ? 'active' : ''; ?>">Contact</a>
</div>
                <!-- <div class="nav-item dropdown">
                  <a href="" class="btn btn-primary py-2 px-4 d-none d-lg-block nav-link dropdown-toggle" data-toggle="dropdown">Login/Register</a>  
                  <div class="dropdown-menu m-0">
                            <a href="{{Route('student.login')}}" class="dropdown-item">Student</a>
                            <a href="{{Route('faculty.login')}}" class="dropdown-item">Faculty</a>
                  </div>
                </div> -->
                <div class="dropdown">
                          <button class="dropbtn">Login/Register</button>
                     <div class="dropdown-content">
                     <a href="{{Route('student.login')}}">Student</a>
                                 <a href="{{Route('faculty.login')}}">Faculty</a>
                                     </div>
                                        </div>
                
               
            </div>
        </nav>
    </div>

    <script>
        var currentPage = window.location.href;

// Select all the navigation items
var navItems = document.querySelectorAll(".nav-item nav-link ");

// Loop through the navigation items
for (var i = 0; i < navItems.length; i++) {
  // Get the href attribute of the navigation item
  var navItemHref = navItems[i].getAttribute("href");

  // Check if the current page URL contains the navigation item href
  if (currentPage.indexOf(navItemHref) !== -1) {
    // Add the active class to the navigation item
    navItems[i].parentElement.classList.add("active");
  }
}
    </script>