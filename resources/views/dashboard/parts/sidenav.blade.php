 <nav class="nxl-navigation">
     <div class="navbar-wrapper">
         <div class="m-header">
             <a href="index.html" class="b-brand">
                 <!-- ========   change your logo hear   ============ -->
                 <img src="/assets/images/logo-full.png" alt="" class="logo logo-lg" />
                 <img src="/assets/images/logo-abbr.png" alt="" class="logo logo-sm" />
             </a>
         </div>
         <div class="navbar-content">
             <ul class="nxl-navbar">

                 <li class="nxl-item">
                     <a href="{{url('/dashboard')}}" class="nxl-link">
                         <span class="nxl-micon"><i class="feather-airplay"></i></span>
                         <span class="nxl-mtext">Dashboards</span>
                     </a>

                 </li>

                 <li class="nxl-item">
                     <a href="{{url('/clients')}}" class="nxl-link">
                         <span class="nxl-micon"><i class="feather-users"></i></span>
                         <span class="nxl-mtext">Clients</span>
                     </a>

                 </li>


                 <li class="nxl-item">
                     <a href="{{url('/housemanager')}}" class="nxl-link">
                         <span class="nxl-micon"><i class="feather-home"></i></span>
                         <span class="nxl-mtext">House Managers</span>
                     </a>

                 </li>


                 <li class="nxl-item">
                     <a href="{{url('/appointments')}}" class="nxl-link">
                         <span class="nxl-micon"><i class="feather-book"></i></span>
                         <span class="nxl-mtext">Appointments</span>
                     </a>

                 </li>


                 <li class="nxl-item">
                     <a href="{{url('/interviews')}}" class="nxl-link">
                         <span class="nxl-micon"><i class="feather-clipboard"></i></span>
                         <span class="nxl-mtext">Interviews</span>
                     </a>

                 </li>


                 <li class="nxl-item nxl-hasmenu">
                     <a href="javascript:void(0);" class="nxl-link">
                         <span class="nxl-micon"><i class="feather-dollar-sign"></i></span>
                         <span class="nxl-mtext">Payments</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                     </a>
                     <ul class="nxl-submenu">
                         <li class="nxl-item"><a class="nxl-link" href="{{url('/client_payments')}}">Clients Payments</a></li>
                         <li class="nxl-item"><a class="nxl-link" href="{{url('/girls_payments')}}">Girls Payments</a></li>
                         <li class="nxl-item"><a class="nxl-link" href="{{url('/uniform_payments')}}">Uniform Payments</a></li>
                         <li class="nxl-item"><a class="nxl-link" href="{{url('/payments')}}">All Payments</a></li>

                     </ul>
                 </li>


                 <li class="nxl-item nxl-hasmenu">
                     <a href="javascript:void(0);" class="nxl-link">
                         <span class="nxl-micon"><i class="feather-package"></i></span>
                         <span class="nxl-mtext">Uniforms</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                     </a>
                     <ul class="nxl-submenu">
                         <li class="nxl-item"><a class="nxl-link" href="{{url('/uniforms')}}">All Uniforms</a></li>
                         <li class="nxl-item"><a class="nxl-link" href="{{url('/uniforms_sales')}}">Sales</a></li>
                     </ul>
                 </li>

                 <li class="nxl-item">
                     <a href="{{url('/placements')}}" class="nxl-link">
                         <span class="nxl-micon"><i class="feather-cast"></i></span>
                         <span class="nxl-mtext">Placements</span>
                     </a>

                 </li>



                 <li class="nxl-item">
                     <a href="{{url('/replacements')}}" class="nxl-link">
                         <span class="nxl-micon"><i class="feather-minimize-2"></i></span>
                         <span class="nxl-mtext">Replacements</span>
                     </a>

                 </li>

                 <li class="nxl-item">
                     <a href="{{url('/profile')}}" class="nxl-link">
                         <span class="nxl-micon"><i class="feather-user"></i></span>
                         <span class="nxl-mtext">Profile</span>
                     </a>

                 </li>

                 <li class="nxl-item nxl-hasmenu">
                     <a href="javascript:void(0);" class="nxl-link">
                         <span class="nxl-micon"><i class="feather-users"></i></span>
                         <span class="nxl-mtext">Users</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                     </a>
                     <ul class="nxl-submenu">
                         <li class="nxl-item"><a class="nxl-link" href="{{url('/managers')}}">Managers</a></li>
                         <li class="nxl-item"><a class="nxl-link" href="{{url('/staff')}}">Staff</a></li>
                         <li class="nxl-item"><a class="nxl-link" href="{{url('/Others')}}">Other Users</a></li>
                     </ul>
                 </li>

                 <li class="nxl-item nxl-hasmenu">
                     <a href="javascript:void(0);" class="nxl-link">
                         <span class="nxl-micon"><i class="feather-pie-chart"></i></span>
                         <span class="nxl-mtext">Reports</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                     </a>
                     <ul class="nxl-submenu">
                         <li class="nxl-item"><a class="nxl-link" href="{{url('/general_report')}}">General Report</a></li>
                         <li class="nxl-item"><a class="nxl-link" href="{{url('/payment_report')}}">Payment Report</a></li>
                         <li class="nxl-item"><a class="nxl-link" href="{{url('/girls_report')}}">Girls Report</a></li>
                     </ul>
                 </li>
                 <li class="nxl-item nxl-hasmenu">
                     <a href="javascript:void(0);" class="nxl-link">
                         <span class="nxl-micon"><i class="feather-settings"></i></span>
                         <span class="nxl-mtext">Settings</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                     </a>
                     <ul class="nxl-submenu">
                         <li class="nxl-item"><a class="nxl-link" href="{{url('/settings')}}">General Settings</a></li>
                         <li class="nxl-item"><a class="nxl-link" href="{{url('/roles')}}">Roles</a></li>
                         <li class="nxl-item"><a class="nxl-link" href="{{url('/other_settings')}}">Other Settings</a></li>

                     </ul>
                 </li>
                 <li class="nxl-item">
                     <a href="{{url('/')}}" class="nxl-link">
                         <span class="nxl-micon"><i class="feather-log-out"></i></span>
                         <span class="nxl-mtext">Logout</span>
                     </a>

                 </li>

             </ul>

         </div>
     </div>
 </nav>