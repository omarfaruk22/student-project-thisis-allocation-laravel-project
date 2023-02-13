<div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="{{url('/faculty/dashboard')}}" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
          <i class="fa fa-user"></i>
            <span class="menu-item-label">Allocated Group</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('show_group')}}" class="sub-link">Allocated Student Group</a></li>   
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="{{route('facultymessage')}}" class="br-menu-link">
          <i class="fas fa-comment-alt"></i>
            <span class="menu-item-label">Message</span>
          </a><!-- br-menu-link -->
        
        </li>
       

      <br>
    </div><!-- br-sideleft -->