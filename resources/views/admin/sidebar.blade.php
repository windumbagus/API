<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        
        <!-- Optionally, you can add icons to the links -->
        
        <li class="@yield('user-management') treeview">
            <a href="#"><i class="fa fa-users"></i> <span>User Management</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li class="@yield('user-mobile')"><a href="{{ asset('user_mobile') }}">User Mobile</a></li>
              <li class="@yield('user-cms')"><a href="{{ asset('user_cms') }}">User CMS</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#"><i class="fa fa-check-square-o"></i> <span>Account Verification</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#">Pending</a></li>
              <li><a href="#">Approve</a></li>
              <li><a href="#">Reject</a></li>
            </ul>
        </li>

        <li class="@yield('master-management') treeview">
            <a href="#"><i class="fa fa-lock"></i> <span>Master Management</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li class="@yield('master-gcm')"><a href="{{ asset('master_gcm') }}">Master GCM</a></li>
              <li class="@yield('master-kota-tempat-tinggal')"><a href="#">Master Kota Tempat Tinggal</a></li>
            </ul>
        </li>

        <li class="@yield('content-management') treeview">
            <a href="#"><i class="fa fa-cogs"></i> <span>Content Management</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li class="@yield('master-content')"><a href="#">Master Content</a></li>
              <li class="@yield('push-notif')"><a href="{{ asset('PushNotification') }}">Push Notification</a></li>
            </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-tags"></i> <span>Product Management</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Data Product</a></li>
            <li><a href="#">Time Notif</a></li>
            <li><a href="#">Source</a></li>
          </ul>
        </li>

        <li><a href="#"><i class="fa fa-calendar-o"></i> <span>Calendar</span></a></li>
        
        <li class="@yield('sales-assigment')"><a href="{{ asset('SalesAssigment') }}"><i class="fa fa-tasks"></i> <span>Sales Assignment</span></a></li>
        
        <li class="@yield('leads-monitoring') treeview">
          <a href="#"><i class="fa fa-eye"></i> <span>Leads Monitoring</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="@yield('active-leads')"><a href="{{ asset('active_leads') }}">Active Leads</a></li>
            <li class="@yield('archive')"><a href="{{ asset('archive') }}">Archive</a></li>
          </ul>
        </li>

        <li class="treeview">
            <a href="#"><i class="fa fa-commenting"></i> <span>Feedback</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#">Criticism and Suggestion</a></li>
            </ul>
          </li>

          <li class=" @yield('debug') treeview">
            <a href="#"><i class="fa fa-code"></i> <span>Debug</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#">Debug GCM</a></li>
              <li><a href="#">Debug Create Master Content</a></li>
              <li><a href="#">Debug criticism and suggestions</a></li>
              <li class="@yield('debug-role-management')"><a href="{{ asset('debug_role_management') }}">Debug Role Management</a></li>
              <li><a href="#">Debug Tmp_GCM</a></li>          
            </ul>
          </li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>