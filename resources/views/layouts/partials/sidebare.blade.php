<div class="main-nav">
    <!-- Sidebar Logo -->
    <div class="logo-box">
         <a href="{{asset('index.html')}}" class="logo-dark">
              <img src="{{asset('assets/images/logo-sm.png')}}" class="logo-sm" alt="logo sm">
              <img src="{{asset('assets/images/logo-dark.png')}}" class="logo-lg" alt="logo dark">
         </a>

         <a href="{{asset('index.html" class="logo-light')}}">
              <img src="{{asset('assets/images/logo-sm.png')}}" class="logo-sm" alt="logo sm">
              <img src="{{asset('assets/images/logo-light.png')}}" class="logo-lg" alt="logo light">
         </a>
    </div>

    <!-- Menu Toggle Button (sm-hover) -->
    <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
         <i class="ri-menu-2-line fs-24 button-sm-hover-icon"></i>
    </button>

    <div class="scrollbar" data-simplebar>

         <ul class="navbar-nav" id="navbar-nav">

            <li class="menu-title">Menu</li>

            <li class="nav-item">
                   <a class="nav-link " href="{{route('dashboard.index')}}"  role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <span class="nav-icon">
                             <i class="ri-dashboard-2-line"></i>
                        </span>
                        <span class="nav-text"> Dashboards </span>
                   </a>
                   
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{route('historiques.index')}}"  role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                     <span class="nav-icon">
                        <i class="ri-history-line"></i>
                     </span>
                     <span class="nav-text"> Historiques </span>
                </a>
               
            </li>
            <li class="nav-item">
                    <a class="nav-link menu-arrow" href="{{asset('#sidebarDashboards')}}" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <span class="nav-icon">
                            <i class="ri-settings-3-line"></i>
                        </span>
                        <span class="nav-text"> Parametrage </span>
                    </a>
                    <div class="collapse" id="sidebarDashboards">
                        <ul class="nav sub-navbar-nav">
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="{{route('senders-ids.index')}}">Sender ID(Expéditeur)</a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="{{route('token.index')}}">Token authentification</a>
                            </li>
                            
                        </ul>
                    </div>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="{{asset('#sidebarDashboards')}}"  role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <span class="nav-icon">
                            <i class="ri-file-text-line"></i>
                        </span>
                        <span class="nav-text"> Documentation </span>
                    </a>
                
            </li>

              {{-- <li class="nav-item">
                   <a class="nav-link" href="">
                        <span class="nav-icon">
                             <i class="ri-shapes-line"></i>
                        </span>
                        <span class="nav-text">Widgets</span>
                        <span class="badge bg-danger badge-pill text-end">Hot</span>
                   </a>
              </li> --}}



         </ul>
    </div>
</div>
