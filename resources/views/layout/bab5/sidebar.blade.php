<div class="iq-sidebar-logo d-flex justify-content-between">
    <a href="{{route('welcome')}}">
    <div class="iq-light-logo">
       <div class="iq-light-logo">
          <img src="{{asset('Logo TML.png')}}" class="img-fluid" alt="">
        </div>
          <div class="iq-dark-logo">
             <img src="{{asset('Logo TML.png')}}" class="img-fluid" alt="">
          </div>
    </div>
    <div class="iq-dark-logo">
       <img width="20%" src="{{asset('Logo TML.png')}}" class="img-fluid" alt="">
    </div>
    <span>Tml</span>
    </a>
    <div class="iq-menu-bt-sidebar">
       <div class="iq-menu-bt align-self-center">
          <div class="wrapper-menu">
             <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
             <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
          </div>
       </div>
    </div>
 </div>

 <div id="sidebar-scrollbar">
    <nav class="iq-sidebar-menu">
       <ul id="iq-sidebar-toggle" class="iq-menu">
        <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Home</span></li>
        <li class="{{ request()->routeIs('welcome') ? 'active' : '' }}">
            <a href="{{route('welcome')}}" class="iq-waves-effect">
                <i class="ri-home-4-line"></i><span>Dashboard</span>
            </a>
        </li>
          <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Bab 5 || Implementasi & Evaluasi</span></li>
          <li class="{{ request()->routeIs('bab5.imccalls') ? 'active' : '' }}">
            <a href="{{ route('bab5.imccalls') }}" class="iq-waves-effect" aria-expanded="false">
                <i class="mdi mdi-numeric-1"></i><span>Mc Call's Model</span>
            </a>
          </li>
        <li class="{{ request()->routeIs('bab5.sistem') ? 'active' : '' }}">
            <a href="{{ route('bab5.sistem') }}" class="iq-waves-effect" aria-expanded="false">
                <i class="mdi mdi-numeric-2"></i><span>Sistem</span>
            </a>
          </li>
        <li class="{{ request()->routeIs('bab5.sprint') ? 'active' : '' }}">
            <a href="{{ route('bab5.sprint') }}" class="iq-waves-effect" aria-expanded="false">
                <i class="mdi mdi-numeric-3"></i><span>Sprint Execution</span>
            </a>
          </li>
          <li class="{{ request()->routeIs('bab5.blackbox') ? 'active' : '' }}">
            <a href="{{ route('bab5.blackbox') }}" class="iq-waves-effect" aria-expanded="false">
                <i class="mdi mdi-numeric-4"></i><span>Blackbox</span>
            </a>
          </li>
          <li class="{{ request()->routeIs('bab5.uat') ? 'active' : '' }}">
            <a href="{{ route('bab5.uat') }}" class="iq-waves-effect" aria-expanded="false">
                <i class="mdi mdi-numeric-5"></i><span>User Acceptance Testing</span>
            </a>
          </li>
       </ul>
    </nav>
    <div class="p-3"></div>
 </div>