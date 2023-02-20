<div class="br-logo"><a href=""><span>[</span>Student <i>Panel</i><spa n>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="{{url('/student/dashboard')}}" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <!-- this is payment section  -->
        <li class="br-menu-item">
          <a href="{{route('pay_details')}} "class="br-menu-link">
            <i class="fab fa-cc-stripe tx-24"></i>
            <span class="menu-item-label">Payment</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <!-- end payment section  -->
        <li class="br-menu-item">
          <a href="{{route('check')}}" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-email-outline fa-2x"></i>
            <span class="menu-item-label">Allocation</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        <li class="br-menu-item">
          <a href="{{route('student_message')}}" class="br-menu-link">
            <i class="fas fa-comment-alt tx-24"></i>
            <span class="menu-item-label">Message</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
     
      </div><!-- info-list -->

      <br>
    </div>