<div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="{{Route('admin.home')}}" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
          <i class="fa fa-user"></i>
            <span class="menu-item-label">Adminastration</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{Route('register')}}" class="sub-link">Register Adminastration</a></li>
            <li class="sub-item"><a href="{{Route('fmanage')}}" class="sub-link">Manage Adminastration</a></li>
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
          <i class="fa fa-user"></i>
            <span class="menu-item-label">Faculty</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{Route('fregister')}}" class="sub-link">Register Faculty</a></li>
            <li class="sub-item"><a href="{{Route('fymanage')}}" class="sub-link">Manage Faculty</a></li>
          </ul>
        </li>
      
    
        <!-- this is studen group section  -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
          <i class="fa fa-users"></i>
            <span class="menu-item-label">Group</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{Route('gcreate')}}" class="sub-link">Add Student group</a></li>
            <li class="sub-item"><a href="{{Route('groupmanage')}}" class="sub-link">manage Student group</a></li>
          </ul>
        </li>
   

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
          <i class="fa fa-info-circle"></i>
            <span class="menu-item-label">Group Details</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{Route('dcreate')}}" class="sub-link">Add Student group details</a></li>
            <li class="sub-item"><a href="{{Route('dmanage')}}" class="sub-link">manage Student group details</a></li>
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
          <i class="fa fa-book"></i>
            <span class="menu-item-label">Research Fields</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{Route('pcreate')}}" class="sub-link">Add Research Fields</a></li>
            <li class="sub-item"><a href="{{Route('pmanage')}}" class="sub-link">manage Research Fields</a></li>
          </ul>
        </li>
     

      
         <!-- this is payment section  -->
         <li class="br-menu-item">
          <a href="{{Route('managepay')}}" class="br-menu-link ">
          <i class="fa fa-credit-card"></i>
            <span class="menu-item-label">Payment</span>
          </a><!-- br-menu-link -->
        
        </li>
        <li class="br-menu-item">
          <a href="{{route('allocatshowadmin')}}" class="br-menu-link ">
          <i class="fa fa-users"></i>
            <span class="menu-item-label">Allocated Group</span>
          </a><!-- br-menu-link -->
         
        </li>

        <li class="br-menu-item">
          <a href="{{route('contactst')}}" class="br-menu-link ">
          <i class="fas fa-address-book"></i>
            <span class="menu-item-label">Contact</span>
          </a><!-- br-menu-link -->
         
        </li>

        <!-- this is users or admin section  -->
        <li class="br-menu-item">
          <a href="{{route('show')}}" class="br-menu-link ">
          <i class="fa fa-user"></i>
            <span class="menu-item-label">Students</span>
          </a><!-- br-menu-link -->
         
        </li>

      <br>
    </div><!-- br-sideleft -->