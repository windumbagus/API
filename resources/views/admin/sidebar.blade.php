<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        
        <!-- Optionally, you can add icons to the links -->
        
        <li class="treeview">
            <a href="#"><i class="fa fa-users"></i> <span>User Management</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ asset('user_mobile') }}">User Mobile</a></li>
              <li><a href="{{ asset('user_cms') }}">User CMS</a></li>
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

        <li class="treeview">
            <a href="#"><i class="fa fa-lock"></i> <span>Master Management</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ asset('master_gcm') }}">Master GCM</a></li>
              <li><a href="#">Master Kota Tempat Tinggal</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#"><i class="fa fa-cogs"></i> <span>Content Management</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#">Master Content</a></li>
              <li><a href="{{ asset('PushNotification') }}">Push Notification</a></li>
            </ul>
        </li>

        <li><a href="http://127.0.0.1:8000"><i class="fa fa-calendar-o"></i> <span>Calendar</span></a></li>
        
        <li><a href="{{ asset('SalesAssigment') }}"><i class="fa fa-tasks"></i> <span>Sales Assignment</span></a></li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-eye"></i> <span>Leads Monitoring</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Active Leads</a></li>
            <li><a href="#">Archive</a></li>
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

          <li class="treeview">
            <a href="#"><i class="fa fa-code"></i> <span>Debug</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#">Debug GCM</a></li>
              <li><a href="#">Debug Create Master Content</a></li>
              <li><a href="#">Debug criticism and suggestions</a></li>
              <li><a href="#">Debug Role Management</a></li>
              <li><a href="#">Debug Tmp_GCM</a></li>          
            </ul>
          </li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>