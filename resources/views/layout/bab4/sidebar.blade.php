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
          <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Bab 4 || Analisis & Perancangan</span></li>
          <li class="{{ request()->routeIs('bab4.mccalls') ? 'active' : '' }}">
            <a href="{{ route('bab4.mccalls') }}" class="iq-waves-effect" aria-expanded="false">
                <i class="mdi mdi-numeric-1"></i><span>Mc Call's Model</span>
            </a>
          </li>
          <li class="{{ request()->routeIs('bab4.backlog') ? 'active' : '' }}">
            <a href="{{ route('bab4.backlog') }}" class="iq-waves-effect" aria-expanded="false">
                <i class="mdi mdi-numeric-2"></i><span>Product Backlog</span>
            </a>
          </li>
          <li class="{{ request()->routeIs('bab4.planning') ? 'active' : '' }}">
            <a href="{{ route('bab4.planning') }}" class="iq-waves-effect" aria-expanded="false">
                <i class="mdi mdi-numeric-3"></i><span>Sprint Planning</span>
            </a>
          </li>

          <li>
            <a href="#uml" 
               class="iq-waves-effect {{ request()->routeIs('bab4.uc', 'bab4.act', 'bab4.seq', 'bab4.class') ? '' : 'collapsed' }}" 
               data-toggle="collapse" 
               aria-expanded="{{ request()->routeIs('bab4.uc', 'bab4.act', 'bab4.seq', 'bab4.class') ? 'true' : 'false' }}">
               <i class="mdi mdi-numeric-4"></i><span>Perancangan UML</span>
               <i class="ri-arrow-right-s-line iq-arrow-right"></i>
            </a>
            <ul id="uml" 
               class="iq-submenu collapse {{ request()->routeIs('bab4.uc', 'bab4.act', 'bab4.seq', 'bab4.class') ? 'show' : '' }}" 
               data-parent="#iq-sidebar-toggle">
               
               <li class="{{ request()->routeIs('bab4.uc') ? 'active' : '' }}">
                     <a href="{{ route('bab4.uc') }}"><i class="mdi mdi-numeric-1"></i>Use Case Diagram</a>
               </li>
               <li class="{{ request()->routeIs('bab4.act') ? 'active' : '' }}">
                     <a href="{{ route('bab4.act') }}"><i class="mdi mdi-numeric-2"></i>Activity Diagram</a>
               </li>
               <li class="{{ request()->routeIs('bab4.seq') ? 'active' : '' }}">
                     <a href="{{ route('bab4.seq') }}"><i class="mdi mdi-numeric-4"></i>Sequence Diagram</a>
               </li>
               <li class="{{ request()->routeIs('bab4.class') ? 'active' : '' }}">
                     <a href="{{ route('bab4.class') }}"><i class="mdi mdi-numeric-5"></i>Class Diagram</a>
               </li>
            </ul>
         </li>
         <li>
            <a href="#basis" 
               class="iq-waves-effect {{ request()->routeIs('bab4.erd', 'bab4.kamus') ? '' : 'collapsed' }}" 
               data-toggle="collapse" 
               aria-expanded="{{ request()->routeIs('bab4.erd', 'bab4.kamus') ? 'true' : 'false' }}">
               <i class="mdi mdi-numeric-5"></i><span>Perancangan Basis Data</span>
               <i class="ri-arrow-right-s-line iq-arrow-right"></i>
            </a>
            <ul id="basis" 
               class="iq-submenu collapse {{ request()->routeIs('bab4.erd', 'bab4.kamus') ? 'show' : '' }}" 
               data-parent="#iq-sidebar-toggle">
               
               <li class="{{ request()->routeIs('bab4.erd') ? 'active' : '' }}">
                     <a href="{{ route('bab4.erd') }}"><i class="mdi mdi-numeric-1"></i>Entity Relationship Diagram</a>
               </li>
               <li class="{{ request()->routeIs('bab4.kamus') ? 'active' : '' }}">
                     <a href="{{ route('bab4.kamus') }}"><i class="mdi mdi-numeric-2"></i>Kamus Data</a>
               </li>
               
            </ul>
         </li>
         <li class="{{ request()->routeIs('bab4.pam') ? 'active' : '' }}">
            <a href="{{ route('bab4.pam') }}" class="iq-waves-effect" aria-expanded="false">
                <i class="mdi mdi-numeric-6"></i><span>Perancangan Antar Muka</span>
            </a>
          </li>
       </ul>
    </nav>
    <div class="p-3"></div>
 </div>