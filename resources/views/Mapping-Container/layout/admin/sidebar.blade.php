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
 @if (request()->routeIs('profile'))
<div id="sidebar-scrollbar">
    <nav class="iq-sidebar-menu">
        <ul id="iq-sidebar-toggle" class="iq-menu">
          <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Back</span></li>

          <li class="{{ request()->routeIs('Administrator.kelola-user') ? 'active' : '' }}">
              <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
          </li>
        </ul>
    </nav>
</div>
@else
 <div id="sidebar-scrollbar">
    <nav class="iq-sidebar-menu">
       <ul id="iq-sidebar-toggle" class="iq-menu">
        <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Home</span></li>
        <li class="{{ request()->routeIs('welcome') ? 'active' : '' }}">
            <a href="{{route('welcome')}}" class="iq-waves-effect">
                <i class="ri-home-4-line"></i><span>Dashboard</span>
            </a>
        </li>
          <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Kelola User</span></li>
          <li><a href="{{route('kelola-user')}}" class="iq-waves-effect" aria-expanded="false"><i class="mdi mdi-account"></i><span>Kelola User</span></a></li>
          <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>From Checklist</span></li>
          <li><a href="{{route('Form-Check.admin.crane')}}" class="iq-waves-effect" aria-expanded="false"><i class="mdi mdi-crane"></i><span>Crane</span></a></li>
          <li><a href="{{route('Form-Check.admin.forklift')}}" class="iq-waves-effect" aria-expanded="false"><i class="mdi mdi-forklift"></i><span>Forklift</span></a></li>
          <li><a href="{{route('Form-Check.admin.trailler')}}" class="iq-waves-effect" aria-expanded="false"><i class="mdi mdi-truck"></i><span>Trailler</span></a></li>
          <li><a href="{{route('Form-Check.admin.eup')}}" class="iq-waves-effect" aria-expanded="false"><i class="mdi mdi-shipping-pallet"></i><span>EUP</span></a></li>
          
          {{-- <li>
             <a href="#crane" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="mdi mdi-crane"></i><span>Crane</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
             <ul id="crane" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                <li><a href="profile.html"><i class="mdi mdi-weight"></i>30 Ton</a></li>
               <li><a href="profile.html"><i class="mdi mdi-weight"></i>10 Ton</a></li>
               <li><a href="profile.html"><i class="mdi mdi-weight"></i>5 Ton L8</a></li>
                
             </ul>
          </li> --}}

          {{-- <li>
            <a href="#forklift" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                <i class="mdi mdi-forklift"></i>
                <span>Forklift</span>
                <i class="ri-arrow-right-s-line iq-arrow-right"></i>
            </a>
            <ul id="forklift" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                <li>
                    <a href="#forklift5" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="mdi mdi-forklift"></i>
                        <span>Forklift 5 ton</span>
                        <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                    </a>
                    <ul id="forklift5" class="iq-submenu collapse" data-parent="#forklift">
                        <li>
                            <a href="profile.html">
                                <i class="ri-profile-line"></i>
                                30 Ton
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li> --}}
        
        
          <li>
             <a href="#userinfo" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="mdi mdi-warehouse"></i><span>Kedatangan Material</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
             <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                <li><a href="{{route('Form-Check.admin.crc')}}"><i class="mdi mdi-barn"></i>CRC</a></li>
                <li><a href="{{route('Form-Check.admin.ingot')}}"><i class="mdi mdi-gold"></i>INGOT</a></li>
                <li><a href="{{route('Form-Check.admin.resin')}}"><i class="mdi mdi-barrel"></i>RESIN/ALKALI</a></li>

                
             </ul>
          </li>
          <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>From Response</span></li>

          <li>
            <a href="#craneresponse" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="mdi mdi-crane"></i><span>Crane</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul id="craneresponse" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
               <li><a href="profile.html"><i class="mdi mdi-weight"></i>30 Ton</a></li>
               <li><a href="profile.html"><i class="mdi mdi-weight"></i>10 Ton</a></li>
               <li><a href="profile.html"><i class="mdi mdi-weight"></i>5 Ton L8</a></li>
               
            </ul>
         </li>
         <li>
           <a href="#forkliftresponse" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
               <i class="mdi mdi-forklift"></i>
               <span>Forklift</span>
               <i class="ri-arrow-right-s-line iq-arrow-right"></i>
           </a>
           <ul id="forkliftresponse" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
               <li>
                   <a href="#forklift5response" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false">
                       <i class="mdi mdi-forklift"></i>
                       <span>Forklift 5 ton</span>
                       <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                   </a>
                   <ul id="forklift5response" class="iq-submenu collapse" data-parent="#forklift">
                       <li>
                           <a href="profile.html">
                               <i class="ri-profile-line"></i>
                               30 Ton
                           </a>
                       </li>
                   </ul>
               </li>
           </ul>
       </li>
       
       
         <li>
            <a href="#truckresponse" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="mdi mdi-truck"></i><span>Truck</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul id="truckresponse" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
               <li><a href="profile.html"><i class="ri-profile-line"></i>30 Ton</a></li>

               
            </ul>
         </li>
          
       </ul>
    </nav>
    <div class="p-3"></div>
 </div>
 @endif